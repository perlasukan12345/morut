<?php

namespace App\Controllers;

use App\Models\AgendaModel;
use App\Models\SettingModel;
use App\Models\CategorymenuModel;

class Agenda extends BaseController
{
    public $agenda_model;
    public $setting_model;
    public $category_menu;

    public function __construct()
    {
        $this->agenda_model = new AgendaModel();
        $this->setting_model = new SettingModel();
        $this->category_menu = new CategorymenuModel();
    }

    public function kabupaten($slug = null)
    {
        if (empty($slug)) {
            $this->breadcrumb->add('Beranda', '/home/index');
            $this->breadcrumb->add('Agenda', '/agenda/kabupaten');
            $data['breadcrumbs'] = $this->breadcrumb->render();

            $data['setting'] = $this->setting_model->first();
            $data['agenda_kab'] = $this->agenda_model->gt_findAll('Kabupaten / Pemerintahan')->paginate(12, 'agenda');
            $data['pager'] = $this->agenda_model->pager;
            $data['slug'] = null;
        }else{
            $this->breadcrumb->add('Beranda', '/home/index');
            $this->breadcrumb->add('Agenda', '/agenda/kabupaten');
            $this->breadcrumb->add($slug, '/agenda/kabupaten/'.$slug);
            $data['breadcrumbs'] = $this->breadcrumb->render();

            $data['setting'] = $this->setting_model->first();
            $data['view_agenda'] = $this->agenda_model->get_dataSlug($slug);
            $data['slug'] = $slug;
        }

        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/agenda/kabupaten', $data);
    }

    public function masyarakat($slug = null)
    {
        if (empty($slug)) {
            $this->breadcrumb->add('Beranda', '/home/index');
            $this->breadcrumb->add('Agenda', '/agenda/masyarakat');
            $data['breadcrumbs'] = $this->breadcrumb->render();

            $data['setting'] = $this->setting_model->first();
            $data['agenda_mas'] = $this->agenda_model->gt_findAll('Masyarakat')->paginate(12, 'agenda');
            $data['pager'] = $this->agenda_model->pager;
            $data['slug'] = null;
        }else{
            $this->breadcrumb->add('Beranda', '/home/index');
            $this->breadcrumb->add('Agenda', '/agenda/masyarakat');
            $this->breadcrumb->add($slug, '/agenda/masyarakat/'.$slug);
            $data['breadcrumbs'] = $this->breadcrumb->render();

            $data['setting'] = $this->setting_model->first();
            $data['view_agenda'] = $this->agenda_model->get_dataSlug($slug);
            $data['slug'] = $slug;
        }

        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');
        
        return view('home/agenda/masyarakat', $data);
    }

