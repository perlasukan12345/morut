<?php

namespace App\Controllers;

use App\Models\CategorymenuModel;

class Category_menu extends BaseController
{
	public $category_menu;

    public function __construct()
    {
        $this->category_menu = new CategorymenuModel();
    }

    public function list($menu)
    {
        if (!user_can('view-category-profile') AND !user_can('view-category-information')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        if ($menu != 'profile' AND $menu != 'information') {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Category";
        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('Category', '/category_menu/list/'.$menu);
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['menu'] = $menu;

        return view('dashboard/category_menu/list',$data);
    }

    public function add($menu)
    {
        if (!user_can('create-category-profile') AND !user_can('create-category-information')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        if ($menu != 'profile' AND $menu != 'information') {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Add Category";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Category', '/category_menu/list/'.$menu);
        $this->breadcrumb->add('Add', '/category_menu/add'.$menu);
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['validation'] = \Config\Services::validation();

        $data['menu'] = $menu;

        return view('dashboard/category_menu/add',$data);
    }

    public function create($menu)
    {
        if (!user_can('create-category-profile') AND !user_can('create-category-information')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        if ($menu != 'profile' AND $menu != 'information') {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

    	//load helper form and URL
        helper(['form', 'url']);
        
        if (check_token('category_menu_add',$this->request->getVar('token'))) 
        {
            //define validation
            $validation = [
                'category' => [
                    'rules'  => 'required|min_length[1]|max_length[100]|is_unique[category_menu.category]',
                    'errors' => [
                        'required' => 'Category name field is required',
                        'min_length' => 'Category name Minimum 1 Character',
                        'max_length' => 'Category name Maximum 100 Character',
                        'is_unique' => 'Category name already Exist'
                    ]
                ],
            ];

            if(!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

    	        $data = [
                    'menu' => $menu,
    	            'category' => $this->request->getVar('category'),
    	        ];

    	        $simpan = $this->category_menu->insert($data);
    	        if ($simpan) {
    	            session()->setFlashdata('message', 'Save data success');
    	        }
        	}

            return redirect()->to(base_url('/category_menu/list/'.$menu));
        }else{
            return redirect()->to(base_url('/dashboard/err404'));
        }

    }

    public function edit($menu,$id)
    {
        if (!user_can('edit-category-profile') AND !user_can('edit-category-profile')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        if ($menu != 'profile' AND $menu != 'information') {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data = array(
            'post' => $this->category_menu->find($id)
        );

        $data['title'] = "Edit Category";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Category', '/category_menu/list/'.$menu);
        $this->breadcrumb->add('Edit', '/category_menu/edit_profile/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['validation'] = \Config\Services::validation();

        $data['menu'] = $menu;

        return view('dashboard/category_menu/edit', $data);
    }

    public function update($menu,$id)
    {
        if (!user_can('edit-category-profile') AND !user_can('edit-category-information')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        if ($menu != 'profile' AND $menu != 'information') {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

    	//load helper form and URL
        helper(['form', 'url']);

        if (check_token('category_menu_edit',$this->request->getVar('token'))) 
        {	
            //define validation
            $validation = [
               'category' => [
                    'rules'  => 'required|min_length[1]|max_length[100]|is_unique[category_menu.category]',
                    'errors' => [
                        'required' => 'Category name field is required',
                        'min_length' => 'Category name Minimum 1 Character',
                        'max_length' => 'Category name Maximum 100 Character',
                        'is_unique' => 'Category name already Exist'
                    ]
                ],
            ];
            

            if(!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

        		$data = [
		            'category' => $this->request->getVar('category')
		        ];

    	        $simpan = $this->category_menu->update($id,$data);

    	        if ($simpan) {
    	            session()->setFlashdata('message', 'Update data success');
    	        }
        	}

            return redirect()->to(base_url('/category_menu/list/'.$menu));
        }else{
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function delete($menu,$id)
    {
        if (!user_can('delete-category-profile') AND !user_can('delete-category-information')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        if ($menu != 'profile' AND $menu != 'information') {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $post = $this->category_menu->find($id);

        if($post) {
            $this->category_menu->delete($id);

            //flash message
            session()->setFlashdata('message', 'Delete Data Success');

            return redirect()->to(base_url('/category_menu/list/'.$menu));
        }

    }

    public function dt_category_menu($menu)
    {
        $where = ['menu =' => $menu];
        $column_order   = array('', 'category');
        $column_search  = array('category');
        $order = array('category_menu_id' => 'ASC');
        $list = $this->category_menu->get_datatables('category_menu', $column_order, $column_search, $order, $where);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $lists) {
            $no++;

            $edit = (user_can('edit-category-profile') OR user_can('edit-category-information')) ? '<a href="/category_menu/edit/'.$menu.'/'.$lists->category_menu_id.'" class="btn btn-link"><i class="fa fa-edit"></i> Edit</a>' : '';
            $delete = (user_can('delete-category-profile') OR user_can('delete-category-information')) ? '<a href="/category_menu/delete/'.$menu.'/'.$lists->category_menu_id.'" class="btn btn-link btn-delete"><i class="fa fa-trash"></i> Delete</a>' : '';

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
            "recordsTotal" => $this->category_menu->count_all('category_menu', $where),
            "recordsFiltered" => $this->category_menu->count_filtered('category_menu', $column_order, $column_search, $order, $where),
            "data" => $data,
        );

        echo json_encode($output);
    }
}
