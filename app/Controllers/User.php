<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RoleModel;

class User extends BaseController
{
    public $user_model;
    public $role_model;

    public function __construct()
    {
        $this->user_model = new UserModel();
        $this->role_model = new RoleModel();
    }

    public function index()
    {
        if (!user_can('view-user')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "User";
        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List User', '/user');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        return view('dashboard/user/list', $data);
    }

    public function add()
    {
        if (!user_can('create-user')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Add User";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List User', '/user');
        $this->breadcrumb->add('Add', '/user/add');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['validation'] = \Config\Services::validation();

        $data['role'] = $this->role_model->where('role_id !=', 1)->get()->getResult();

        return view('dashboard/user/add', $data);
    }

    public function create()
    {
        if (!user_can('create-user')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('user_add', $this->request->getVar('token'))) {
            //define validation
            $validation = [
                'username' => [
                    'rules'  => 'required|min_length[4]|max_length[20]|is_unique[user.username]',
                    'errors' => [
                        'required' => 'Username field is required',
                        'min_length' => 'Username Minimum 4 Character',
                        'max_length' => 'Username Maximum 20 Character',
                        'is_unique' => 'Username alread Exist'
                    ]
                ],
                'password' => [
                    'rules' => 'required|min_length[4]|max_length[50]',
                    'errors' => [
                        'required' => 'Password field is required',
                        'min_length' => 'Password Minimum 4 Character',
                        'max_length' => 'Password Maximum 50 Character',
                    ]
                ],
                'password_conf' => [
                    'rules' => 'matches[password]',
                    'errors' => [
                        'matches' => 'Password Confirm not match with Password',
                    ]
                ],
                'name' => [
                    'rules' => 'required|min_length[4]|max_length[50]',
                    'errors' => [
                        'required' => 'Name field is required',
                        'min_length' => 'Name Minimum 4 Character',
                        'max_length' => 'Name Maximum 50 Character',
                    ]
                ],
                'role_name' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Role name field is required',
                    ]
                ],
            ];

            if (!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

                $data = [
                    'username' => $this->request->getVar('username'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    'name' => $this->request->getVar('name'),
                    'role_id' => $this->request->getVar('role_name'),
                ];

                $simpan = $this->user_model->insert($data);
                if ($simpan) {
                    session()->setFlashdata('message', 'Save data success');
                }
            }

            return redirect()->to(base_url('/user'));
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function edit($id)
    {
        if (!user_can('edit-user')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data = array(
            'post' => $this->user_model->find($id)
        );

        $data['title'] = "Edit User";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List User', '/user');
        $this->breadcrumb->add('Edit', '/user/edit/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['validation'] = \Config\Services::validation();

        $data['role'] = $this->role_model->findAll();

        return view('dashboard/user/edit', $data);
    }

    public function update($id)
    {
        if (!user_can('edit-user')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('user_edit', $this->request->getVar('token'))) {

            $new_pass = $this->request->getVar('password');

            if (!empty($new_pass)) {
                //define validation
                $validation = [
                    'password' => [
                        'rules' => 'min_length[4]|max_length[50]',
                        'errors' => [
                            'min_length' => 'Password Minimum 4 Character',
                            'max_length' => 'Password Maximum 50 Character',
                        ]
                    ],
                    'password_conf' => [
                        'rules' => 'matches[password]',
                        'errors' => [
                            'matches' => 'Password Confirm not match with New Password',
                        ]
                    ],
                    'name' => [
                        'rules' => 'required|min_length[4]|max_length[50]',
                        'errors' => [
                            'required' => 'Name field is required',
                            'min_length' => 'Name Minimum 4 Character',
                            'max_length' => 'Name Maximum 50 Character',
                        ]
                    ],
                    'role_name' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Name field is required',
                        ]
                    ],
                ];
            } else {
                $validation = [
                    'name' => [
                        'rules' => 'required|min_length[4]|max_length[50]',
                        'errors' => [
                            'required' => 'Name field is required',
                            'min_length' => 'Name Minimum 4 Character',
                            'max_length' => 'Name Maximum 50 Character',
                        ]
                    ],
                    'role_name' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Role name field is required',
                        ]
                    ],
                ];
            }


            if (!$this->validate($validation)) {

                return redirect()->back()->withInput();
            } else {

                if (!empty($new_pass)) {
                    $data = [
                        'password' => password_hash($new_pass, PASSWORD_DEFAULT),
                        'name' => $this->request->getVar('name'),
                        'role_id' => $this->request->getVar('role_name'),
                    ];
                } else {
                    $data = [
                        'name' => $this->request->getVar('name'),
                        'role_id' => $this->request->getVar('role_name'),
                    ];
                }

                $simpan = $this->user_model->update($id, $data);

                if ($simpan) {
                    session()->setFlashdata('message', 'Update data success');
                }
            }

            return redirect()->to(base_url('user'));
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function delete($id)
    {
        if (!user_can('delete-user')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $post = $this->user_model->find($id);

        if ($post) {
            $this->user_model->delete($id);

            //flash message
            session()->setFlashdata('message', 'Delete Data Success');

            return redirect()->to(base_url('user'));
        }
    }

    public function dt_user()
    {
        $where = ['user_id !=' => 0];
        $column_order   = array('', 'username', 'name', 'role_name');
        $column_search  = array('username', 'name', 'role_name');
        $order = array('user_id' => 'ASC');
        $list = $this->user_model->get_datatables('user', $column_order, $column_search, $order, $where);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $lists) {
            $no++;
            $edit = (user_can('edit-user')) ? '<a href="/user/edit/' . $lists->user_id . '" class="btn btn-link"><i class="fa fa-edit"></i> Edit</a>' : "";
            $delete = (user_can('delete-user')) ? '<a href="/user/delete/' . $lists->user_id . '" class="btn btn-link btn-delete"><i class="fa fa-trash"></i> Delete</a>' : "";

            $row    = array();
            $row['no']  = $no;
            $row['username']  = $lists->username;
            $row['name']  = $lists->name;
            $row['role_name']  = $lists->role_name;
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
            "recordsTotal" => $this->user_model->count_all('user', $where),
            "recordsFiltered" => $this->user_model->count_filtered('user', $column_order, $column_search, $order, $where),
            "data" => $data,
        );

        echo json_encode($output);
    }
}
