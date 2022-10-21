<?php

namespace App\Controllers;

use App\Models\GisbataskecamatanModel;
use App\Models\GisfacilitiesModel;
use App\Models\SettingModel;
use App\Models\CategorymenuModel;
use App\Models\GiscategoryfacilitiesModel;

class WebGis extends BaseController
{
    public $batas_kecamatan;
    public $facilities;
    public $setting_model;
    public $category_menu;
    public $cat_facilities;


    public function __construct()
    {
        $this->batas_kecamatan = new GisbataskecamatanModel();
        $this->facilities = new GisfacilitiesModel();
        $this->setting_model = new SettingModel();
        $this->category_menu = new CategorymenuModel();
        $this->cat_facilities = new GiscategoryfacilitiesModel();
    }

    public function Gis($category_name)
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Gis Medical Facility', '/WebGis/GisMedicalFacility/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['batas_kecamatan'] = $this->batas_kecamatan->findAll();
        $data['data_gis'] = $this->facilities->gt_data_gis($category_name);
        $data['setting'] = $this->setting_model->first();
        $data_icon = $this->cat_facilities->where('category_name', $category_name)->first();
        $data['icon'] = $data_icon->category_icon;

        $data['cat_facilities'] = $this->cat_facilities->where('on_menu', 'Yes')->find();
        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/gis/gis', $data);
    }

    public function GisBatasKecamatan()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Gis Batas Kecamatan', '/WebGis/GisBatasKecamatan/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['batas_kecamatan'] = $this->batas_kecamatan->findAll();
        $data['setting'] = $this->setting_model->first();

        $data['cat_facilities'] = $this->cat_facilities->where('on_menu', 'Yes')->find();
        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/gis/batas_kecamatan', $data);
    }
}
