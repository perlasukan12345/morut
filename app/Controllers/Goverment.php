<?php

namespace App\Controllers;

use App\Models\GovermentModel;
use App\Models\SettingModel;

class Goverment extends BaseController
{
    public $g_model;
    public $setting_model;

    public function __construct()
    {
        $this->g_model = new GovermentModel();
        $this->setting_model = new SettingModel();
    }

    public function index()
    {
        if (!user_can('view-goverment')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Goverment";
        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('Visi & Misi', '/goverment/index');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['gov'] = $this->g_model->first();
        $data['validation'] = \Config\Services::validation();

        return view('dashboard/profile/goverment/edit', $data);
    }

    public function visi_misi()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Visi & Misi', '/goverment/visi_misi');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['goverment'] = $this->g_model->select('visi_misi')->first();
        $data['setting'] = $this->setting_model->first();

        return view('home/profile/goverment/visi_misi', $data);
    }

    public function update($id)
    {
        if (!user_can('edit-goverment')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('token_gov', $this->request->getVar('token'))) {

            $validation = [
                'visi_misi' => [
                    'rules'  => 'required|min_length[8]',
                    'errors' => [
                        'required' => 'Job History field is required',
                        'min_length' => 'Job History Minimum 8 Character',
                    ]
                ],
            ];

            if (!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

                $visi_misi = $this->request->getVar('visi_misi');

                $data = [
                    'visi_misi' => $visi_misi,
                ];

                $edit = $this->g_model->update($id, $data);
                if ($edit) {
                    session()->setFlashdata('message', 'Edit data success');
                    return redirect()->to(base_url('/goverment/index'));
                }
            }
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }
}
