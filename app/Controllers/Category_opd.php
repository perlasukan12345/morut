<?php

namespace App\Controllers;

use App\Models\CategoryopdModel;

class Category_opd extends BaseController
{
	public $category_opd;

    public function __construct()
    {
        $this->category_opd = new CategoryopdModel();
    }

    public function index()
    {
        if (!user_can('view-category-opd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Category";
        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Category', '/category_opd');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        return view('dashboard/category_opd/list',$data);
    }

    public function add()
    {
        if (!user_can('create-category-opd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Add Category";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Category', '/category_opd');
        $this->breadcrumb->add('Add', '/category_opd/add');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['validation'] = \Config\Services::validation();

        return view('dashboard/category_opd/add',$data);
    }

    public function create()
    {
        if (!user_can('create-category-opd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

    	//load helper form and URL
        helper(['form', 'url']);
        
        if (check_token('category_opd_add',$this->request->getVar('token'))) 
        {
            //define validation
            $validation = [
                'category' => [
                    'rules'  => 'required|min_length[1]|max_length[100]|is_unique[category_opd.category]',
                    'errors' => [
                        'required' => 'Category field is required',
                        'min_length' => 'Category Minimum 1 Character',
                        'max_length' => 'Category Maximum 100 Character',
                        'is_unique' => 'Category already Exist'
                    ]
                ],
            ];

            if(!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

    	        $data = [
    	            'category' => $this->request->getVar('category'),
    	        ];

    	        $simpan = $this->category_opd->insert($data);
    	        if ($simpan) {
    	            session()->setFlashdata('message', 'Save data success');
    	        }
        	}

            return redirect()->to(base_url('/category_opd'));
        }else{
            return redirect()->to(base_url('/dashboard/err404'));
        }

    }

    public function edit($id)
    {
        if (!user_can('edit-category-opd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data = array(
            'post' => $this->category_opd->find($id)
        );

        $data['title'] = "Edit Category OPD";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Category', '/category_opd');
        $this->breadcrumb->add('Edit', '/category_opd/edit/'.$id);
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['validation'] = \Config\Services::validation();

        return view('dashboard/category_opd/edit', $data);
    }

    public function update($id)
    {
        if (!user_can('edit-category-opd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

    	//load helper form and URL
        helper(['form', 'url']);

        if (check_token('category_opd_edit',$this->request->getVar('token'))) 
        {	
            //define validation
            $validation = [
               'category' => [
                    'rules'  => 'required|min_length[1]|max_length[100]|is_unique[category_opd.category]',
                    'errors' => [
                        'required' => 'Category field is required',
                        'min_length' => 'Category Minimum 1 Character',
                        'max_length' => 'Category Maximum 100 Character',
                        'is_unique' => 'Category already Exist'
                    ]
                ],
            ];
            

            if(!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

        		$data = [
		            'category' => $this->request->getVar('category')
		        ];

    	        $simpan = $this->category_opd->update($id,$data);

    	        if ($simpan) {
    	            session()->setFlashdata('message', 'Update data success');
    	        }
        	}

            return redirect()->to(base_url('/category_opd'));
        }else{
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function delete($id)
    {
        if (!user_can('delete-category-opd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $post = $this->category_opd->find($id);

        if($post) {
            $this->category_opd->delete($id);

            $this->category_opd->refill_id();
            
            //flash message
            session()->setFlashdata('message', 'Delete Data Success');

            return redirect()->to(base_url('/category_opd'));
        }

    }

    public function dt_category_opd()
    {
        $where = ['category_opd_id !=' => 0];
        $column_order   = array('', 'category');
        $column_search  = array('category');
        $order = array('category_opd_id' => 'ASC');
        $list = $this->category_opd->get_datatables('category_opd', $column_order, $column_search, $order, $where);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $lists) {
            $no++;

            $edit = (user_can('edit-category-opd')) ? '<a href="/category_opd/edit/'.$lists->category_opd_id.'" class="btn btn-link"><i class="fa fa-edit"></i> Edit</a>' : '';
            $delete = (user_can('delete-category-opd')) ? '<a href="/category_opd/delete/'.$lists->category_opd_id.'" class="btn btn-link btn-delete"><i class="fa fa-trash"></i> Delete</a>' : '';

            $row    = array();
            $row['no']  = $no;
            $row['category']  = $lists->category;
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
            "recordsTotal" => $this->category_opd->count_all('category_opd', $where),
            "recordsFiltered" => $this->category_opd->count_filtered('category_opd', $column_order, $column_search, $order, $where),
            "data" => $data,
        );

        echo json_encode($output);
    }
}
