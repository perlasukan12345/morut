<?php

namespace App\Controllers;

use App\Models\RkpdModel;
use App\Models\OpdModel;

class Rkpd extends BaseController
{
    public $opd;
    public $rkpd_model;

    public function __construct()
    {
        $this->opd = new OpdModel();
        $this->rkpd_model = new RkpdModel();
    }

    public function index()
    {
        if (!user_can('view-rkpd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "RKPD";
        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Rkpd', '/rkpd');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        return view('dashboard/rkpd/list', $data);
    }

    public function add()
    {
        if (!user_can('create-rkpd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Add RKPD";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Rkpd', '/rkpd');
        $this->breadcrumb->add('Add', '/rkpd/add');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['opd'] = $this->opd->findAll();
        $data['validation'] = \Config\Services::validation();

        return view('dashboard/rkpd/add', $data);
    }

    public function create()
    {
        if (!user_can('create-rkpd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('rkpd_add', $this->request->getVar('token'))) {
            //define validation
            $validation = [
                'file_name' => [
                    'rules' => 'uploaded[file_name]|max_size[file_name,2024]|mime_in[file_name,application/pdf]',
                    'errors' => [
                        'uploaded' => 'No File Selected',
                        'max_size' => 'File size Maximum 2 MB',
                        'mime_in' => 'File type must be PDF',
                    ],
                ],
                'title' => [
                    'rules' => 'required|min_length[1]|max_length[100]',
                    'errors' => [
                        'required' => 'Title field is required',
                        'min_length' => 'Title Minimum 1 Character',
                        'max_length' => 'Title Maximum 100 Character',
                    ]
                ],
                'opd' => [
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'OPD field is required',
                    ]
                ],
                'year' => [
                    'rules'  => 'required|numeric|min_length[4]|max_length[4]',
                    'errors' => [
                        'required' => 'Year field is required!',
                        'numeric' => 'Year field must be Numeric',
                        'min_length' => 'Year Minimum 4 Character',
                        'max_length' => 'Year Maximum 4 Character',
                    ]
                ],
                'description' => [
                    'rules'  => 'required|min_length[1]',
                    'errors' => [
                        'required' => 'Description field is required',
                        'min_length' => 'Description Minimum 1 Character',
                    ]
                ],
            ];

            if (!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {
                $file = $this->request->getFile('file_name');
                $title = $this->request->getVar('title');
                $description = $this->request->getVar('description');

                $file_name = $file->getRandomName();

                $opd = $this->request->getVar('opd');
                $year = $this->request->getVar('year');

                $data = [
                    'opd_id' => $opd,
                    'title' => $title,
                    'file_name' => $file_name,
                    'year' => $year,
                    'description' => $description,
                ];

                $simpan = $this->rkpd_model->insert($data);
                if ($simpan) {
                    // File manipulation
                     $file->move(FCPATH.'upload/rkpd', $file_name);
                }
            }

            return redirect()->to(base_url('/rkpd'));
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function edit($id)
    {
        if (!user_can('edit-rkpd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data = [
            'post' => $this->rkpd_model->find($id)
        ];

        $data['title'] = "Edit RKPD";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Rkpd', '/rkpd');
        $this->breadcrumb->add('Edit', '/rkpd/edit/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['opd'] = $this->opd->findAll();
        $data['validation'] = \Config\Services::validation();

        return view('dashboard/rkpd/edit', $data);
    }

    public function update($id)
    {
        if (!user_can('edit-rkpd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('rkpd_edit', $this->request->getVar('token'))) {

            $data = $this->rkpd_model->where(['rkpd_id' => $id])->first();

             $validation = [
                'file_name' => [
                    'rules' => 'max_size[file_name,2024]|mime_in[file_name,application/pdf]',
                    'errors' => [
                        'max_size' => 'File size Maximum 2 MB',
                        'mime_in' => 'File type must be PDF',
                    ],
                ],
                'title' => [
                    'rules' => 'required|min_length[1]|max_length[100]',
                    'errors' => [
                        'required' => 'Title field is required',
                        'min_length' => 'Title Minimum 1 Character',
                        'max_length' => 'Title Maximum 100 Character',
                    ]
                ],
                'opd' => [
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'OPD field is required',
                    ]
                ],
                'year' => [
                    'rules'  => 'required|numeric|min_length[4]|max_length[4]',
                    'errors' => [
                        'required' => 'Year field is required!',
                        'numeric' => 'Year field must be Numeric',
                        'min_length' => 'Year Minimum 4 Character',
                        'max_length' => 'Year Maximum 4 Character',
                    ]
                ],
                'description' => [
                    'rules'  => 'required|min_length[1]',
                    'errors' => [
                        'required' => 'Description field is required',
                        'min_length' => 'Description Minimum 1 Character',
                    ]
                ],
            ];

            if (!$this->validate($validation)) {
                return redirect()->to(base_url('rkpd/edit/' . $data->rkpd_id))->withInput();
            } else {

                $old_file = $this->request->getVar('old_file');
                $file = $this->request->getFile('file_name');
                // dd($newImage);
                if ($file->getError() == 4) {
                    $file_name = $old_file;
                } else {
                    $file_name = $file->getRandomName();
                    unlink('upload/rkpd/' . $old_file);
                    // Image manipulation
                   $file->move(FCPATH.'upload/rkpd', $file_name);
                }

                $title = $this->request->getVar('title');
                $description = $this->request->getVar('description');
                $opd = $this->request->getVar('opd');
                $year = $this->request->getVar('year');

                $data = [
                    'opd_id' => $opd,
                    'title' => $title,
                    'file_name' => $file_name,
                    'year' => $year,
                    'description' => $description,
                ];

                $this->rkpd_model->update($id,$data);
                session()->setFlashdata('message', 'Edit data success');
                return redirect()->to(base_url('/rkpd'));
            }
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function delete($id)
    {
        if (!user_can('delete-rkpd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data = $this->rkpd_model->where(['rkpd_id' => $id])->first();

        $this->rkpd_model->delete($data->rkpd_id);
        unlink('upload/rkpd/' . $data->file_name);
        
        session()->setFlashdata('message', 'Delete data success');
        return redirect()->to(base_url('/rkpd'));
    }

    public function download($id)
    {
        $data = $this->rkpd_model->where(['rkpd_id' => $id])->first();
        return $this->response->download(FCPATH.'upload/rkpd/' . $data->file_name, null);
    }

    public function dt_rkpd()
    {
        $where = ['rkpd_id !=' => 0];
        $column_order   = array('', 'title', 'opd', 'year', 'description');
        $column_search  = array('title', 'opd', 'year', 'description');
        $order = array('rkpd_id' => 'ASC');
        $list = $this->rkpd_model->get_datatables('rkpd', $column_order, $column_search, $order, $where);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $lists) {
            $no++;

            $edit = (user_can('edit-rkpd')) ? '<a href="/rkpd/edit/' . $lists->rkpd_id . '" class="btn btn-link"><i class="fa fa-edit"></i> Edit</a>' : '';
            $delete = (user_can('delete-rkpd')) ? '<a href="/rkpd/delete/' . $lists->rkpd_id . '" class="btn btn-link btn-delete"><i class="fa fa-trash"></i> Delete</a>' : '';

            $row    = array();
            $row['no']  = $no;
            $row['opd']  = $lists->opd;
            $row['title']  = $lists->title;
            $row['year']  = $lists->year;
            $row['download']  = '<a href="/rkpd/download/'.$lists->rkpd_id.'?>">Download</a></td>';
            $row['option']  = '<div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                    ' . $edit . '
                </li><li>
                	' . $delete . '
                    </li>
                </ul>
            </div>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->rkpd_model->count_all('rkpd', $where),
            "recordsFiltered" => $this->rkpd_model->count_filtered('rkpd', $column_order, $column_search, $order, $where),
            "data" => $data,
        );

        echo json_encode($output);
    }
}
