<?php

namespace App\Controllers;

use App\Models\AboutModel;
use App\Models\SettingModel;

class About extends BaseController
{
    public $about_model;
    public $setting_model;

    public function __construct()
    {
        $this->about_model = new AboutModel();
        $this->setting_model = new SettingModel();
    }

    public function index()
    {
        if (!user_can('view-about')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "About";
        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('About', '/about/index');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['about'] = $this->about_model->first();
        $data['validation'] = \Config\Services::validation();

        return view('dashboard/profile/about/edit', $data);
    }

    public function history()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Sejarah', '/about/history');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['about'] = $this->about_model->select('history')->first();
        $data['setting'] = $this->setting_model->first();

        return view('home/profile/about/history', $data);
    }

    public function geografi()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Geografi', '/about/geografi');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['about'] = $this->about_model->select('geografi')->first();
        $data['setting'] = $this->setting_model->first();

        return view('home/profile/about/geografi', $data);
    }

    public function demografi()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Demografi', '/about/demografi');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['about'] = $this->about_model->select('demografi')->first();
        $data['setting'] = $this->setting_model->first();

        return view('home/profile/about/demografi', $data);
    }

    public function update($id)
    {
        if (!user_can('edit-about')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('token_about', $this->request->getVar('token'))) {

            $validation = [
                'history' => [
                    'rules'  => 'required|min_length[8]',
                    'errors' => [
                        'required' => 'Job History field is required',
                        'min_length' => 'Job History Minimum 8 Character',
                    ]
                ],
                'geografi' => [
                    'rules'  => 'required|min_length[8]',
                    'errors' => [
                        'required' => 'Education Background field is required',
                        'min_length' => 'Education Background Minimum 8 Character',
                    ]
                ],
                'demografi' => [
                    'rules'  => 'required|min_length[8]',
                    'errors' => [
                        'required' => 'Organization History field is required',
                        'min_length' => 'Organization History Minimum 8 Character',
                    ]
                ],
            ];

            if (!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

                $history = $this->request->getVar('history');
                $geografi = $this->request->getVar('geografi');
                $demografi = $this->request->getVar('demografi');

                $data = [
                    'history' => $history,
                    'geografi' => $geografi,
                    'demografi' => $demografi,
                ];

                $edit = $this->about_model->update($id, $data);
                if ($edit) {
                    session()->setFlashdata('message', 'Edit data success');
                    return redirect()->to(base_url('/about/index'));
                }
            }
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }
}
