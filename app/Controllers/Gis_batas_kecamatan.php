<?php

namespace App\Controllers;


use App\Models\GisbataskecamatanModel;


class Gis_batas_kecamatan extends BaseController
{
   public $batas_kecamatan;

   public function __construct()
   {
      $this->batas_kecamatan = new GisbataskecamatanModel();
   }

   public function index()
   {

      if (!user_can('view-batas-kecamatan')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      $data['title'] = "Gis batas kecamatan";
      $this->breadcrumb->add('Dashboard', '/dashboard');
      $this->breadcrumb->add('List batas kecamatan', '/gis_batas_kecamatan');
      $data['breadcrumbs'] = $this->breadcrumb->render();

      return view('dashboard/gis/batas_kecamatan/list', $data);
   }

   public function add()
   {

      if (!user_can('create-batas-kecamatan')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      $data['title'] = "Add Gis Batas Kecamatan";

      $this->breadcrumb->add('Dashboard', '/dashboard');
      $this->breadcrumb->add('List batas kecamatan', '/gis_batas_kecamatan');
      $this->breadcrumb->add('Add', '/gis_batas_kecamatan/add');
      $data['breadcrumbs'] = $this->breadcrumb->render();

      $data['validation'] = \Config\Services::validation();

      return view('dashboard/gis/batas_kecamatan/add', $data);
   }

   public function create()
   {
      //load helper form and URL
      helper(['form', 'url']);

      if (!user_can('create-batas-kecamatan')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      if (check_token('gis_batas_kecamatan_add', $this->request->getVar('token'))) {
         $validation = [
            'geojson_file' => [
               'rules' => 'uploaded[geojson_file]',
               'errors' => [
                  'uploaded' => 'No File Selected',
               ],
            ],
            'kecamatan_name' => [
               'rules' => 'required|min_length[4]|max_length[100]',
               'errors' => [
                  'required' => 'Title field is required',
                  'min_length' => 'Title Minimum 4 Character',
                  'max_length' => 'Title Maximum 100 Character',
               ]
            ],
         ];
         if (!$this->validate($validation)) {
            return redirect()->back()->withInput();
         } else {


            $geojsonPath = $this->request->getFile('geojson_file');
            $kecamatanName = $this->request->getVar('kecamatan_name');
            $geojsonColor = $this->request->getVar('geojson_color');
            $geojsonName = $geojsonPath->getName();


            $data = [
               'kecamatan_name' => $kecamatanName,
               'geojson_file' => $geojsonName,
               'geojson_color' => $geojsonColor,
            ];

            $simpan = $this->batas_kecamatan->insert($data);
            if ($simpan) {
               $geojsonPath->move('file/geojson_batas_kecamatan');
               session()->setFlashdata('message', 'Save data success');
               return redirect()->to(base_url('/gis_batas_kecamatan'));
            }
         }
      } else {
         return redirect()->to(base_url('/dashboard/err404'));
      }
   }

   public function edit($id)
   {

      if (!user_can('edit-batas-kecamatan')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }


      $data = [
         'batas_kecamatan' => $this->batas_kecamatan->where(['id' => $id])->first()
      ];


      $data['title'] = "Edit Batas Kecamatan";

      $this->breadcrumb->add('Dashboard', '/dashboard');
      $this->breadcrumb->add('List batas kecamatan', '/gis_batas_kecamatan');
      $this->breadcrumb->add('Edit', '/gis_batas_kecamatan/edit/');
      $data['breadcrumbs'] = $this->breadcrumb->render();


      $data['validation'] = \Config\Services::validation();

      return view('dashboard/gis/batas_kecamatan/edit', $data);
   }

   public function update($id)
   {
      //load helper form and URL
      helper(['form', 'url']);

      if (!user_can('edit-batas-kecamatan')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }

      if (check_token('gis_batas_kecamatan_edit', $this->request->getVar('token'))) {
         $validation = [
            'kecamatan_name' => [
               'rules' => 'required|min_length[4]|max_length[100]',
               'errors' => [
                  'required' => 'Title field is required',
                  'min_length' => 'Title Minimum 4 Character',
                  'max_length' => 'Title Maximum 100 Character',
               ]
            ],
         ];
         if (!$this->validate($validation)) {
            return redirect()->back()->withInput();
         } else {
            $oldgeojsonPath = $this->request->getVar('geojsonOld');
            $newgeojsonPath = $this->request->getFile('geojson_file');
            $kecamatanName = $this->request->getVar('kecamatan_name');
            $geojsonColor = $this->request->getVar('geojson_color');


            if ($newgeojsonPath->getError() == 4) {
               $geojsonName = $oldgeojsonPath;
            } else {
               $geojsonName = $newgeojsonPath->getName();
               unlink('file/geojson_batas_kecamatan/' . $oldgeojsonPath);
               $newgeojsonPath->move('file/geojson_batas_kecamatan');
            }

            $data = [
               'id' => $id,
               'kecamatan_name' => $kecamatanName,
               'geojson_file' => $geojsonName,
               'geojson_color' => $geojsonColor
            ];

            $simpan = $this->batas_kecamatan->update($id, $data);
            if ($simpan) {
               session()->setFlashdata('message', 'Edit data success');
               return redirect()->to(base_url('/gis_batas_kecamatan'));
            }
         }
      } else {
         return redirect()->to(base_url('/dashboard/err404'));
      }
   }

   public function delete($id)
   {

      if (!user_can('delete-batas-kecamatan')) {
         return redirect()->to(base_url('/dashboard/invalid'));
      }


      $batas_kecamatan = $this->batas_kecamatan->where(['id' => $id])->first();
      unlink('file/geojson_batas_kecamatan/' . $batas_kecamatan->geojson_file);

      $hapus = $this->batas_kecamatan->delete($batas_kecamatan->id);

      if ($hapus) {
         session()->setFlashdata('message', 'Delete data success');
         return redirect()->to(base_url('/gis_batas_kecamatan  '));
      }
   }

   public function dt_batas_kecamatan()
   {
      $where = ['id !=' => 0];
      $column_order   = array('', 'kecamatan_name',);
      $column_search  = array('kecamatan_name');
      $order = array('id' => 'ASC');
      $list = $this->batas_kecamatan->get_datatables('gis_batas_kecamatan', $column_order, $column_search, $order, $where);
      $data = array();
      $no = $_POST['start'];
      foreach ($list as $lists) {
         $no++;
         $row    = array();
         $row['no']  = $no;
         $row['kecamatan_name']  = $lists->kecamatan_name;
         $row['option']  = '<div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                    <a href="/gis_batas_kecamatan/edit/' . $lists->id . '" class="btn btn-link"><i class="fa fa-edit"></i> Edit</a>
                </li><li>
                	<a href="/gis_batas_kecamatan/delete/' . $lists->id . '" class="btn btn-link btn-delete"><i class="fa fa-trash"></i> Delete</a>
                    </li>
                </ul>
            </div>';

         $data[] = $row;
      }

      $output = array(
         "draw" => $_POST['draw'],
         "recordsTotal" => count($data),
         "recordsFiltered" => count($data),
         "data" => $data,
      );

      echo json_encode($output);
   }
}
