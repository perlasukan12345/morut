<?php

namespace App\Controllers;

use App\Models\SettingModel;
use App\Models\PeoplesaidModel;

class PeopleSaid extends BaseController
{
    public $setting_model;
    public $peoplesaid_model;


    public function __construct()
    {
        $this->setting_model = new SettingModel();
        $this->peoplesaid_model = new PeoplesaidModel();
    }

    public function index()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Suara Rakyat', '/peoplesaid/index');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['people_said'] = $this->peoplesaid_model->gt_findAll()->paginate(12, 'p_said');
        $data['pager'] = $this->peoplesaid_model->pager;
        $data['setting'] = $this->setting_model->first();
       
        return view('home/media/people_said', $data);
    }

    public function create()
    {

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('people_said', $this->request->getVar('token'))) {
            //define validation
            $validation = [
                'image' => [
                    'rules' => 'uploaded[image]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'No Image Selected',
                        'is_image' => 'Image file type must be JPG, JPEG, PNG',
                        'mime_in' => 'Image file type must be JPG, JPEG, PNG',
                    ],
                ],
                'name' => [
                    'rules' => 'required|min_length[8]|max_length[100]',
                    'errors' => [
                        'required' => 'Name field is required',
                        'min_length' => 'Name Minimum 8 Character',
                        'max_length' => 'Name Maximum 100 Character',
                    ]
                ],
                'subject' => [
                    'rules' => 'required|min_length[8]|max_length[100]',
                    'errors' => [
                        'required' => 'Subject field is required',
                        'min_length' => 'Subject Minimum 8 Character',
                        'max_length' => 'Subject Maximum 100 Character',
                    ]
                ],
                'message' => [
                    'rules' => 'required|min_length[8]|max_length[500]',
                    'errors' => [
                        'required' => 'Message field is required',
                        'min_length' => 'Message Minimum 8 Character',
                        'max_length' => 'Message Maximum 500 Character',
                    ]
                ],
            ];

            if (!$this->validate($validation)) {
                session()->setFlashdata('error', 'Filed For Send Message');
                return redirect()->back()->withInput();
            } else {
                $imgPath = $this->request->getFile('image');
                $name = $this->request->getVar('name');
                $subject = $this->request->getVar('subject');
                $message = $this->request->getVar('message');

                $imgName = $imgPath->getRandomName();

                $data = [
                    'image' => $imgName,
                    'name' => $name,
                    'subject' => $subject,
                    'message' => $message,
                ];

                $simpan = $this->peoplesaid_model->insert($data);
                if ($simpan) {
                    // Image manipulation
                    $image = \Config\Services::image()
                        ->withFile($imgPath)
                        ->fit(100, 100, 'center')
                        ->save(FCPATH . '/img/people/' . $imgName);
                }
            }
            session()->setFlashdata('message', 'Success For Send Message');
            return redirect()->to(base_url('/home/index'));
        }
    }

    public function activated($id)
    {

        if (!user_can('edit-news')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data = [
            'active' => 1,
        ];

        $this->peoplesaid_model->update($id,$data);
        session()->setFlashdata('message', 'Activated message succses');
        return redirect()->to(base_url('/dashboard'));
    }
}
