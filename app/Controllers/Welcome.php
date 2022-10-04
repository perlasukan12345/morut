<?php 
namespace App\Controllers;

use App\Models\GisbataskecamatanModel;
use App\Models\GisfacilitiesModel;
use App\Models\FlashModel;
use App\Models\SettingModel;
use App\Models\OpdModel;

class Welcome extends BaseController
{
	public $batas_kecamatan;
    public $facilities;
    public $flash_model;
    public $setting_model;
    public $opd_model;

    public function __construct()
    {
        $this->batas_kecamatan = new GisbataskecamatanModel();
        $this->facilities = new GisfacilitiesModel();
        $this->flash_model = new FlashModel();
        $this->setting_model = new SettingModel();
        $this->opd_model = new OpdModel();
    }

    public function index()
    {
        $data['batas_kecamatan'] = $this->batas_kecamatan->findAll();
        $data['gis'] = $this->facilities->gt_dataAll();
        $data['medical_facility'] = $this->facilities->gt_medical_facility();
        $data['bupati'] = $this->flash_model->gt_dataPosition('Bupati Morowali Utara');
        $data['wabup'] = $this->flash_model->gt_dataPosition('Wakil Bupati Morowali Utara');
        $data['opd'] = $this->opd_model->findAll();
        $data['setting'] = $this->setting_model->first();

        return view('welcome_message', $data);
    }
}
 ?>