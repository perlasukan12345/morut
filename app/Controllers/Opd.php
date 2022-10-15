<?php

namespace App\Controllers;

use App\Models\OpdModel;
use App\Models\CategoryopdModel;

class Opd extends BaseController
{
	public $opd;
    public $cat_opd;

    public function __construct()
    {
        $this->opd = new OpdModel();
        $this->cat_opd = new CategoryopdModel();
    }

    public function index()
    {
        if (!user_can('view-opd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "OPD";
        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List OPD', '/opd');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        return view('dashboard/opd/list',$data);
    }

    public function add()
    {
        if (!user_can('create-opd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Add OPD";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List OPD', '/opd');
        $this->breadcrumb->add('Add', '/opd/add');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['category'] = $this->cat_opd->findAll();
        $data['validation'] = \Config\Services::validation();

        return view('dashboard/opd/add',$data);
    }

    public function create()
    {
        if (!user_can('create-category-news')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

    	//load helper form and URL
        helper(['form', 'url']);
        
        if (check_token('opd_add',$this->request->getVar('token'))) 
        {
            //define validation
            $validation = [
                'opd' => [
                    'rules'  => 'required|min_length[1]|max_length[100]|is_unique[opd.opd]',
                    'errors' => [
                        'required' => 'OPD field is required',
                        'min_length' => 'OPD Minimum 1 Character',
                        'max_length' => 'OPD Maximum 100 Character',
                        'is_unique' => 'OPD already Exist'
                    ]
                ],
                'category' => [
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'Category field is required',
                    ]
                ],
                'url' => [
                    'rules'  => 'required|valid_url|min_length[1]|max_length[300]',
                    'errors' => [
                        'required' => 'URL field is required',
                        'valid_url' => 'URL is not valid',
                        'min_length' => 'URL Minimum 1 Character',
                        'max_length' => 'URL Maximum 300 Character'
                    ]
                ],
            ];

            if(!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

    	        $data = [
    	            'opd' => $this->request->getVar('opd'),
                    'category_opd_id' => $this->request->getVar('category'),
                    'url' => $this->request->getVar('url'),
    	        ];

    	        $simpan = $this->opd->insert($data);
    	        if ($simpan) {
    	            session()->setFlashdata('message', 'Save data success');
    	        }
        	}

            return redirect()->to(base_url('/opd'));
        }else{
            return redirect()->to(base_url('/dashboard/err404'));
        }

    }

    public function edit($id)
    {
        if (!user_can('edit-opd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data = array(
            'post' => $this->opd->find($id)
        );

        $data['title'] = "Edit OPD";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List OPD', '/opd');
        $this->breadcrumb->add('Edit', '/opd/edit/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['category'] = $this->cat_opd->findAll();
        $data['validation'] = \Config\Services::validation();

        return view('dashboard/opd/edit', $data);
    }

    public function update($id)
    {
        if (!user_can('edit-opd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

    	//load helper form and URL
        helper(['form', 'url']);

        if (check_token('opd_edit',$this->request->getVar('token'))) 
        {	
            //define validation
            $validation = [
               'opd' => [
                    'rules'  => 'required|min_length[1]|max_length[100]',
                    'errors' => [
                        'required' => 'OPD field is required',
                        'min_length' => 'OPD Minimum 1 Character',
                        'max_length' => 'OPD Maximum 100 Character',
                    ]
                ],
                'category' => [
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'Category field is required',
                    ]
                ],
                'url' => [
                    'rules'  => 'required|valid_url|min_length[1]|max_length[300]',
                    'errors' => [
                        'required' => 'URL field is required',
                        'valid_url' => 'URL is not valid',
                        'min_length' => 'URL Minimum 1 Character',
                        'max_length' => 'URL Maximum 300 Character'
                    ]
                ],
            ];
            

            if(!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

        		$data = [
                    'opd' => $this->request->getVar('opd'),
                    'category_opd_id' => $this->request->getVar('category'),
                    'url' => $this->request->getVar('url'),
                ];

    	        $simpan = $this->opd->update($id,$data);

    	        if ($simpan) {
    	            session()->setFlashdata('message', 'Update data success');
    	        }
        	}

            return redirect()->to(base_url('/opd'));
        }else{
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function delete($id)
    {
        if (!user_can('delete-opd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $post = $this->opd->find($id);

        if($post) {
            $this->opd->delete($id);

            //flash message
            session()->setFlashdata('message', 'Delete Data Success');

            return redirect()->to(base_url('/opd'));
        }

    }

    public function dt_opd()
    {
        $where = ['opd_id !=' => 0];
        $column_order   = array('', 'opd');
        $column_search  = array('opd');
        $order = array('opd_id' => 'ASC');
        $list = $this->opd->get_datatables('opd', $column_order, $column_search, $order, $where);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $lists) {
            $no++;

            $edit = (user_can('edit-opd')) ? '<a href="/opd/edit/'.$lists->opd_id.'" class="btn btn-link"><i class="fa fa-edit"></i> Edit</a>' : '';
            $delete = (user_can('delete-opd')) ? '<a href="/opd/delete/'.$lists->opd_id.'" class="btn btn-link btn-delete"><i class="fa fa-trash"></i> Delete</a>' : '';

            $row    = array();
            $row['no']  = $no;
            $row['opd']  = $lists->opd;
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
            "recordsTotal" => $this->opd->count_all('opd', $where),
            "recordsFiltered" => $this->opd->count_filtered('opd', $column_order, $column_search, $order, $where),
            "data" => $data,
        );

        echo json_encode($output);
    }
}
