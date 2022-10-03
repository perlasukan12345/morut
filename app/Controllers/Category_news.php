<?php

namespace App\Controllers;

use App\Models\CategorynewsModel;

class Category_news extends BaseController
{
	public $category_news;

    public function __construct()
    {
        $this->category_news = new CategorynewsModel();
    }

    public function index()
    {
        if (!user_can('view-category-news')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Category";
        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Category', '/category_news');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        return view('dashboard/category_news/list',$data);
    }

    public function add()
    {
        if (!user_can('create-category-news')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Add Category";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Category', '/category_news');
        $this->breadcrumb->add('Add', '/category_news/add');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['validation'] = \Config\Services::validation();

        return view('dashboard/category_news/add',$data);
    }

    public function create()
    {
        if (!user_can('create-category-news')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

    	//load helper form and URL
        helper(['form', 'url']);
        
        if (check_token('category_news_add',$this->request->getVar('token'))) 
        {
            //define validation
            $validation = [
                'category_name' => [
                    'rules'  => 'required|min_length[8]|max_length[100]|is_unique[category_news.category_name]',
                    'errors' => [
                        'required' => 'Category name field is required',
                        'min_length' => 'Category name Minimum 8 Character',
                        'max_length' => 'Category name Maximum 100 Character',
                        'is_unique' => 'Category name already Exist'
                    ]
                ],
            ];

            if(!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

    	        $data = [
    	            'category_name' => $this->request->getVar('category_name'),
    	        ];

    	        $simpan = $this->category_news->insert($data);
    	        if ($simpan) {
    	            session()->setFlashdata('message', 'Save data success');
    	        }
        	}

            return redirect()->to(base_url('/category_news'));
        }else{
            return redirect()->to(base_url('/dashboard/err404'));
        }

    }

    public function edit($id)
    {
        if (!user_can('edit-category-news')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data = array(
            'post' => $this->category_news->find($id)
        );

        $data['title'] = "Edit Category News";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Category', '/category_news');
        $this->breadcrumb->add('Edit', '/category_news/edit/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['validation'] = \Config\Services::validation();

        return view('dashboard/category_news/edit', $data);
    }

    public function update($id)
    {
        if (!user_can('edit-category-news')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

    	//load helper form and URL
        helper(['form', 'url']);

        if (check_token('category_news_edit',$this->request->getVar('token'))) 
        {	
            //define validation
            $validation = [
               'category_name' => [
                    'rules'  => 'required|min_length[8]|max_length[100]|is_unique[category_news.category_name]',
                    'errors' => [
                        'required' => 'Category name field is required',
                        'min_length' => 'Category name Minimum 8 Character',
                        'max_length' => 'Category name Maximum 100 Character',
                        'is_unique' => 'Category name already Exist'
                    ]
                ],
            ];
            

            if(!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

        		$data = [
		            'category_name' => $this->request->getVar('category_name')
		        ];

    	        $simpan = $this->category_news->update($id,$data);

    	        if ($simpan) {
    	            session()->setFlashdata('message', 'Update data success');
    	        }
        	}

            return redirect()->to(base_url('/category_news'));
        }else{
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function delete($id)
    {
        if (!user_can('delete-category-news')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $post = $this->category_news->find($id);

        if($post) {
            $this->category_news->delete($id);

            //flash message
            session()->setFlashdata('message', 'Delete Data Success');

            return redirect()->to(base_url('/category_news'));
        }

    }

    public function dt_category_news()
    {
        $where = ['category_news_id !=' => 0];
        $column_order   = array('', 'category_name');
        $column_search  = array('category_name');
        $order = array('category_news_id' => 'ASC');
        $list = $this->category_news->get_datatables('category_news', $column_order, $column_search, $order, $where);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $lists) {
            $no++;

            $edit = (user_can('edit-category-news')) ? '<a href="/category_news/edit/'.$lists->category_news_id.'" class="btn btn-link"><i class="fa fa-edit"></i> Edit</a>' : '';
            $delete = (user_can('delete-category-news')) ? '<a href="/category_news/delete/'.$lists->category_news_id.'" class="btn btn-link btn-delete"><i class="fa fa-trash"></i> Delete</a>' : '';

            $row    = array();
            $row['no']  = $no;
            $row['category_name']  = $lists->category_name;
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
            "recordsTotal" => $this->category_news->count_all('category_news', $where),
            "recordsFiltered" => $this->category_news->count_filtered('category_news', $column_order, $column_search, $order, $where),
            "data" => $data,
        );

        echo json_encode($output);
    }
}
