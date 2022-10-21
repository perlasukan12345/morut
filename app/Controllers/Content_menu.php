<?php

namespace App\Controllers;

use App\Models\ContentmenuModel;
use App\Models\CategorymenuModel;

class Content_menu extends BaseController
{
    public $content_menu;
    public $category_menu;

    public function __construct()
    {
        $this->content_menu = new ContentmenuModel();
        $this->category_menu = new CategorymenuModel();
    }

    public function list($menu)
    {
        if (!user_can('view-category-profile') and !user_can('view-category-information')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        if ($menu != 'profile' and $menu != 'information') {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Content";
        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('Content', '/content_menu/list/' . $menu);
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['menu'] = $menu;

        return view('dashboard/content_menu/list', $data);
    }

    public function add($menu)
    {
        if (!user_can('create-category-profile') and !user_can('create-category-information')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        if ($menu != 'profile' and $menu != 'information') {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Add Content";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Content', '/content_menu/list/' . $menu);
        $this->breadcrumb->add('Add', '/content_menu/add' . $menu);
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['category'] = $this->category_menu->where('menu', $menu)->find();

        $data['validation'] = \Config\Services::validation();

        $data['menu'] = $menu;

        return view('dashboard/content_menu/add', $data);
    }

    public function create($menu)
    {
        if (!user_can('create-category-profile') and !user_can('create-category-information')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        if ($menu != 'profile' and $menu != 'information') {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('content_menu_add', $this->request->getVar('token'))) {
            //define validation
            $validation = [
                'category' => [
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'Category name field is required',
                    ]
                ],
                'title' => [
                    'rules'  => 'required|min_length[1]|max_length[100]|is_unique[content_menu.title]',
                    'errors' => [
                        'required' => 'Title field is required',
                        'min_length' => 'Title Minimum 1 Character',
                        'max_length' => 'Title Maximum 100 Character',
                        'is_unique' => 'Title already Exist'
                    ]
                ],
                'content' => [
                    'rules'  => 'required|min_length[1]',
                    'errors' => [
                        'required' => 'Content field is required',
                        'min_length' => 'Content Minimum 1 Character',
                    ]
                ],
            ];

            if (!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

                $data = [
                    'menu' => $menu,
                    'category_menu_id' => $this->request->getVar('category'),
                    'title' => $this->request->getVar('title'),
                    'content' => $this->request->getVar('content'),
                ];

                $simpan = $this->content_menu->insert($data);
                if ($simpan) {
                    session()->setFlashdata('message', 'Save data success');
                }
            }

            return redirect()->to(base_url('/content_menu/list/' . $menu));
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function edit($menu, $id)
    {
        if (!user_can('edit-category-profile') and !user_can('edit-category-profile')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        if ($menu != 'profile' and $menu != 'information') {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data = array(
            'post' => $this->content_menu->find($id)
        );

        $data['title'] = "Edit Content";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Content', '/content_menu/list/' . $menu);
        $this->breadcrumb->add('Edit', '/content_menu/edit/' . $menu);
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['validation'] = \Config\Services::validation();

        $data['category'] = $this->category_menu->where('menu', $menu)->find();

        $data['menu'] = $menu;

        return view('dashboard/content_menu/edit', $data);
    }

    public function update($menu, $id)
    {
        if (!user_can('edit-category-profile') and !user_can('edit-category-information')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        if ($menu != 'profile' and $menu != 'information') {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('content_menu_edit', $this->request->getVar('token'))) {
            //define validation
            $validation = [
                'category' => [
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'Category name field is required',
                    ]
                ],
                'title' => [
                    'rules'  => 'required|min_length[1]|max_length[100]|is_unique[content_menu.title]',
                    'errors' => [
                        'required' => 'Title field is required',
                        'min_length' => 'Title Minimum 1 Character',
                        'max_length' => 'Title Maximum 100 Character',
                        'is_unique' => 'Title already Exist'
                    ]
                ],
                'content' => [
                    'rules'  => 'required|min_length[1]',
                    'errors' => [
                        'required' => 'Content field is required',
                        'min_length' => 'Content Minimum 1 Character',
                    ]
                ],
            ];


            if (!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

                $data = [
                    'menu' => $menu,
                    'category_menu_id' => $this->request->getVar('category'),
                    'title' => $this->request->getVar('title'),
                    'content' => $this->request->getVar('content'),
                ];

                $simpan = $this->content_menu->update($id, $data);

                if ($simpan) {
                    session()->setFlashdata('message', 'Update data success');
                }
            }

            return redirect()->to(base_url('/content_menu/list/' . $menu));
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function delete($menu, $id)
    {
        if (!user_can('delete-category-profile') and !user_can('delete-category-information')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        if ($menu != 'profile' and $menu != 'information') {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $post = $this->content_menu->find($id);

        if ($post) {
            $this->content_menu->delete($id);

            //flash message
            session()->setFlashdata('message', 'Delete Data Success');

            return redirect()->to(base_url('/content_menu/list/' . $menu));
        }
    }

    public function dt_content_menu($menu)
    {
        $where = ['n.menu =' => $menu];
        $column_order   = array('', 'title', 'content');
        $column_search  = array('title', 'content');
        $order = array('menu_id' => 'ASC');
        $list = $this->content_menu->get_datatables('content_menu', $column_order, $column_search, $order, $where);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $lists) {
            $no++;

            $edit = (user_can('edit-category-profile') or user_can('edit-category-information')) ? '<a href="/content_menu/edit/' . $menu . '/' . $lists->menu_id . '" class="btn btn-link"><i class="fa fa-edit"></i> Edit</a>' : '';
            $delete = (user_can('delete-category-profile') or user_can('delete-category-information')) ? '<a href="/content_menu/delete/' . $menu . '/' . $lists->menu_id . '" class="btn btn-link btn-delete"><i class="fa fa-trash"></i> Delete</a>' : '';

            $row    = array();
            $row['no']  = $no;
            $row['category']  = $lists->category;
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
            "recordsTotal" => $this->content_menu->count_all('content_menu', $where),
            "recordsFiltered" => $this->content_menu->count_filtered('content_menu', $column_order, $column_search, $order, $where),
            "data" => $data,
        );

        echo json_encode($output);
    }
}
