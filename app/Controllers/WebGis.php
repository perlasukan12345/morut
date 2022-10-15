<?php

namespace App\Controllers;

use App\Models\GisbataskecamatanModel;
use App\Models\GisfacilitiesModel;
use App\Models\SettingModel;
use App\Models\CategorymenuModel;

class WebGis extends BaseController
{
    public $batas_kecamatan;
    public $facilities;
    public $setting_model;
    public $category_menu;


    public function __construct()
    {
        $this->batas_kecamatan = new GisbataskecamatanModel();
        $this->facilities = new GisfacilitiesModel();
        $this->setting_model = new SettingModel();
        $this->category_menu = new CategorymenuModel();
    }

    public function GisMedicalFacility()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Gis Medical Facility', '/WebGis/GisMedicalFacility/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['batas_kecamatan'] = $this->batas_kecamatan->findAll();
        $data['medical_facility'] = $this->facilities->gt_medical_facility();
        $data['setting'] = $this->setting_model->first();

        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/gis/medical_facility', $data);
    }

    public function GisEducationalFacilities()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Gis Educational Facilities', '/WebGis/GisEducationalFacilities/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['batas_kecamatan'] = $this->batas_kecamatan->findAll();
        $data['educational_facilities'] = $this->facilities->gt_educational_facilities();
        $data['setting'] = $this->setting_model->first();

        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/gis/educational_facilities', $data);
    }

    public function GisHotel()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Gis Hotel', '/WebGis/GisHotel/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['batas_kecamatan'] = $this->batas_kecamatan->findAll();
        $data['hotel_facility'] = $this->facilities->gt_hotel_facility();
        $data['setting'] = $this->setting_model->first();

        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/gis/hotel_facility', $data);
    }
    public function GisCulinaryFacilities()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Gis Culinary', '/WebGis/GisCulinaryFacilities/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['batas_kecamatan'] = $this->batas_kecamatan->findAll();
        $data['culinary_facilities'] = $this->facilities->gt_culinary_facilities();
        $data['setting'] = $this->setting_model->first();

        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/gis/culinary_facilities', $data);
    }
    public function GisWisata()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Gis Culinary', '/WebGis/GisCulinaryFacilities/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['batas_kecamatan'] = $this->batas_kecamatan->findAll();
        $data['wisata'] = $this->facilities->gt_wisata();
        $data['setting'] = $this->setting_model->first();

        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/gis/wisata', $data);
    }

    public function GisPublicService()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Gis Culinary', '/WebGis/GisPublicService/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['batas_kecamatan'] = $this->batas_kecamatan->findAll();
        $data['public_service'] = $this->facilities->gt_public_service();
        $data['setting'] = $this->setting_model->first();

        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/gis/public_service', $data);
    }
    public function GisMining()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Gis Mining', '/WebGis/GisMining/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['batas_kecamatan'] = $this->batas_kecamatan->findAll();
        $data['mining'] = $this->facilities->gt_mining();
        $data['setting'] = $this->setting_model->first();

        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/gis/mining', $data);
    }
    public function GisIndustry()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Gis Industry', '/WebGis/GisIndustry/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['batas_kecamatan'] = $this->batas_kecamatan->findAll();
        $data['industry'] = $this->facilities->gt_industry();
        $data['setting'] = $this->setting_model->first();

        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/gis/industry', $data);
    }

    public function GisBatasKecamatan()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Gis Batas Kecamatan', '/WebGis/GisBatasKecamatan/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['batas_kecamatan'] = $this->batas_kecamatan->findAll();
        $data['setting'] = $this->setting_model->first();

        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/gis/batas_kecamatan', $data);
    }
}
