<?php

namespace App\Controllers;

use App\Models\CategorygalleryModel;

class Category_gallery extends BaseController
{
   public $category_gallery;

   public function __construct()
   {
      $this->category_gallery = new CategorygalleryModel();
   }

   public function index()
   {

      if (!user_can('view-category-gallery')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      $data['title'] = "Category";
      $this->breadcrumb->add('Dashboard', '/dashboard');
      $this->breadcrumb->add('List Category', '/category_gallery');
      $data['breadcrumbs'] = $this->breadcrumb->render();

      return view('dashboard/media/category_gallery/list', $data);
   }

   public function add()
   {

      if (!user_can('create-category-gallery')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      $data['title'] = "Add Category";

      $this->breadcrumb->add('Dashboard', '/dashboard');
      $this->breadcrumb->add('List Category', '/category_gallery');
      $this->breadcrumb->add('Add', '/category_gallery/add');
      $data['breadcrumbs'] = $this->breadcrumb->render();

      $data['validation'] = \Config\Services::validation();

      return view('dashboard/media/category_gallery/add', $data);
   }

   public function create()
   {
      if (!user_can('create-category-gallery')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      //load helper form and URL
      helper(['form', 'url']);

      if (check_token('category_gallery_add', $this->request->getVar('token'))) {
         //define validation
         $validation = [
            'category_name' => [
               'rules'  => 'required|min_length[1]|max_length[100]|is_unique[category_gallery.category_name]',
               'errors' => [
                  'required' => 'Category name field is required',
                  'min_length' => 'Category name Minimum 1 Character',
                  'max_length' => 'Category name Maximum 100 Character',
                  'is_unique' => 'Category name alread Exist'
               ]
            ],
         ];

         if (!$this->validate($validation)) {
            return redirect()->back()->withInput();
         } else {

            $data = [
               'category_name' => $this->request->getVar('category_name'),
            ];

            $simpan = $this->category_gallery->insert($data);
            if ($simpan) {
               session()->setFlashdata('message', 'Save data success');
            }
         }

         return redirect()->to(base_url('/category_gallery'));
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
         'post' => $this->category_gallery->find($id)
      );

      $data['title'] = "Edit Category";

      $this->breadcrumb->add('Dashboard', '/dashboard');
      $this->breadcrumb->add('List Category', '/category_gallery');
      $this->breadcrumb->add('Edit', '/category_gallery/edit/');
      $data['breadcrumbs'] = $this->breadcrumb->render();

      $data['validation'] = \Config\Services::validation();

      return view('dashboard/media/category_gallery/edit', $data);
   }

   public function update($id)
   {

      if (!user_can('edit-category-gallery')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }
      //load helper form and URL
      helper(['form', 'url']);

      if (check_token('category_gallery_edit', $this->request->getVar('token'))) {
         //define validation
         $validation = [
            'category_name' => [
               'rules'  => 'required|min_length[1]|max_length[100]|is_unique[category_gallery.category_name]',
               'errors' => [
                  'required' => 'Category name field is required',
                  'min_length' => 'Category name Minimum 1 Character',
                  'max_length' => 'Category name Maximum 100 Character',
                  'is_unique' => 'Category name alread Exist'
               ]
            ],
         ];


         if (!$this->validate($validation)) {
            return redirect()->back()->withInput();
         } else {

            $data = [
               'category_name' => $this->request->getVar('category_name')
            ];

            $simpan = $this->category_gallery->update($id, $data);

            if ($simpan) {
               session()->setFlashdata('message', 'Update data success');
            }
         }

         return redirect()->to(base_url('/category_gallery'));
      } else {
         return redirect()->to(base_url('/dashboard/err404'));
      }
   }

   public function delete($id)
   {

      if (!user_can('delete-category-gallery')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      $post = $this->category_gallery->find($id);

      if ($post) {
         $this->category_gallery->delete($id);

         //flash message
         session()->setFlashdata('message', 'Delete Data Success');

         return redirect()->to(base_url('/category_gallery'));
      }
   }

   public function dt_category_gallery()
   {
      $where = ['category_gallery_id !=' => 0];
      $column_order   = array('', 'category_name');
      $column_search  = array('category_name');
      $order = array('category_gallery_id' => 'ASC');
      $list = $this->category_gallery->get_datatables('category_gallery', $column_order, $column_search, $order, $where);
      $data = array();
      $no = $_POST['start'];
      foreach ($list as $lists) {
         $no++;
         $row    = array();

         $edit = (user_can('edit-category-gallery')) ? '<a href="/category_gallery/edit/' . $lists->category_gallery_id . '" class="btn btn-link"><i class="fa fa-edit"></i> Edit</a>' : "";
         $delete = (user_can('delete-category-gallery')) ? '<a href="/category_gallery/delete/' . $lists->category_gallery_id . '" class="btn btn-link btn-delete"><i class="fa fa-trash"></i> Delete</a>' : "";

         $row['no']  = $no;
         $row['category_name']  = $lists->category_name;
         $row['option']  = '<div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                    '.$edit.'
                </li><li>
                     '.$delete.'
                    </li>
                </ul>
            </div>';

         $data[] = $row;
      }

      $output = array(
         "draw" => $_POST['draw'],
         "recordsTotal" => $this->category_gallery->count_all('category_gallery', $where),
         "recordsFiltered" => $this->category_gallery->count_filtered('category_gallery', $column_order, $column_search, $order, $where),
         "data" => $data,
      );

      echo json_encode($output);
   }
}
