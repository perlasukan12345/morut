<?php

namespace App\Controllers;

use App\Models\GiscategoryfacilitiesModel;

class Gis_category_facilities extends BaseController
{
   public $category_facilities;

   public function __construct()
   {
      $this->category_facilities = new GiscategoryfacilitiesModel();
   }

   public function index()
   {

      if (!user_can('view-category-facilities')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      $data['title'] = "Category";
      $this->breadcrumb->add('Dashboard', '/dashboard');
      $this->breadcrumb->add('List Category', '/gis_category_facilities');
      $data['breadcrumbs'] = $this->breadcrumb->render();

      return view('dashboard/gis/category_facilities/list', $data);
   }

   public function add()
   {

      if (!user_can('create-category-facilities')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      $data['title'] = "Add Category";

      $this->breadcrumb->add('Dashboard', '/dashboard');
      $this->breadcrumb->add('List Category', '/gis_category_facilities');
      $this->breadcrumb->add('Add', '/gis_category_facilities/add');
      $data['breadcrumbs'] = $this->breadcrumb->render();

      $data['validation'] = \Config\Services::validation();

      return view('dashboard/gis/category_facilities/add', $data);
   }

   public function create()
   {
      if (!user_can('create-category-facilities')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      //load helper form and URL
      helper(['form', 'url']);

      if (check_token('category_facilities_add', $this->request->getVar('token'))) {
         //define validation
         $validation = [
            'category_name' => [
               'rules'  => 'required|min_length[1]|max_length[100]|is_unique[gis_category_facilities.category_name]',
               'errors' => [
                  'required' => 'Category name field is required',
                  'min_length' => 'Category name Minimum 1 Character',
                  'max_length' => 'Category name Maximum 100 Character',
                  'is_unique' => 'Category name alread Exist'
               ]
            ],
            'category_icon' => [
               'rules' => 'uploaded[category_icon]|max_size[category_icon,2024]|is_image[category_icon]|mime_in[category_icon,image/jpg,image/jpeg,image/png]',
               'errors' => [
                  'uploaded' => 'No Image Selected',
                  'max_size' => 'Image size Maximum 2 MB',
                  'is_image' => 'Image file type must be JPG, JPEG, PNG',
                  'mime_in' => 'Image file type must be JPG, JPEG, PNG',
               ],
            ]
         ];

         if (!$this->validate($validation)) {
            return redirect()->back()->withInput();
         } else {


            $categoryName =  $this->request->getVar('category_name');
            $imgPath = $this->request->getFile('category_icon');
            $imgName = $imgPath->getRandomName();
            $data = [
               'category_name' => strtolower($categoryName),
               'category_icon' => $imgName,
            ];
            $simpan = $this->category_facilities->insert($data);
            if ($simpan) {
               // Image manipulation
               $image = \Config\Services::image()
                  ->withFile($imgPath)
                  ->resize(600, 450, true, 'height')
                  ->save(FCPATH . '/icon/gis/' . $imgName);
               session()->setFlashdata('message', 'Save data success');
            }
         }

         return redirect()->to(base_url('/gis_category_facilities'));
      } else {
         return redirect()->to(base_url('/dashboard/err404'));
      }
   }

   public function edit($id)
   {

      if (!user_can('edit-category-gallery')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      $data = array(
         'post' => $this->category_facilities->find($id)
      );

      $data['title'] = "Edit Category";

      $this->breadcrumb->add('Dashboard', '/dashboard');
      $this->breadcrumb->add('List Category', '/gis_category_facilities');
      $this->breadcrumb->add('Edit', '/gis_category_facilities/edit/');
      $data['breadcrumbs'] = $this->breadcrumb->render();

      $data['validation'] = \Config\Services::validation();

      return view('dashboard/gis/category_facilities/edit', $data);
   }

   public function update($id)
   {

      if (!user_can('edit-category-facilities')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }
      //load helper form and URL
      helper(['form', 'url']);

      if (check_token('category_facilities_edit', $this->request->getVar('token'))) {
         //define validation
         $validation = [
            'category_name' => [
               'rules'  => 'required|min_length[1]|max_length[100]',
               'errors' => [
                  'min_length' => 'Category name Minimum 1 Character',
                  'max_length' => 'Category name Maximum 100 Character',
               ]
            ],
            'category_icon' => [
               'rules' => 'max_size[category_icon,2024]|is_image[category_icon]|mime_in[category_icon,image/jpg,image/jpeg,image/png]',
               'errors' => [
                  'max_size' => 'Image size Maximum 2 MB',
                  'is_image' => 'Image file type must be JPG, JPEG, PNG',
                  'mime_in' => 'Image file type must be JPG, JPEG, PNG',
               ],
            ]
         ];


         if (!$this->validate($validation)) {
            return redirect()->back()->withInput();
         } else {
            $newImg = $this->request->getFile('category_icon');
            $oldImg = $this->request->getVar('imgOld');
            $categoryName =  $this->request->getVar('category_name');
            $imgName = $newImg->getRandomName();


            if ($newImg->getError() == 4) {
               $imgName = $oldImg;
            } else {
               $imgName = $newImg->getRandomName();
               unlink('icon/gis/' . $oldImg);
               // Image manipulation
               $image = \Config\Services::image()
                  ->withFile($newImg)
                  ->resize(600, 450, true, 'height')
                  ->save(FCPATH . '/icon/gis/' . $imgName);
            }

            $data = [
               'category_name' => strtolower($categoryName),
               'category_icon' => $imgName,
            ];


            $simpan = $this->category_facilities->update($id, $data);
            if ($simpan) {
               session()->setFlashdata('message', 'Update data success');
            }
         }

         return redirect()->to(base_url('/gis_category_facilities'));
      } else {
         return redirect()->to(base_url('/dashboard/err404'));
      }
   }

   public function delete($id)
   {

      if (!user_can('delete-category-facilities')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      $post = $this->category_facilities->find($id);

      if ($post) {
         unlink('icon/gis/' . $post->category_icon);
         $this->category_facilities->delete($id);

         //flash message
         session()->setFlashdata('message', 'Delete Data Success');

         return redirect()->to(base_url('/gis_category_facilities'));
      }
   }

   public function dt_category_facilities()
   {
      $where = ['category_facilities_id !=' => 0];
      $column_order   = array('', 'category_name');
      $column_search  = array('category_name');
      $order = array('category_facilities_id' => 'ASC');
      $list = $this->category_facilities->get_datatables('gis_category_facilities', $column_order, $column_search, $order, $where);
      $data = array();
      $no = $_POST['start'];
      foreach ($list as $lists) {
         $no++;
         $row    = array();

         $edit = (user_can('edit-category-facilities')) ? '<a href="/gis_category_facilities/edit/' . $lists->category_facilities_id . '" class="btn btn-link"><i class="fa fa-edit"></i> Edit</a>' : "";
         $delete = (user_can('delete-category-facilities')) ? '<a href="/gis_category_facilities/delete/' . $lists->category_facilities_id . '" class="btn btn-link btn-delete"><i class="fa fa-trash"></i> Delete</a>' : "";

         $row['no']  = $no;
         $row['category_name']  = $lists->category_name;
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
         "recordsTotal" => $this->category_facilities->count_all('gis_category_facilities', $where),
         "recordsFiltered" => $this->category_facilities->count_filtered('gis_category_facilities', $column_order, $column_search, $order, $where),
         "data" => $data,
      );

      echo json_encode($output);
   }
}
