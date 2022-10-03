<?php

namespace App\Controllers;

use App\Models\RpjmdModel;
use App\Models\OpdModel;

class Rpjmd extends BaseController
{
    public $opd;
    public $rpjmd_model;

    public function __construct()
    {
        $this->opd = new OpdModel();
        $this->rpjmd_model = new RpjmdModel();
    }

    public function index()
    {
        if (!user_can('view-rpjmd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "RPJMD";
        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Rpjmd', '/rpjmd');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        return view('dashboard/rpjmd/list', $data);
    }

    public function add()
    {
        if (!user_can('create-rpjmd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Add RPJMD";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Rpjmd', '/rpjmd');
        $this->breadcrumb->add('Add', '/rpjmd/add');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['opd'] = $this->opd->findAll();
        $data['validation'] = \Config\Services::validation();

        return view('dashboard/rpjmd/add', $data);
    }

    public function create()
    {
        if (!user_can('create-rpjmd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('rpjmd_add', $this->request->getVar('token'))) {
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
                    'rules' => 'required|min_length[8]|max_length[100]',
                    'errors' => [
                        'required' => 'Title field is required',
                        'min_length' => 'Title Minimum 8 Character',
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
                    'rules'  => 'required|min_length[8]',
                    'errors' => [
                        'required' => 'Description field is required',
                        'min_length' => 'Description Minimum 8 Character',
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

                $simpan = $this->rpjmd_model->insert($data);
                if ($simpan) {
                    // File manipulation
                     $file->move(FCPATH.'upload/rpjmd', $file_name);
                }
            }

            return redirect()->to(base_url('/rpjmd'));
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function edit($id)
    {
        if (!user_can('edit-rpjmd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data = [
            'post' => $this->rpjmd_model->find($id)
        ];

        $data['title'] = "Edit Rpjmd";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Rpjmd', '/rpjmd');
        $this->breadcrumb->add('Edit', '/rpjmd/edit/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['opd'] = $this->opd->findAll();
        $data['validation'] = \Config\Services::validation();

        return view('dashboard/rpjmd/edit', $data);
    }

    public function update($id)
    {
        if (!user_can('edit-rpjmd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('rpjmd_edit', $this->request->getVar('token'))) {

            $data = $this->rpjmd_model->where(['rpjmd_id' => $id])->first();

             $validation = [
                'file_name' => [
                    'rules' => 'max_size[file_name,2024]|mime_in[file_name,application/pdf]',
                    'errors' => [
                        'max_size' => 'File size Maximum 2 MB',
                        'mime_in' => 'File type must be PDF',
                    ],
                ],
                'title' => [
                    'rules' => 'required|min_length[8]|max_length[100]',
                    'errors' => [
                        'required' => 'Title field is required',
                        'min_length' => 'Title Minimum 8 Character',
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
                    'rules'  => 'required|min_length[8]',
                    'errors' => [
                        'required' => 'Description field is required',
                        'min_length' => 'Description Minimum 8 Character',
                    ]
                ],
            ];

            if (!$this->validate($validation)) {
                return redirect()->to(base_url('rpjmd/edit/' . $data->rpjmd_id))->withInput();
            } else {

                $old_file = $this->request->getVar('old_file');
                $file = $this->request->getFile('file_name');
                // dd($newImage);
                if ($file->getError() == 4) {
                    $file_name = $old_file;
                } else {
                    $file_name = $file->getRandomName();
                    unlink('upload/rpjmd/' . $old_file);
                    // Image manipulation
                   $file->move(FCPATH.'upload/rpjmd', $file_name);
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

                $this->rpjmd_model->update($id,$data);
                session()->setFlashdata('message', 'Edit data success');
                return redirect()->to(base_url('/rpjmd'));
            }
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function delete($id)
    {
        if (!user_can('delete-rpjmd')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data = $this->rpjmd_model->where(['rpjmd_id' => $id])->first();

        $this->rpjmd_model->delete($data->rpjmd_id);
        unlink('upload/rpjmd/' . $data->file_name);
        
        session()->setFlashdata('message', 'Delete data success');
        return redirect()->to(base_url('/rpjmd'));
    }

    public function download($id)
    {
        $data = $this->rpjmd_model->where(['rpjmd_id' => $id])->first();
        return $this->response->download(FCPATH.'upload/rpjmd/' . $data->file_name, null);
    }

    public function dt_rpjmd()
    {
        $where = ['rpjmd_id !=' => 0];
        $column_order   = array('', 'title', 'opd', 'year', 'description');
        $column_search  = array('title', 'opd', 'year', 'description');
        $order = array('rpjmd_id' => 'ASC');
        $list = $this->rpjmd_model->get_datatables('rpjmd', $column_order, $column_search, $order, $where);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $lists) {
            $no++;

            $edit = (user_can('edit-rpjmd')) ? '<a href="/rpjmd/edit/' . $lists->rpjmd_id . '" class="btn btn-link"><i class="fa fa-edit"></i> Edit</a>' : '';
            $delete = (user_can('delete-rpjmd')) ? '<a href="/rpjmd/delete/' . $lists->rpjmd_id . '" class="btn btn-link btn-delete"><i class="fa fa-trash"></i> Delete</a>' : '';

            $row    = array();
            $row['no']  = $no;
            $row['opd']  = $lists->opd;
            $row['title']  = $lists->title;
            $row['year']  = $lists->year;
            $row['download']  = '<a href="/rpjmd/download/'.$lists->rpjmd_id.'?>">Download</a>';
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
            "recordsTotal" => $this->rpjmd_model->count_all('rpjmd', $where),
            "recordsFiltered" => $this->rpjmd_model->count_filtered('rpjmd', $column_order, $column_search, $order, $where),
            "data" => $data,
        );

        echo json_encode($output);
    }
}
