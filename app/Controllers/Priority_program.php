<?php

namespace App\Controllers;

use App\Models\PriorityprogramModel;

class Priority_program extends BaseController
{
   public $priority_program;

   public function __construct()
   {
      $this->priority_program = new PriorityprogramModel();
   }

   public function index()
   {

      if (!user_can('view-priority-program')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      $data['title'] = "Priority Program";
      $this->breadcrumb->add('Dashboard', '/dashboard');
      $this->breadcrumb->add('List program', '/priority_program');
      $data['breadcrumbs'] = $this->breadcrumb->render();

      return view('dashboard/priority_program/list', $data);
   }

   public function add()
   {
      helper(['form', 'url']);

      if (!user_can('create-priority-program')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      $data['title'] = "Add priority program";

      $this->breadcrumb->add('Dashboard', '/dashboard');
      $this->breadcrumb->add('List priority program', '/priority_program');
      $this->breadcrumb->add('Add', '/priority_program/add');
      $data['breadcrumbs'] = $this->breadcrumb->render();

      $data['validation'] = \Config\Services::validation();

      return view('dashboard/priority_program/add', $data);
   }

   public function create()
   {
      if (!user_can('create-priority-program')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      //load helper form and URL
      helper(['form', 'url']);

      if (check_token('priority_program_add', $this->request->getVar('token'))) {
         //define validation
         $validation = [
            'content' => [
               'rules' => 'uploaded[content]|max_size[content,2024]|is_image[content]|mime_in[content,image/jpg,image/jpeg,image/png]',
               'errors' => [
                  'uploaded' => 'No Image Selected',
                  'max_size' => 'Image size Maximum 2 MB',
                  'is_image' => 'Image file type must be JPG, JPEG, PNG',
                  'mime_in' => 'Image file type must be JPG, JPEG, PNG',
               ],
            ],
            'title' => [
               'rules'  => 'required|min_length[1]|max_length[100]|is_unique[priority_program.title]',
               'errors' => [
                  'required' => 'title  field is required',
                  'min_length' => 'title  Minimum 1 Character',
                  'max_length' => 'title  Maximum 100 Character',
                  'is_unique' => 'title  alread Exist'
               ]
            ],
            'description' => [
               'rules'  => 'required|min_length[1]',
               'errors' => [
                  'required' => 'description field is required',
                  'min_length' => 'description Minimum 1 Character',
               ]
            ],
         ];

         if (!$this->validate($validation)) {
            return redirect()->back()->withInput();
         } else {

            $imgPath = $this->request->getFile('content');
            $title = $this->request->getVar('title');
            $slug = url_title($title, '-', TRUE);
            $description = $this->request->getVar('description');
            $imgName = $imgPath->getRandomName();

            $data = [
               'title' => trim($title),
               'slug' => $slug,
               'description' => trim($description),
               'content' => $imgName,
            ];

            $simpan = $this->priority_program->insert($data);
            if ($simpan) {
               // Image manipulation
               $image = \Config\Services::image()
                  ->withFile($imgPath)
                  ->resize(650, 350, true, 'height')
                  ->save(FCPATH . '/img/priority_program/' . $imgName);
               session()->setFlashdata('message', 'Save data success');
            }
         }

         return redirect()->to(base_url('/priority_program'));
      } else {
         return redirect()->to(base_url('/dashboard/err404'));
      }
   }

   public function edit($id)
   {

      helper(['form', 'url']);

      if (!user_can('edit-category-gallery')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      $data = array(
         'priority' => $this->priority_program->find($id)
      );

      $data['title'] = "Edit Priority";

      $this->breadcrumb->add('Dashboard', '/dashboard');
      $this->breadcrumb->add('List Priority', '/priority_program');
      $this->breadcrumb->add('Edit', '/priority_program/edit/');
      $data['breadcrumbs'] = $this->breadcrumb->render();

      $data['validation'] = \Config\Services::validation();

      return view('dashboard/priority_program/edit', $data);
   }

   public function update($id)
   {

      if (!user_can('edit-priority-program')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }
      //load helper form and URL
      helper(['form', 'url']);

      if (check_token('priority_program_edit', $this->request->getVar('token'))) {
         $validation = [
            'content' => [
               'rules' => 'max_size[content,2024]|is_image[content]|mime_in[content,image/jpg,image/jpeg,image/png]',
               'errors' => [
                  'max_size' => 'Image size Maximum 2 MB',
                  'is_image' => 'Image file type must be JPG, JPEG, PNG',
                  'mime_in' => 'Image file type must be JPG, JPEG, PNG',
               ],
            ],
            'title' => [
               'rules'  => 'required|min_length[1]|max_length[100]',
               'errors' => [
                  'min_length' => 'title  Minimum 1 Character',
                  'max_length' => 'title  Maximum 100 Character',
               ]
            ],
            'description' => [
               'rules'  => 'required|min_length[1]',
               'errors' => [
                  'required' => 'description  field is required',
                  'min_length' => 'description  Minimum 1 Character',
               ]
            ],
         ];


         if (!$this->validate($validation)) {
            return redirect()->back()->withInput();
         } else {

            $newImg = $this->request->getFile('content');
            $oldImg = $this->request->getVar('imgOld');
            $title = $this->request->getVar('title');
            $slug = url_title($title, '-', TRUE);
            $description = $this->request->getVar('description');
            $imgName = $newImg->getRandomName();


            if ($newImg->getError() == 4) {
               $imgName = $oldImg;
            } else {
               $imgName = $newImg->getRandomName();
               unlink('img/priority_program/' . $oldImg);
               // Image manipulation
               $image = \Config\Services::image()
                  ->withFile($newImg)
                  ->resize(650, 350, true, 'height')
                  ->save(FCPATH . '/img/priority_program/' . $imgName);
            }

            $data = [
               'title' => trim($title),
               'slug' => $slug,
               'description' => trim($description),
               'content' => $imgName,
            ];

            $simpan = $this->priority_program->update($id, $data);

            if ($simpan) {
               session()->setFlashdata('message', 'Update data success');
            }
         }

         return redirect()->to(base_url('/priority_program'));
      } else {
         return redirect()->to(base_url('/dashboard/err404'));
      }
   }

   public function delete($id)
   {

      if (!user_can('delete-priority-program')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }
      $post = $this->priority_program->find($id);

      if ($post) {
         unlink('img/priority_program/' . $post->content);
         $this->priority_program->delete($id);

         //flash message
         session()->setFlashdata('message', 'Delete Data Success');

         return redirect()->to(base_url('/priority_program'));
      }
   }

   public function dt_priority_program()
   {
      $where = ['id_priority !=' => 0];
      $column_order   = array('', 'title');
      $column_search  = array('title');
      $order = array('id_priority' => 'ASC');
      $list = $this->priority_program->get_datatables('priority_program', $column_order, $column_search, $order, $where);
      $data = array();
      $no = $_POST['start'];
      foreach ($list as $lists) {
         $no++;
         $row    = array();

         $edit = (user_can('edit-priority-program')) ? '<a href="/priority_program/edit/' . $lists->id_priority . '" class="btn btn-link"><i class="fa fa-edit"></i> Edit</a>' : "";
         $delete = (user_can('delete-priority-program')) ? '<a href="/priority_program/delete/' . $lists->id_priority . '" class="btn btn-link btn-delete"><i class="fa fa-trash"></i> Delete</a>' : "";

         $row['no']  = $no;
         $row['title']  = $lists->title;
         $row['option']  = '<div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                    ' . $edit . '
                </li><li>
                     ' . $delete . '
                    </li>
                </ul>
            </div>';

         $data[] = $row;
      }

      $output = array(
         "draw" => $_POST['draw'],
         "recordsTotal" => $this->priority_program->count_all('priority_program', $where),
         "recordsFiltered" => $this->priority_program->count_filtered('priority_program', $column_order, $column_search, $order, $where),
         "data" => $data,
      );

      echo json_encode($output);
   }
}
