<?php

namespace App\Controllers;


use App\Models\CategorygalleryModel;
use App\Models\GalleryModel;

class Gallery extends BaseController
{
   public $category_gallery;
   public $gallery_model;

   public function __construct()
   {
      $this->category_gallery = new CategorygalleryModel();
      $this->gallery_model = new GalleryModel();
   }

   public function index()
   {

      if (!user_can('view-gallery')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      $data['title'] = "Gallery";
      $this->breadcrumb->add('Dashboard', '/dashboard');
      $this->breadcrumb->add('List Gallery', '/gallery');
      $data['breadcrumbs'] = $this->breadcrumb->render();

      return view('dashboard/media/gallery/list', $data);
   }

   public function add()
   {

      if (!user_can('create-gallery')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      $data['title'] = "Add Gallery";
      $data['content'] = 'image';

      $this->breadcrumb->add('Dashboard', '/dashboard');
      $this->breadcrumb->add('List gallery', '/gallery');
      $this->breadcrumb->add('Add', '/gallery/add');
      $data['breadcrumbs'] = $this->breadcrumb->render();

      $data['list'] = $this->request->getVar('options');
      $data['category'] = $this->category_gallery->findAll();
      $data['validation'] = \Config\Services::validation();

      return view('dashboard/media/gallery/add', $data);
   }

   public function create()
   {
      //load helper form and URL
      helper(['form', 'url']);

      if (!user_can('create-gallery')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      if (check_token('gallery_add', $this->request->getVar('token'))) {
         $contents = $this->request->getVar('contents');
         $category = $this->request->getVar('category');
         $options = $this->request->getVar('options');
         if ($contents === null) {
            $rule_content = 'uploaded[contents]|max_size[contents,2024]|is_image[contents]|mime_in[contents,image/jpg,image/jpeg,image/png]';
            $validation = [
               'contents' => [
                  'rules' => $rule_content,
                  'errors' => [
                     'uploaded' => 'No Image Selected',
                     'max_size' => 'Image size Maximum 2 MB',
                     'is_image' => 'Image file type must be JPG, JPEG, PNG',
                     'mime_in' => 'Image file type must be JPG, JPEG, PNG',
                  ],
               ],
               'options' => [
                  'rules'  => 'required',
                  'errors' => [
                     'required' => 'Options field is required!',
                  ]
               ],
               'category' => [
                  'rules'  => 'required',
                  'errors' => [
                     'required' => 'Category field is required!',
                  ]
               ],
            ];
         } else {
            $rule_content = 'required';
            $validation = [
               'contents' => [
                  'rules' => $rule_content,
                  'errors' => [
                     'required' => 'Content field is required!',
                  ],
               ],
               'options' => [
                  'rules'  => 'required',
                  'errors' => [
                     'required' => 'Options field is required!',
                  ]
               ],
               'category' => [
                  'rules'  => 'required',
                  'errors' => [
                     'required' => 'Category field is required!',
                  ]
               ],
            ];
         }
         if (!$this->validate($validation)) {
            return redirect()->back()->withInput();
         } else {
            if ($contents === null) {
               $imgPath = $this->request->getFile('contents');

               $imgName = $imgPath->getRandomName();

               $data = [
                  'category_gallery_id' => $category,
                  'option' => $options,
                  'content' => $imgName,
               ];

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
                  ->save(FCPATH . '/img/gallery/' . $imgName);
            } else {
               $data = [
                  'category_gallery_id' => $category,
                  'option' => $options,
                  'content' => $contents,
               ];
            }

            $simpan = $this->gallery_model->insert($data);

            if ($simpan) {
               session()->setFlashdata('message', 'Save data success');
            }
         }
         return redirect()->to(base_url('gallery'));
      } else {
         return redirect()->to(base_url('/dashboard/err404'));
      }
   }

   public function edit($id)
   {

      if (!user_can('edit-gallery')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      $data = [
         'gallery' => $this->gallery_model->gt_dataId($id)
      ];

      $data['title'] = "Edit Gallery";

      $this->breadcrumb->add('Dashboard', '/dashboard');
      $this->breadcrumb->add('List Gallery', '/gallery');
      $this->breadcrumb->add('Edit', '/gallery/edit/');
      $data['breadcrumbs'] = $this->breadcrumb->render();

      $data['category'] = $this->category_gallery->findAll();
      $data['validation'] = \Config\Services::validation();

      return view('dashboard/media/gallery/edit', $data);
   }

   public function update($id)
   {
      //load helper form and URL
      helper(['form', 'url']);

      if (!user_can('edit-gallery')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      if (check_token('gallery_edit', $this->request->getVar('token'))) {


         $options = $this->request->getVar('options');
         $category = $this->request->getVar('category');
         $optionOld = $this->request->getVar('optionOld');
         $imgOld = $this->request->getVar('imageOld');

         if ($options == 'image') {
            $rule_content = 'max_size[contents,2024]|is_image[contents]|mime_in[contents,image/jpg,image/jpeg,image/png]';
            $validation = [
               'contents' => [
                  'rules' => $rule_content,
                  'errors' => [
                     'max_size' => 'Image size Maximum 2 MB',
                     'is_image' => 'Image file type must be JPG, JPEG, PNG',
                     'mime_in' => 'Image file type must be JPG, JPEG, PNG',
                  ],
               ],
               'options' => [
                  'rules'  => 'required',
                  'errors' => [
                     'required' => 'Options field is required!',
                  ]
               ],
               'category' => [
                  'rules'  => 'required',
                  'errors' => [
                     'required' => 'Category field is required!',
                  ]
               ],
            ];
         } elseif ($options == 'video') {
            $rule_content = 'required';
            $validation = [
               'contents' => [
                  'rules' => $rule_content,
                  'errors' => [
                     'required' => 'Content field is required!',
                  ],
               ],
               'options' => [
                  'rules'  => 'required',
                  'errors' => [
                     'required' => 'Options field is required!',
                  ]
               ],
               'category' => [
                  'rules'  => 'required',
                  'errors' => [
                     'required' => 'Category field is required!',
                  ]
               ],
            ];
         }

         if (!$this->validate($validation)) {
            return redirect()->back()->withInput();
         } else {
            if ($options == 'image') {
               $newImage = $this->request->getFile('contents');

               if ($optionOld != 'video') {
                  if ($newImage->getError() == 4) {
                     $image_name = $imgOld;
                  } else {
                     $image_name = $newImage->getRandomName();
                     unlink('img/gallery/' . $imgOld);
                     // Image manipulation
                     $image = \Config\Services::image()
                        ->withFile($newImage)
                        ->resize(600, 450, true, 'height')
                        ->text('Copyright PEMKAB Morowali Utara', [
                           'color'      => '#fff',
                           'opacity'    => 0.5,
                           'withShadow' => true,
                           'hAlign'     => 'center',
                           'vAlign'     => 'bottom',
                           'fontSize'   => 20,
                        ])
                        ->save(FCPATH . '/img/gallery/' . $image_name);
                  }
               } else {
                  $image_name = $newImage->getRandomName();
                  // Image manipulation
                  $image = \Config\Services::image()
                     ->withFile($newImage)
                     ->resize(600, 450, true, 'height')
                     ->text('Copyright PEMKAB Morowali Utara', [
                        'color'      => '#fff',
                        'opacity'    => 0.5,
                        'withShadow' => true,
                        'hAlign'     => 'center',
                        'vAlign'     => 'bottom',
                        'fontSize'   => 20,
                     ])
                     ->save(FCPATH . '/img/gallery/' . $image_name);
               }
               $data = [
                  'gallery_id' => $id,
                  'category_gallery_id' => $category,
                  'option' => $options,
                  'content' => $image_name,
               ];
            } elseif ($options == 'video') {
               $contents = $this->request->getVar('contents');

               if ($optionOld == 'image') {
                  unlink('img/gallery/' . $imgOld);
               }

               $data = [
                  'gallery_id' => $id,
                  'category_gallery_id' => $category,
                  'option' => $options,
                  'content' => $contents,
               ];
            }
            $simpan = $this->gallery_model->update($id, $data);

            if ($simpan) {
               session()->setFlashdata('message', 'Update data success');
            }
         }
         return redirect()->to(base_url('gallery'));
      } else {
         return redirect()->to(base_url('/dashboard/err404'));
      }
   }

   public function delete($id)
   {

      if (!user_can('delete-gallery')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      $gallery = $this->gallery_model->where(['gallery_id' => $id])->first();

      if ($gallery->option == 'image') {
         unlink('img/gallery/' . $gallery->content);
         $this->gallery_model->delete($gallery->gallery_id);
         session()->setFlashdata('message', 'Delete data success');
         return redirect()->to(base_url('/gallery'));
      } elseif ($gallery->option == 'video') {
         $this->gallery_model->delete($gallery->gallery_id);
         session()->setFlashdata('message', 'Delete data success');
         return redirect()->to(base_url('/gallery'));
      }
   }

   public function dt_gallery()
   {
      $where = ['gallery_id !=' => 0];
      $column_order   = array('', 'option', 'category_name', 'content');
      $column_search  = array('option', 'category_name');
      $order = array('gallery_id' => 'ASC');
      $list = $this->gallery_model->get_datatables('gallery', $column_order, $column_search, $order, $where);
      $data = array();
      $no = $_POST['start'];
      foreach ($list as $lists) {
         $no++;

         $edit = (user_can('edit-gallery')) ? '<a href="/gallery/edit/' . $lists->gallery_id . '" class="btn btn-link"><i class="fa fa-edit"></i> Edit</a>' : "";
         $delete = (user_can('delete-gallery')) ? '<a href="/gallery/delete/' . $lists->gallery_id . '" class="btn btn-link btn-delete"><i class="fa fa-trash"></i> Delete</a>' : "";

         $row    = array();
         $row['no']  = $no;
         $row['category_name']  = $lists->category_name;
         $row['category_gallery']  = $lists->option;
         $row['content']  = ($lists->option  == "video") ? "<iframe width='300' height='185' src='https://www.youtube.com/embed/$lists->content' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>" : '<img src="' . base_url('img/gallery/' . $lists->content) . '" width="200px" alt="">';
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
         "recordsTotal" => $this->gallery_model->count_all('gallery', $where),
         "recordsFiltered" => $this->gallery_model->count_filtered('gallery', $column_order, $column_search, $order, $where),
         "data" => $data,
      );

      echo json_encode($output);
   }
}
