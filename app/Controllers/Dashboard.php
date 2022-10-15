<?php

namespace App\Controllers;

use App\Models\PeoplesaidModel;
use App\Models\NewsModel;
use App\Models\UserModel;

class Dashboard extends BaseController
{
    public $peoplesaid_model;
    public $news_model;
    public $user_model;

    public function __construct()
    {        
        $this->peoplesaid_model = new PeoplesaidModel();
        $this->news_model = new NewsModel();
        $this->user_model = new UserModel();
    }

    public function index()
    {
    	$data['title'] = "Dashboard";
    	$this->breadcrumb->add('Dashboard', '/dashboard');
    	$data['breadcrumbs'] = $this->breadcrumb->render();

        $data['people_said'] = $this->peoplesaid_model->where('active',0)->find();
        $data['count_people'] = count($this->peoplesaid_model->findAll());
        $data['count_news'] = count($this->news_model->findAll());
        $data['count_user'] = count($this->user_model->findAll());

        return view('dashboard/index',$data);
    }

    public function err404()
    {
        $data['title'] = "404";
        return view('dashboard/404',$data);
    }

    public function invalid()
    {
        $data['title'] = "Invalid";
        return view('dashboard/invalid',$data);
    }

    public function delete_people_said($id)
    {
        if (!user_can('delete-people-said')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $post = $this->peoplesaid_model->find($id);

        if($post) {
            $this->peoplesaid_model->delete($id);
            unlink('img/people/' . $post->image);
            
            //flash message
            session()->setFlashdata('message', 'Delete Data Success');

            return redirect()->to(base_url('/dashboard'));
        }

    }

    public function dt_people_said()
    {
        $where = ['id !=' => 0];
        $column_order   = array('', 'name', 'message');
        $column_search  = array('name', 'message');
        $order = array('id' => 'ASC');
        $list = $this->peoplesaid_model->get_datatables('people_said', $column_order, $column_search, $order, $where);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $lists) {
            $no++;

            $delete = (user_can('delete-people-said')) ? '<a href="/dashboard/delete_people_said/'.$lists->id.'" class="btn btn-link btn-delete"><i class="fa fa-trash"></i> Delete</a>' : '';

            $row    = array();
            $row['no']  = $no;
            $row['name']  = $lists->name;
            $row['message']  = $lists->message;
            $row['option']  = $delete;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->peoplesaid_model->count_all('people_said', $where),
            "recordsFiltered" => $this->peoplesaid_model->count_filtered('people_said', $column_order, $column_search, $order, $where),
            "data" => $data,
        );

        echo json_encode($output);
    }
}
?>
