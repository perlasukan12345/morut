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
}
?>
