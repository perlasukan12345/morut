<?php

namespace App\Controllers;

use App\Models\RoleModel;

class Role extends BaseController
{
	public $role_model;

    public function __construct()
    {
        $this->role_model = new RoleModel();
    }

    public function index()
    {
        if (!user_can('view-role')) {
           return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Role";
        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Role', '/role');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        return view('dashboard/role/list',$data);
    }

    public function add()
    {
        if (!user_can('create-role')) {
           return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Add Role";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Role', '/role');
        $this->breadcrumb->add('Add', '/role/add');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['validation'] = \Config\Services::validation();

        return view('dashboard/role/add',$data);
    }

    public function create()
    {
        if (!user_can('create-role')) {
           return redirect()->to(base_url('/dashboard/invalid'));
        }

    	//load helper form and URL
        helper(['form', 'url']);
        
        if (check_token('role_add',$this->request->getVar('token'))) 
        {
            //define validation
            $validation = [
                'role_name' => [
                    'rules'  => 'required|min_length[4]|max_length[50]|is_unique[role.role_name]',
                    'errors' => [
                        'required' => 'Role name field is required',
                        'min_length' => 'Role name Minimum 4 Character',
                        'max_length' => 'Role name Maximum 50 Character',
                        'is_unique' => 'Role name alread Exist'
                    ]
                ],
            ];

            if(!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

    	        $data = [
    	            'role_name' => $this->request->getVar('role_name'),
    	        ];

    	        $simpan = $this->role_model->insert($data);
    	        if ($simpan) {
    	            session()->setFlashdata('message', 'Save data success');
    	        }
        	}

            return redirect()->to(base_url('/role'));
        }else{
            return redirect()->to(base_url('/dashboard/err404'));
        }

    }

    public function edit($id)
    {
        if (!user_can('edit-role')) {
           return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data = array(
            'post' => $this->role_model->find($id)
        );

        $data['title'] = "Edit Role";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Role', '/role');
        $this->breadcrumb->add('Edit', '/role/edit/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['validation'] = \Config\Services::validation();

        return view('dashboard/role/edit', $data);
    }

    public function update($id)
    {
        if (!user_can('edit-role')) {
           return redirect()->to(base_url('/dashboard/invalid'));
        }

    	//load helper form and URL
        helper(['form', 'url']);

        if (check_token('role_edit',$this->request->getVar('token'))) 
        {	
            //define validation
            $validation = [
               'role_name' => [
                    'rules'  => 'required|min_length[4]|max_length[50]|is_unique[role.role_name]',
                    'errors' => [
                        'required' => 'Role name field is required',
                        'min_length' => 'Role name Minimum 4 Character',
                        'max_length' => 'Role name Maximum 50 Character',
                        'is_unique' => 'Role name alread Exist'
                    ]
                ],
            ];
            

            if(!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

        		$data = [
		            'role_name' => $this->request->getVar('role_name')
		        ];

    	        $simpan = $this->role_model->update($id,$data);

    	        if ($simpan) {
    	            session()->setFlashdata('message', 'Update data success');
    	        }
        	}

            return redirect()->to(base_url('/role'));
        }else{
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function delete($id)
    {
        if (!user_can('delete-role')) {
           return redirect()->to(base_url('/dashboard/invalid'));
        }

        $post = $this->role_model->find($id);

        if($post) {
            $this->role_model->delete($id);
            $this->role_model->delete_permission($id);
            $this->role_model->delete_user_role($id);

            //flash message
            session()->setFlashdata('message', 'Delete Data Success');

            return redirect()->to(base_url('/role'));
        }

    }

    public function dt_role()
    {
        $where = ['role_id !=' => 0];
        $column_order   = array('', 'role_name');
        $column_search  = array('role_name');
        $order = array('role_id' => 'ASC');
        $list = $this->role_model->get_datatables('role', $column_order, $column_search, $order, $where);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $lists) {
            $no++;
            $edit = (user_can('edit-role')) ? '<a href="/role/edit/'.$lists->role_id.'" class="btn btn-link"><i class="fa fa-edit"></i> Edit</a>' : "";

            $delete = (user_can('delete-role')) ? '<a href="/role/delete/'.$lists->role_id.'" class="btn btn-link btn-delete"><i class="fa fa-trash"></i> Delete</a>' : "";

            $row    = array();
            $row['no']  = $no;
            $row['role_name']  = $lists->role_name;
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
            "recordsTotal" => $this->role_model->count_all('role', $where),
            "recordsFiltered" => $this->role_model->count_filtered('role', $column_order, $column_search, $order, $where),
            "data" => $data,
        );

        echo json_encode($output);
    }
}
