<?php

namespace App\Controllers;

use App\Models\LppdModel;
use App\Models\OpdModel;

class Lppd extends BaseController
{
    public $opd;
    public $lppd_model;

    public function __construct()
    {
        $this->opd = new OpdModel();
        $this->lppd_model = new lppdModel();
    }

    public function index()
    {
        if (!user_can('view-lppd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "LPPD";
        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Lppd', '/lppd');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        return view('dashboard/lppd/list', $data);
    }

    public function add()
    {
        if (!user_can('create-lppd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Add LPPD";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Lppd', '/lppd');
        $this->breadcrumb->add('Add', '/lppd/add');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['opd'] = $this->opd->findAll();
        $data['validation'] = \Config\Services::validation();

        return view('dashboard/lppd/add', $data);
    }

    public function create()
    {
        if (!user_can('create-lppd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('lppd_add', $this->request->getVar('token'))) {
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

                $simpan = $this->lppd_model->insert($data);
                if ($simpan) {
                    // File manipulation
                     $file->move(FCPATH.'upload/lppd', $file_name);
                }
            }

            return redirect()->to(base_url('/lppd'));
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function edit($id)
    {
        if (!user_can('edit-lppd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data = [
            'post' => $this->lppd_model->find($id)
        ];

        $data['title'] = "Edit LPPD";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Lppd', '/lppd');
        $this->breadcrumb->add('Edit', '/lppd/edit/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['opd'] = $this->opd->findAll();
        $data['validation'] = \Config\Services::validation();

        return view('dashboard/lppd/edit', $data);
    }

    public function update($id)
    {
        if (!user_can('edit-lppd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('lppd_edit', $this->request->getVar('token'))) {

            $data = $this->lppd_model->where(['lppd_id' => $id])->first();

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
                return redirect()->to(base_url('lppd/edit/' . $data->lppd_id))->withInput();
            } else {

                $old_file = $this->request->getVar('old_file');
                $file = $this->request->getFile('file_name');
                // dd($newImage);
                if ($file->getError() == 4) {
                    $file_name = $old_file;
                } else {
                    $file_name = $file->getRandomName();
                    unlink('upload/lppd/' . $old_file);
                    // Image manipulation
                   $file->move(FCPATH.'upload/lppd', $file_name);
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

                $this->lppd_model->update($id,$data);
                session()->setFlashdata('message', 'Edit data success');
                return redirect()->to(base_url('/lppd'));
            }
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function delete($id)
    {
        if (!user_can('delete-lppd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data = $this->lppd_model->where(['lppd_id' => $id])->first();

        $this->lppd_model->delete($data->lppd_id);
        unlink('upload/lppd/' . $data->file_name);
        
        session()->setFlashdata('message', 'Delete data success');
        return redirect()->to(base_url('/lppd'));
    }

    public function download($id)
    {
        $data = $this->lppd_model->where(['lppd_id' => $id])->first();
        return $this->response->download(FCPATH.'upload/lppd/' . $data->file_name, null);
    }

    public function dt_lppd()
    {
        $where = ['lppd_id !=' => 0];
        $column_order   = array('', 'title', 'opd', 'year', 'description');
        $column_search  = array('title', 'opd', 'year', 'description');
        $order = array('lppd_id' => 'ASC');
        $list = $this->lppd_model->get_datatables('lppd', $column_order, $column_search, $order, $where);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $lists) {
            $no++;

            $edit = (user_can('edit-lppd')) ? '<a href="/lppd/edit/' . $lists->lppd_id . '" class="btn btn-link"><i class="fa fa-edit"></i> Edit</a>' : '';
            $delete = (user_can('delete-lppd')) ? '<a href="/lppd/delete/' . $lists->lppd_id . '" class="btn btn-link btn-delete"><i class="fa fa-trash"></i> Delete</a>' : '';

            $row    = array();
            $row['no']  = $no;
            $row['opd']  = $lists->opd;
            $row['title']  = $lists->title;
            $row['year']  = $lists->year;
            $row['download']  = '<a href="/lppd/download/'.$lists->lppd_id.'?>">Download</a></td>';
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
            "recordsTotal" => $this->lppd_model->count_all('lppd', $where),
            "recordsFiltered" => $this->lppd_model->count_filtered('lppd', $column_order, $column_search, $order, $where),
            "data" => $data,
        );

        echo json_encode($output);
    }
}
