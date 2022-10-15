<?php

namespace App\Controllers;

use App\Models\FlashModel;

class Flash extends BaseController
{
    public $flash_model;

    public function __construct()
    {
        $this->flash_model = new FlashModel();
    }

    public function bupati()
    {
        if (!user_can('view-flash')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Flash Screen";
        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('Flash Screen', '/flash/bupati');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['bupati'] = $this->flash_model->gt_dataPosition('Bupati Morowali Utara');
        $data['validation'] = \Config\Services::validation();

        return view('dashboard/setting/flash_screen/bupati', $data);
    }

     public function wabup()
    {
        if (!user_can('view-flash')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Flash Screen";
        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('Flash Screen', '/flash/wabup');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['wabup'] = $this->flash_model->gt_dataPosition('Wakil Bupati Morowali Utara');
        $data['validation'] = \Config\Services::validation();

        return view('dashboard/setting/flash_screen/wabup', $data);
    }

    public function update($id)
    {
        if (!user_can('edit-flash')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('token_flash', $this->request->getVar('token'))) {

            $validation = [
                'image_file' => [
                    'rules' => 'max_size[image_file,2024]|is_image[image_file]|mime_in[image_file,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Image size Maximum 2 MB',
                        'is_image' => 'Image file type must be JPG, JPEG, PNG',
                        'mime_in' => 'Image file type must be JPG, JPEG, PNG',
                    ],
                ],
                'name' => [
                    'rules' => 'required|min_length[1]|max_length[100]',
                    'errors' => [
                        'required' => 'Name field is required',
                        'min_length' => 'Name Minimum 1 Character',
                        'max_length' => 'Name Maximum 100 Character',
                    ]
                ],
                'job_history' => [
                    'rules'  => 'required|min_length[1]',
                    'errors' => [
                        'required' => 'Job History field is required',
                        'min_length' => 'Job History Minimum 1 Character',
                    ]
                ],
                'education_background' => [
                    'rules'  => 'required|min_length[1]',
                    'errors' => [
                        'required' => 'Education Background field is required',
                        'min_length' => 'Education Background Minimum 1 Character',
                    ]
                ],
                'organization_history' => [
                    'rules'  => 'required|min_length[1]',
                    'errors' => [
                        'required' => 'Organization History field is required',
                        'min_length' => 'Organization History Minimum 1 Character',
                    ]
                ],
                'address' => [
                    'rules'  => 'required|min_length[1]',
                    'errors' => [
                        'required' => 'Address History field is required',
                        'min_length' => 'Address Minimum 1 Character',
                    ]
                ],
                'birth' => [
                    'rules' => 'required|min_length[1]|max_length[100]',
                    'errors' => [
                        'required' => 'Birthday field is required',
                        'min_length' => 'Birthday Minimum 1 Character',
                        'max_length' => 'Birthday Maximum 100 Character',
                    ]
                ],
            ];

            if (!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

                $imgOld = $this->request->getVar('imageOld');
                $imgPath = $this->request->getFile('image_file');
                $name = $this->request->getVar('name');
                $job_history = $this->request->getVar('job_history');
                $education_background = $this->request->getVar('education_background');
                $organization_history = $this->request->getVar('organization_history');
                $address = $this->request->getVar('address');
                $birth = $this->request->getVar('birth');

                if ($imgPath->getError() == 4) {
                    $imgName = $imgOld;
                } else {
                    $imgName = $imgPath->getName();
                    unlink('img/setting/' . $imgOld);
                    $image = \Config\Services::image()
                        ->withFile($imgPath)
                        ->fit(400, 600, 'center')
                        ->save(FCPATH . '/img/setting/' . $imgName);
                }

                $data = [
                    'name' => $name,
                    'job_history' => $job_history,
                    'education_background' => $education_background,
                    'organization_history' => $organization_history,
                    'address' => $address,
                    'birth' => $birth,
                    'img' => $imgName,
                ];

                $edit = $this->flash_model->update($id, $data);
                if ($edit) {
                    session()->setFlashdata('message', 'Edit data success');
                    return redirect()->to(base_url('/flash/bupati'));
                }
            }
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function update_wabup($id)
    {
        if (!user_can('edit-flash')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('token_flash', $this->request->getVar('token'))) {

            $validation = [
                'image_file' => [
                    'rules' => 'max_size[image_file,2024]|is_image[image_file]|mime_in[image_file,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Image size Maximum 2 MB',
                        'is_image' => 'Image file type must be JPG, JPEG, PNG',
                        'mime_in' => 'Image file type must be JPG, JPEG, PNG',
                    ],
                ],
                'name' => [
                    'rules' => 'required|min_length[1]|max_length[100]',
                    'errors' => [
                        'required' => 'Name field is required',
                        'min_length' => 'Name Minimum 1 Character',
                        'max_length' => 'Name Maximum 100 Character',
                    ]
                ],
                'job_history' => [
                    'rules'  => 'required|min_length[1]',
                    'errors' => [
                        'required' => 'Job History field is required',
                        'min_length' => 'Job History Minimum 1 Character',
                    ]
                ],
                'education_background' => [
                    'rules'  => 'required|min_length[1]',
                    'errors' => [
                        'required' => 'Education Background field is required',
                        'min_length' => 'Education Background Minimum 1 Character',
                    ]
                ],
                'organization_history' => [
                    'rules'  => 'required|min_length[1]',
                    'errors' => [
                        'required' => 'Organization History field is required',
                        'min_length' => 'Organization History Minimum 1 Character',
                    ]
                ],
                'address' => [
                    'rules'  => 'required|min_length[1]',
                    'errors' => [
                        'required' => 'Address History field is required',
                        'min_length' => 'Address Minimum 1 Character',
                    ]
                ],
                'birth' => [
                    'rules' => 'required|min_length[1]|max_length[100]',
                    'errors' => [
                        'required' => 'Birthday field is required',
                        'min_length' => 'Birthday Minimum 1 Character',
                        'max_length' => 'Birthday Maximum 100 Character',
                    ]
                ],
            ];

            if (!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {

                $imgOld = $this->request->getVar('imageOld');
                $imgPath = $this->request->getFile('image_file');
                $name = $this->request->getVar('name');
                $job_history = $this->request->getVar('job_history');
                $education_background = $this->request->getVar('education_background');
                $organization_history = $this->request->getVar('organization_history');
                $address = $this->request->getVar('address');
                $birth = $this->request->getVar('birth');

                if ($imgPath->getError() == 4) {
                    $imgName = $imgOld;
                } else {
                    $imgName = $imgPath->getName();
                    unlink('img/setting/' . $imgOld);
                     $image = \Config\Services::image()
                        ->withFile($imgPath)
                        ->fit(400, 600, 'center')
                        ->save(FCPATH . '/img/setting/' . $imgName);
                }

                $data = [
                    'name' => $name,
                    'job_history' => $job_history,
                    'education_background' => $education_background,
                    'organization_history' => $organization_history,
                    'address' => $address,
                    'birth' => $birth,
                    'img' => $imgName,
                ];

                $edit = $this->flash_model->update($id, $data);
                if ($edit) {
                    session()->setFlashdata('message', 'Edit data success');
                    return redirect()->to(base_url('/flash/wabup'));
                }
            }
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }
}