    public function index()
    {
        if (!user_can('view-agenda')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Agenda";
        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Agenda', '/agenda/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        return view('dashboard/agenda/list', $data);
    }

    public function add()
    {
        if (!user_can('create-agenda')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data['title'] = "Add Agenda";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Agenda', '/agenda');
        $this->breadcrumb->add('Add', '/agenda/add');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['validation'] = \Config\Services::validation();

        return view('dashboard/agenda/add', $data);
    }

    public function create()
    {
        if (!user_can('create-agenda')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('agenda_add', $this->request->getVar('token'))) {
            //define validation
            $validation = [
                'title' => [
                    'rules' => 'required|min_length[1]|max_length[200]',
                    'errors' => [
                        'required' => 'Title field is required',
                        'min_length' => 'Title Minimum 1 Character',
                        'max_length' => 'Title Maximum 200 Character',
                    ]
                ],
                'category' => [
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'Category field is required!',
                    ]
                ],
                'agenda' => [
                    'rules'  => 'required|min_length[8]',
                    'errors' => [
                        'required' => 'Agenda field is required',
                        'min_length' => 'Agenda Minimum 8 Character',
                    ]
                ],
            ];

            if (!$this->validate($validation)) {
                return redirect()->back()->withInput();
            } else {
                $title = $this->request->getVar('title');
                $slug = url_title($title, '-', TRUE);
                $agenda = $this->request->getVar('agenda');
                $category = $this->request->getVar('category');

                $data = [
                    'category' => $category,
                    'title' => $title,
                    'slug' => $slug,
                    'agenda' => $agenda,
                ];

                $simpan = $this->agenda_model->insert($data);
                if ($simpan) {
                    session()->setFlashdata('message', 'Save data success');
                    return redirect()->to(base_url('/agenda'));
                }
            }
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function edit($id)
    {
        if (!user_can('edit-agenda')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $data = [
            'post' => $this->agenda_model->find($id)
        ];

        $data['title'] = "Edit Agenda";

        $this->breadcrumb->add('Dashboard', '/dashboard');
        $this->breadcrumb->add('List Agenda', '/agenda');
        $this->breadcrumb->add('Edit', '/agenda/edit/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['validation'] = \Config\Services::validation();

        return view('dashboard/agenda/edit', $data);
    }

    public function update($id)
    {
        if (!user_can('edit-agenda')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        //load helper form and URL
        helper(['form', 'url']);

        if (check_token('agenda_edit', $this->request->getVar('token'))) {

            $validation = [
                'title' => [
                    'rules' => 'required|min_length[1]|max_length[200]',
                    'errors' => [
                        'required' => 'Title field is required',
                        'min_length' => 'Title Minimum 1 Character',
                        'max_length' => 'Title Maximum 200 Character',
                    ]
                ],
                'category' => [
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'Category field is required!',
                    ]
                ],
                'agenda' => [
                    'rules'  => 'required|min_length[1]',
                    'errors' => [
                        'required' => 'Agenda field is required',
                        'min_length' => 'Agenda Minimum 1 Character',
                    ]
                ],
            ];

            if (!$this->validate($validation)) {
                return redirect()->to(base_url('agenda/edit/' . $id))->withInput();
            } else {
                $title = $this->request->getVar('title');
                $slug = url_title($title, '-', TRUE);
                $agenda = $this->request->getVar('agenda');
                $category = $this->request->getVar('category');

                $data = [
                    'category' => $category,
                    'title' => $title,
                    'slug' => $slug,
                    'agenda' => $agenda,
                ];

                $this->agenda_model->update($id,$data);
                session()->setFlashdata('message', 'Edit data success');
                return redirect()->to(base_url('/agenda'));
            }
        } else {
            return redirect()->to(base_url('/dashboard/err404'));
        }
    }

    public function delete($id)
    {
        if (!user_can('delete-agenda')) {
            return redirect()->to(base_url('/dashboard/invalid'));
        }

        $this->agenda_model->delete($id);
        session()->setFlashdata('message', 'Delete data success');
        return redirect()->to(base_url('/agenda'));
    }

    public function dt_agenda()
    {
        $where = ['agenda_id !=' => 0];
        $column_order   = array('', 'title', 'category', 'agenda');
        $column_search  = array('title', 'category', 'agenda');
        $order = array('agenda_id' => 'ASC');
        $list = $this->agenda_model->get_datatables('agenda', $column_order, $column_search, $order, $where);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $lists) {
            $no++;

            $edit = (user_can('edit-agenda')) ? '<a href="/agenda/edit/' . $lists->agenda_id . '" class="btn btn-link"><i class="fa fa-edit"></i> Edit</a>' : '';
            $delete = (user_can('delete-news')) ? '<a href="/agenda/delete/' . $lists->agenda_id . '" class="btn btn-link btn-delete"><i class="fa fa-trash"></i> Delete</a>' : '';

            $row    = array();
            $row['no']  = $no;
            $row['category']  = $lists->category;
            $row['title']  = $lists->title;
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
            "recordsTotal" => $this->agenda_model->count_all('agenda', $where),
            "recordsFiltered" => $this->agenda_model->count_filtered('agenda', $column_order, $column_search, $order, $where),
            "data" => $data,
        );

        echo json_encode($output);
    }
}
