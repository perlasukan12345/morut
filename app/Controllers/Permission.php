<?php

namespace App\Controllers;

use App\Models\PermissionModel;
use App\Models\RoleModel;

class Permission extends BaseController
{
	public $permisison_model;
    public $role_model;

    public function __construct()
    {
        $this->permission_model = new PermissionModel();
        $this->role_model = new RoleModel();
    }

    public function index()
    {
        if (!user_can('view-permission')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Permission";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Permission', '/permission');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        return view('dashboard/permission/list',$data);
    }

    public function add()
    {
        if (!user_can('create-permission')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Add Permission";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Permission', '/permission');
        $this->breadcrumb->add('Add', '/permission/add');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['validation'] = \Config\Services::validation();

        return view('dashboard/permission/add',$data);
    }

    public function create()
    {
        if (!user_can('create-permission')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

    	//load helper form and URL
        helper(['form', 'url']);
        
        if (check_token('permission_add',$this->request->getVar('token'))) 
        {
            //define validation
            $validation = [
                'description' => [
                    'rules'  => 'required|min_length[1]|max_length[50]',
                    'errors' => [
                        'required' => 'Description field is required',
                        'min_length' => 'Description Minimum 1 Character',
                        'max_length' => 'Description Maximum 50 Character',
                    ]
                ],
                'category' => [
                    'rules'  => 'required|min_length[1]|max_length[25]',
                    'errors' => [
                        'required' => 'Category field is required',
                        'min_length' => 'Category Minimum 1 Character',
                        'max_length' => 'Category Maximum 25 Character',
                    ]
                ],
            ];

            if(!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

    	        $data = [
    	            'permission_description' => $this->request->getVar('description'),
                    'permission_category' => $this->request->getVar('category'),
    	        ];

    	        $simpan_permission = $this->permission_model->insert($data);
                $permission_id = $this->permission_model->insertID();

                $data_role = [
                    [
                        'role_id' => 1,
                        'permission_id' => $permission_id,
                    ],
                    [
                        'role_id' => 2,
                        'permission_id' => $permission_id,
                    ],
                ];

                $simpan_role_permission = $this->permission_model->save_role_permission($data_role);

    	        if ($simpan_permission && $simpan_role_permission) {
    	            session()->setFlashdata('message', 'Save data success');
    	        }
        	}

            return redirect()->to(base_url('/permission'));
        }else{
            return redirect()->to(base_url('/dashboard/err404'));
        }

    }

    public function edit($id)
    {
        if (!user_can('edit-permission')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data = array(
            'post' => $this->permission_model->find($id)
        );

        $data['title'] = "Edit Permission";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Permission', '/permission');
        $this->breadcrumb->add('Edit', '/permission/edit/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['validation'] = \Config\Services::validation();

        return view('dashboard/permission/edit', $data);
    }

    public function update($id)
    {
        if (!user_can('edit-permission')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

    	//load helper form and URL
        helper(['form', 'url']);

        if (check_token('permission_edit',$this->request->getVar('token'))) 
        {	
            //define validation
            $validation = [
                'description' => [
                    'rules'  => 'required|min_length[1]|max_length[50]',
                    'errors' => [
                        'required' => 'Description field is required',
                        'min_length' => 'Description Minimum 1 Character',
                        'max_length' => 'Description Maximum 50 Character',
                    ]
                ],
                'category' => [
                    'rules'  => 'required|min_length[1]|max_length[25]',
                    'errors' => [
                        'required' => 'Category field is required',
                        'min_length' => 'Category Minimum 1 Character',
                        'max_length' => 'Category Maximum 25 Character',
                    ]
                ],
            ];
            

            if(!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

        		$data = [
                    'permission_description' => $this->request->getVar('description'),
                    'permission_category' => $this->request->getVar('category'),
                ];

    	        $simpan = $this->permission_model->update($id,$data);

    	        if ($simpan) {
    	            session()->setFlashdata('message', 'Update data success');
    	        }
        	}

            return redirect()->to(base_url('/permission'));
        }else{
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function delete($id)
    {
        if (!user_can('delete-permission')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $post = $this->permission_model->find($id);

        if($post) {
            $this->permission_model->delete($id);

            //flash message
            session()->setFlashdata('message', 'Delete Data Success');

            return redirect()->to(base_url('/permission'));
        }

    }

    public function dt_permission()
    {
        $where = ['permission_id !=' => 0];
        $column_order   = array('', 'permission_description', 'permission_category');
        $column_search  = array('permission_description', 'permission_category');
        $order = array('permission_id' => 'ASC');
        $list = $this->permission_model->get_datatables('permission', $column_order, $column_search, $order, $where);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $lists) {
            $no++;

            $edit = (user_can('edit-permission')) ? '<a href="/permission/edit/'.$lists->permission_id.'" class="btn btn-link"><i class="fa fa-edit"></i> Edit</a>' : '';

            $delete = (user_can('delete-permission')) ? '<a href="/permission/delete/'.$lists->permission_id.'" class="btn btn-link btn-delete"><i class="fa fa-trash"></i> Delete</a>' : '';


            $row    = array();
            $row['no']  = $no;
            $row['description']  = $lists->permission_description;
            $row['category']  = $lists->permission_category;
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
            "recordsTotal" => $this->permission_model->count_all('permission', $where),
            "recordsFiltered" => $this->permission_model->count_filtered('permission', $column_order, $column_search, $order, $where),
            "data" => $data,
        );

        echo json_encode($output);
    }

    public function permission()
    {
        if (!user_can('set-permission')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Set Role Permission";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Permission', '/permission');
        $this->breadcrumb->add('Set Permission', '/permission/permission');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['permission_data'] = $this->permission_model->findAll();
        $data['permission_role'] = $this->permission_model->permission_role();
        $data['role_data'] = $this->role_model->where('role_id !=',1)->get()->getResult();

        return view('dashboard/permission/permission',$data);
    }

    public function create_role_permission()
    {
        if (!user_can('set-permission')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('update_permission',$this->request->getPost('token'))) 
        {
            $pr = $this->request->getVar('pr');

            $simpan = $this->permission_model->save_set_permission($pr);

            if ($simpan) {
                session()->setFlashdata('message', 'Set Permission Success');
            }

            return redirect()->to(base_url('/permission'));

        }else{

            return redirect()->to(base_url('/dashboard/err404'));

        }
    }
}
