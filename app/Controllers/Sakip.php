<?php

namespace App\Controllers;

use App\Models\SakipModel;
use App\Models\OpdModel;

class Sakip extends BaseController
{
    public $opd;
    public $sakip_model;

    public function __construct()
    {
        $this->opd = new OpdModel();
        $this->sakip_model = new SakipModel();
    }

    public function index()
    {
        if (!user_can('view-sakip')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "SAKIP";
        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Sakip', '/sakip');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        return view('dashboard/sakip/list', $data);
    }

    public function add()
    {
        if (!user_can('create-sakip')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Add SAKIP";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Sakip', '/sakip');
        $this->breadcrumb->add('Add', '/sakip/add');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['opd'] = $this->opd->findAll();
        $data['validation'] = \Config\Services::validation();

        return view('dashboard/sakip/add', $data);
    }

    public function create()
    {
        if (!user_can('create-sakip')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('sakip_add', $this->request->getVar('token'))) {
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

                $simpan = $this->sakip_model->insert($data);
                if ($simpan) {
                    // File manipulation
                     $file->move(FCPATH.'upload/sakip', $file_name);
                }
            }

            return redirect()->to(base_url('/sakip'));
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function edit($id)
    {
        if (!user_can('edit-sakip')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data = [
            'post' => $this->sakip_model->find($id)
        ];

        $data['title'] = "Edit SAKIP";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Sakip', '/sakip');
        $this->breadcrumb->add('Edit', '/sakip/edit/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['opd'] = $this->opd->findAll();
        $data['validation'] = \Config\Services::validation();

        return view('dashboard/sakip/edit', $data);
    }

    public function update($id)
    {
        if (!user_can('edit-sakip')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('sakip_edit', $this->request->getVar('token'))) {

            $data = $this->sakip_model->where(['sakip_id' => $id])->first();

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
                return redirect()->to(base_url('sakip/edit/' . $data->sakip_id))->withInput();
            } else {

                $old_file = $this->request->getVar('old_file');
                $file = $this->request->getFile('file_name');
                // dd($newImage);
                if ($file->getError() == 4) {
                    $file_name = $old_file;
                } else {
                    $file_name = $file->getRandomName();
                    unlink('upload/sakip/' . $old_file);
                    // Image manipulation
                   $file->move(FCPATH.'upload/sakip', $file_name);
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

                $this->sakip_model->update($id,$data);
                session()->setFlashdata('message', 'Edit data success');
                return redirect()->to(base_url('/sakip'));
            }
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function delete($id)
    {
        if (!user_can('delete-sakip')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data = $this->sakip_model->where(['sakip_id' => $id])->first();

        $this->sakip_model->delete($data->sakip_id);
        unlink('upload/sakip/' . $data->file_name);
        
        session()->setFlashdata('message', 'Delete data success');
        return redirect()->to(base_url('/sakip'));
    }

    public function download($id)
    {
        $data = $this->sakip_model->where(['sakip_id' => $id])->first();
        return $this->response->download(FCPATH.'upload/sakip/' . $data->file_name, null);
    }

    public function dt_sakip()
    {
        $where = ['sakip_id !=' => 0];
        $column_order   = array('', 'title', 'opd', 'year', 'description');
        $column_search  = array('title', 'opd', 'year', 'description');
        $order = array('sakip_id' => 'ASC');
        $list = $this->sakip_model->get_datatables('sakip', $column_order, $column_search, $order, $where);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $lists) {
            $no++;

            $edit = (user_can('edit-sakip')) ? '<a href="/sakip/edit/' . $lists->sakip_id . '" class="btn btn-link"><i class="fa fa-edit"></i> Edit</a>' : '';
            $delete = (user_can('delete-sakip')) ? '<a href="/sakip/delete/' . $lists->sakip_id . '" class="btn btn-link btn-delete"><i class="fa fa-trash"></i> Delete</a>' : '';

            $row    = array();
            $row['no']  = $no;
            $row['opd']  = $lists->opd;
            $row['title']  = $lists->title;
            $row['year']  = $lists->year;
            $row['download']  = '<a href="/sakip/download/'.$lists->sakip_id.'?>">Download</a></td>';
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
            "recordsTotal" => $this->sakip_model->count_all('sakip', $where),
            "recordsFiltered" => $this->sakip_model->count_filtered('sakip', $column_order, $column_search, $order, $where),
            "data" => $data,
        );

        echo json_encode($output);
    }
}
