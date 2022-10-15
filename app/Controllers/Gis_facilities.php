<?php

namespace App\Controllers;

use App\Models\GisfacilitiesModel;
use App\Models\GiscategoryfacilitiesModel;

class Gis_facilities extends BaseController
{
   public $category_facilities;
   public $facilities;


   public function __construct()
   {
      $this->category_facilities = new GiscategoryfacilitiesModel();
      $this->facilities = new GisfacilitiesModel();
   }

   public function index()
   {

      if (!user_can('view-facilities')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      $data['title'] = "facilities";
      $this->breadcrumb->add('Dashboard', '/dashboard');
      $this->breadcrumb->add('List Facilities', '/gis_facilities');
      $data['breadcrumbs'] = $this->breadcrumb->render();

      return view('dashboard/gis/facilities/list', $data);
   }

   public function add()
   {

      helper(['form', 'url']);

      if (!user_can('create-facilities')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      $data['title'] = "Add Facilities";
      $data['content'] = 'image';

      $this->breadcrumb->add('Dashboard', '/dashboard');
      $this->breadcrumb->add('List Facilities', '/gis_facilities');
      $this->breadcrumb->add('Add', '/gis_facilities/add');
      $data['breadcrumbs'] = $this->breadcrumb->render();

      $data['category'] = $this->category_facilities->findAll();
      $data['validation'] = \Config\Services::validation();

      return view('dashboard/gis/facilities/add', $data);
   }

   public function create()
   {
      //load helper form and URL
      helper(['form', 'url']);

      if (!user_can('create-facilities')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      if (check_token('facilities_add', $this->request->getVar('token'))) {
         $validation = [
            'image_file' => [
               'rules' => 'uploaded[image_file]|max_size[image_file,2024]|is_image[image_file]|mime_in[image_file,image/jpg,image/jpeg,image/png]',
               'errors' => [
                  'uploaded' => 'No Image Selected',
                  'max_size' => 'Image size Maximum 2 MB',
                  'is_image' => 'Image file type must be JPG, JPEG, PNG',
                  'mime_in' => 'Image file type must be JPG, JPEG, PNG',
               ],
            ],
            'title' => [
               'rules' => 'required|min_length[1]|max_length[100]',
               'errors' => [
                  'required' => 'Title field is required',
                  'min_length' => 'Title Minimum 1 Character',
                  'max_length' => 'Title Maximum 100 Character',
               ]
            ],
            'category' => [
               'rules'  => 'required',
               'errors' => [
                  'required' => 'Category field is required!',
               ]
            ],
            'latitude' => [
               'rules'  => 'required',
               'errors' => [
                  'required' => 'Latitude field is required!',
               ]
            ],
            'longitude' => [
               'rules'  => 'required',
               'errors' => [
                  'required' => 'Longitude field is required!',
               ]
            ],
            'description' => [
               'rules'  => 'required|min_length[1]',
               'errors' => [
                  'required' => 'Description field is required',
                  'min_length' => 'Description Minimum 1 Character',
               ]
            ],
         ];

         if (!$this->validate($validation)) {
            return redirect()->back()->withInput();
         } else {
            $imgPath = $this->request->getFile('image_file');
            $title = $this->request->getVar('title');
            $category = $this->request->getVar('category');
            $latitude = $this->request->getVar('latitude');
            $longitude = $this->request->getVar('longitude');
            $description = $this->request->getVar('description');

            $imgName = $imgPath->getRandomName();

            $data = [
               'category_facilities_id' => $category,
               'title' => $title,
               'image_name' => $imgName,
               'description' => $description,
               'latitude' => $latitude,
               'longitude' => $longitude,
            ];

            $simpan = $this->facilities->insert($data);
            if ($simpan) {
               // Image manipulation
               $image = \Config\Services::image()
                  ->withFile($imgPath)
                  ->resize(600, 450, true, 'height')
                  ->text('Copyright PEMKAB Morowali Utara', [
                     'color'      => '#fff',
                     'opacity'    => 0.5,
                     'withShadow' => true,
                     'hAlign'     => 'center',
                     'vAlign'     => 'bottom',
                     'fontSize'   => 20,
                  ])
                  ->save(FCPATH . '/img/gis/facilities/' . $imgName);
               session()->setFlashdata('message', 'Save data success');
            }
         }
         return redirect()->to(base_url('gis_facilities'));
      } else {
         return redirect()->to(base_url('/dashboard/err404'));
      }
   }

   public function edit($id)
   {
      helper(['form', 'url']);

      if (!user_can('edit-facilities')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      $data = [
         'facilities' => $this->facilities->gt_dataId($id)
      ];

      $data['title'] = "Edit Facilities";

      $this->breadcrumb->add('Dashboard', '/dashboard');
      $this->breadcrumb->add('List Facilities', '/gis_facilities');
      $this->breadcrumb->add('Edit', '/gis_facilities/edit/');
      $data['breadcrumbs'] = $this->breadcrumb->render();

      $data['category'] = $this->category_facilities->findAll();
      $data['validation'] = \Config\Services::validation();

      return view('dashboard/gis/facilities/edit', $data);
   }

   public function update($id)
   {
      //load helper form and URL
      helper(['form', 'url']);

      if (!user_can('edit-facilities')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      if (check_token('facilities_edit', $this->request->getVar('token'))) {

         $validation = [
            'image_file' => [
               'rules' => 'max_size[image_file,2024]|is_image[image_file]|mime_in[image_file,image/jpg,image/jpeg,image/png]',
               'errors' => [
                  'max_size' => 'Image size Maximum 2 MB',
                  'is_image' => 'Image file type must be JPG, JPEG, PNG',
                  'mime_in' => 'Image file type must be JPG, JPEG, PNG',
               ],
            ],
            'title' => [
               'rules' => 'required|min_length[1]|max_length[100]',
               'errors' => [
                  'required' => 'Title field is required',
                  'min_length' => 'Title Minimum 1 Character',
                  'max_length' => 'Title Maximum 100 Character',
               ]
            ],
            'category' => [
               'rules'  => 'required',
               'errors' => [
                  'required' => 'Category field is required!',
               ]
            ],
            'latitude' => [
               'rules'  => 'required',
               'errors' => [
                  'required' => 'Latitude field is required!',
               ]
            ],
            'longitude' => [
               'rules'  => 'required',
               'errors' => [
                  'required' => 'Longitude field is required!',
               ]
            ],
            'description' => [
               'rules'  => 'required|min_length[1]',
               'errors' => [
                  'required' => 'Description field is required',
                  'min_length' => 'Description Minimum 1 Character',
               ]
            ],
         ];

         if (!$this->validate($validation)) {
            return redirect()->back()->withInput();
         } else {
            $newImg = $this->request->getFile('image_file');
            $oldImg = $this->request->getVar('imgOld');
            $title = $this->request->getVar('title');
            $category = $this->request->getVar('category');
            $latitude = $this->request->getVar('latitude');
            $longitude = $this->request->getVar('longitude');
            $description = $this->request->getVar('description');

            $imgName = $newImg->getRandomName();


            if ($newImg->getError() == 4) {
               $imgName = $oldImg;
            } else {
               $imgName = $newImg->getRandomName();
               unlink('img/gis/facilities/' . $oldImg);
               // Image manipulation
               $image = \Config\Services::image()
                  ->withFile($newImg)
                  ->resize(600, 450, true, 'height')
                  ->text('Copyright PEMKAB Morowali Utara', [
                     'color'      => '#fff',
                     'opacity'    => 0.5,
                     'withShadow' => true,
                     'hAlign'     => 'center',
                     'vAlign'     => 'bottom',
                     'fontSize'   => 20,
                  ])
                  ->save(FCPATH . '/img/gis/facilities/' . $imgName);
            }


            $data = [
               'category_facilities_id' => $category,
               'title' => $title,
               'image_name' => $imgName,
               'description' => $description,
               'latitude' => $latitude,
               'longitude' => $longitude,
            ];

            $simpan = $this->facilities->update($id, $data);

            if ($simpan) {
               session()->setFlashdata('message', 'Update data success');
            }
         }
         return redirect()->to(base_url('gis_facilities'));
      } else {
         return redirect()->to(base_url('/dashboard/err404'));
      }
   }

   public function delete($id)
   {

      if (!user_can('delete-facilities')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      $facilities = $this->facilities->where(['facilities_id' => $id])->first();
      unlink('img/gis/facilities/' . $facilities->image_name);

      $this->facilities->delete($id);
      session()->setFlashdata('message', 'Delete data success');
      return redirect()->to(base_url('/gis_facilities'));
   }

   public function dt_facilities()
   {
      $where = ['facilities_id !=' => 0];
      $column_order   = array('', 'category_name', 'title');
      $column_search  = array('category_name', 'title');
      $order = array('facilities_id' => 'ASC');
      $list = $this->facilities->get_datatables('gis_facilities', $column_order, $column_search, $order, $where);
      $data = array();
      $no = $_POST['start'];
      foreach ($list as $lists) {
         $no++;

         $edit = (user_can('edit-facilities')) ? '<a href="/gis_facilities/edit/' . $lists->facilities_id . '" class="btn btn-link"><i class="fa fa-edit"></i> Edit</a>' : "";
         $delete = (user_can('delete-facilities')) ? '<a href="/gis_facilities/delete/' . $lists->facilities_id . '" class="btn btn-link btn-delete"><i class="fa fa-trash"></i> Delete</a>' : "";

         $row    = array();
         $row['no']  = $no;
         $row['category_name']  = $lists->category_name;
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
         "recordsTotal" => $this->facilities->count_all('gis_facilities', $where),
         "recordsFiltered" => $this->facilities->count_filtered('gis_facilities', $column_order, $column_search, $order, $where),
         "data" => $data,
      );

      echo json_encode($output);
   }
}
