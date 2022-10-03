<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Models\UserModel;
use App\Models\CategorynewsModel;

class News extends BaseController
{
    public $category_news;
    public $news_model;
    public $user_model;

    public function __construct()
    {
        $this->category_news = new CategorynewsModel();
        $this->news_model = new NewsModel();
        $this->user_model = new UserModel();
    }

    public function index()
    {
        if (!user_can('view-news')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "News";
        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List News', '/news');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        return view('dashboard/news/list', $data);
    }

    public function add()
    {
        if (!user_can('create-news')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Add News";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List News', '/news');
        $this->breadcrumb->add('Add', '/news/add');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['user'] = $this->user_model->findAll();
        $data['category'] = $this->category_news->findAll();
        $data['validation'] = \Config\Services::validation();

        return view('dashboard/news/add', $data);
    }

    public function create()
    {
        if (!user_can('create-news')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('news_add', $this->request->getVar('token'))) {
            //define validation
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
                    'rules' => 'required|min_length[8]|max_length[100]',
                    'errors' => [
                        'required' => 'Title field is required',
                        'min_length' => 'Title Minimum 8 Character',
                        'max_length' => 'Title Maximum 100 Character',
                    ]
                ],
                'user' => [
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'User field is required',
                    ]
                ],
                'category' => [
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'Category field is required!',
                    ]
                ],
                'content' => [
                    'rules'  => 'required|min_length[8]',
                    'errors' => [
                        'required' => 'Content field is required',
                        'min_length' => 'Content Minimum 8 Character',
                    ]
                ],
            ];

            if (!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {
                $imgPath = $this->request->getFile('image_file');
                $title = $this->request->getVar('title');
                $slug = url_title($title, '-', TRUE);
                $content = nl2br($this->request->getVar('content'));

                $imgName = $imgPath->getRandomName();
            
                $user = $this->request->getVar('user');
                $category = $this->request->getVar('category');

                $data = [
                    'user_id' => $user,
                    'category_news_id' => $category,
                    'image_name' => $imgName,
                    'title' => $title,
                    'slug' => $slug,
                    'content' => $content,
                ];

                $simpan = $this->news_model->insert($data);
                if ($simpan) {
                    // Image manipulation
                    $image = \Config\Services::image()
                        ->withFile($imgPath)
                        ->resize(750, 450, true, 'height')
                        ->text('Copyright PEMKAB Morowali Utara', [
                            'color'      => '#fff',
                            'opacity'    => 0.5,
                            'withShadow' => true,
                            'hAlign'     => 'center',
                            'vAlign'     => 'bottom',
                            'fontSize'   => 20,
                        ])
                        ->save(FCPATH . '/img/news/' . $imgName);
                }
            }
            session()->setFlashdata('message', 'Save data success');
            return redirect()->to(base_url('/news'));
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function edit($slug)
    {
        if (!user_can('edit-news')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data = [
            'news' => $this->news_model->gt_dataSlug($slug)
        ];

        $data['title'] = "Edit News";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List News', '/news');
        $this->breadcrumb->add('Edit', '/news/edit/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['user'] = $this->user_model->findAll();
        $data['category'] = $this->category_news->findAll();
        $data['validation'] = \Config\Services::validation();

        return view('dashboard/news/edit', $data);
    }

    public function update($id)
    {
        if (!user_can('edit-news')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('news_edit', $this->request->getVar('token'))) {

            $news = $this->news_model->where(['news_id' => $id])->first();

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
                    'rules' => 'required|min_length[8]|max_length[100]',
                    'errors' => [
                        'required' => 'Title field is required',
                        'min_length' => 'Title Minimum 8 Character',
                        'max_length' => 'Title Maximum 100 Character',
                    ]
                ],
                'user' => [
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'User field is required',
                    ]
                ],
                'category' => [
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'Category field is required!',
                    ]
                ],
                'content' => [
                    'rules'  => 'required|min_length[8]',
                    'errors' => [
                        'required' => 'Content field is required',
                        'min_length' => 'Content Minimum 8 Character',
                    ]
                ],
            ];

            if (!$this->validate($validation)) {
                return redirect()->to(base_url('news/edit/' . $news->slug))->withInput();
            } else {

                $imgOld = $this->request->getVar('imageOld');
                $newImage = $this->request->getFile('image_file');
                // dd($newImage);
                if ($newImage->getError() == 4) {
                    $image_name = $imgOld;
                } else {
                    $image_name = $newImage->getRandomName();
                    unlink('img/news/' . $imgOld);
                    // Image manipulation
                    $image = \Config\Services::image()
                        ->withFile($newImage)
                        ->resize(750, 450, true, 'height')
                        ->text('Copyright PEMKAB Morowali Utara', [
                            'color'      => '#fff',
                            'opacity'    => 0.5,
                            'withShadow' => true,
                            'hAlign'     => 'center',
                            'vAlign'     => 'bottom',
                            'fontSize'   => 20,
                        ])
                        ->save(FCPATH . '/img/news/' . $image_name);
                }

                $title = $this->request->getVar('title');
                $slug = url_title($title, '-', TRUE);
                $content = nl2br($this->request->getVar('content'));
                $user = $this->request->getVar('user');
                $category = $this->request->getVar('category');

                $data = [
                    'news_id' => $id,
                    'user_id' => $user,
                    'category_news_id' => $category,
                    'image_name' => $image_name,
                    'title' => $title,
                    'slug' => $slug,
                    'content' => $content,
                ];

                $this->news_model->update($id,$data);
                session()->setFlashdata('message', 'Edit data success');
                return redirect()->to(base_url('/news'));
            }
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function delete($slug)
    {
        if (!user_can('delete-news')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $news = $this->news_model->where(['slug' => $slug])->first();
        unlink('img/news/' . $news->image_name);

        $this->news_model->delete($news->news_id);
        session()->setFlashdata('message', 'Delete data success');
        return redirect()->to(base_url('/news'));
    }

    public function dt_news()
    {
        $where = ['news_id !=' => 0];
        $column_order   = array('', 'title', 'user_name', 'category_name');
        $column_search  = array('title', 'user_name', 'category_name');
        $order = array('category_news_id' => 'ASC');
        $list = $this->news_model->get_datatables('news', $column_order, $column_search, $order, $where);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $lists) {
            $no++;

            $edit = (user_can('edit-news')) ? '<a href="/news/edit/' . $lists->slug . '" class="btn btn-link"><i class="fa fa-edit"></i> Edit</a>' : '';
            $delete = (user_can('delete-news')) ? '<a href="/news/delete/' . $lists->slug . '" class="btn btn-link btn-delete"><i class="fa fa-trash"></i> Delete</a>' : '';

            $row    = array();
            $row['no']  = $no;
            $row['user_name']  = $lists->user_name;
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
            "recordsTotal" => $this->news_model->count_all('news', $where),
            "recordsFiltered" => $this->news_model->count_filtered('news', $column_order, $column_search, $order, $where),
            "data" => $data,
        );

        echo json_encode($output);
    }
}
