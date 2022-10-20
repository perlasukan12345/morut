<?php

namespace App\Controllers;

use App\Models\RpjmdModel;
use App\Models\RpjpdModel;
use App\Models\RkpdModel;
use App\Models\LkpjModel;
use App\Models\SakipModel;
use App\Models\LppdModel;
use App\Models\SettingModel;
use App\Models\CategorymenuModel;
use App\Models\GiscategoryfacilitiesModel;
use App\Models\PriorityprogramModel;

class Info extends BaseController
{
    public $rpjmd_model;
    public $rpjpd_model;
    public $rkpd_model;
    public $lkpj_model;
    public $sakip_model;
    public $lppd_model;
    public $setting_model;
    public $category_menu;
    public $cat_facilities;
    public $priority_program;

    public function __construct()
    {
        $this->rpjmd_model = new RpjmdModel();
        $this->rpjpd_model = new RpjpdModel();
        $this->rkpd_model = new RkpdModel();
        $this->lkpj_model = new LkpjModel();
        $this->sakip_model = new SakipModel();
        $this->lppd_model = new LppdModel();
        $this->setting_model = new SettingModel();
        $this->category_menu = new CategorymenuModel();
        $this->cat_facilities = new GiscategoryfacilitiesModel();
        $this->priority_program = new PriorityprogramModel();
    }

    public function program($slug = null)
    {
        if (empty($slug)) {
            $this->breadcrumb->add('Beranda', '/home/index');
            $this->breadcrumb->add('Priority Program', '/home/program');
            $data['breadcrumbs'] = $this->breadcrumb->render();
            $data['program'] = $this->priority_program->findAll();

            $data['slug'] = null;
        } else {
            $this->breadcrumb->add('Beranda', '/home/index');
            $this->breadcrumb->add('Priority Program', '/home/program');
            $data['breadcrumbs'] = $this->breadcrumb->render();
            $data['vprogram'] = $this->priority_program->get_dataSlug($slug);
            $data['slug'] = $slug;
        }

        $data['setting'] = $this->setting_model->first();
        $data['cat_facilities'] = $this->cat_facilities->where('on_menu','Yes')->find();
        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');


        return view('home/info/p_prioritas', $data);
    }
    
    public function rpjmd()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Rpjmd', '/info/rpjmd/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['data'] = $this->rpjmd_model->gt_Alldata();
        $data['setting'] = $this->setting_model->first();

        $data['cat_facilities'] = $this->cat_facilities->where('on_menu','Yes')->find();
        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/info/rpjmd', $data);
    }

    public function d_rpjmd($id)
    {
        $data = $this->rpjmd_model->where(['rpjmd_id' => $id])->first();
        return $this->response->download(FCPATH . 'upload/rpjmd/' . $data->file_name, null);
    }

    public function rpjpd()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Rpjpd', '/info/rpjpd/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['cat_facilities'] = $this->cat_facilities->where('on_menu','Yes')->find();
        $data['data'] = $this->rpjpd_model->gt_Alldata();
        $data['setting'] = $this->setting_model->first();

        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/info/rpjpd', $data);
    }

    public function d_rpjpd($id)
    {
        $data = $this->rpjpd_model->where(['rpjpd_id' => $id])->first();
        return $this->response->download(FCPATH . 'upload/rpjpd/' . $data->file_name, null);
    }

    public function rkpd()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Rkpd', '/info/rkpd/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['data'] = $this->rkpd_model->gt_Alldata();
        $data['setting'] = $this->setting_model->first();

        $data['cat_facilities'] = $this->cat_facilities->where('on_menu','Yes')->find();
        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/info/rkpd', $data);
    }

    public function d_rkpd($id)
    {
        $data = $this->rkpd_model->where(['rkpd_id' => $id])->first();
        return $this->response->download(FCPATH . 'upload/rkpd/' . $data->file_name, null);
    }

    public function lkpj()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Lkpj', '/info/lkpj/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['data'] = $this->lkpj_model->gt_Alldata();
        $data['setting'] = $this->setting_model->first();

        $data['cat_facilities'] = $this->cat_facilities->where('on_menu','Yes')->find();
        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/info/lkpj', $data);
    }

    public function d_lkpj($id)
    {
        $data = $this->lkpj_model->where(['lkpj_id' => $id])->first();
        return $this->response->download(FCPATH . 'upload/lkpj/' . $data->file_name, null);
    }

    public function sakip()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Sakip', '/info/sakip/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['data'] = $this->sakip_model->gt_Alldata();
        $data['setting'] = $this->setting_model->first();

        $data['cat_facilities'] = $this->cat_facilities->where('on_menu','Yes')->find();
        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/info/sakip', $data);
    }

    public function d_sakip($id)
    {
        $data = $this->sakip_model->where(['sakip_id' => $id])->first();
        return $this->response->download(FCPATH . 'upload/sakip/' . $data->file_name, null);
    }

    public function lppd()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Lppd', '/info/lppd/');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['data'] = $this->lppd_model->gt_Alldata();
        $data['setting'] = $this->setting_model->first();

        $data['cat_facilities'] = $this->cat_facilities->where('on_menu','Yes')->find();
        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/info/lppd', $data);
    }

    public function d_lppd($id)
    {
        $data = $this->lppd_model->where(['lppd_id' => $id])->first();
        return $this->response->download(FCPATH . 'upload/lppd/' . $data->file_name, null);
    }
}
