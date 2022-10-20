<?php

namespace App\Controllers;

use App\Models\CategorymenuModel;
use App\Models\ContentmenuModel;
use App\Models\SettingModel;
use App\Models\GiscategoryfacilitiesModel;

class Page extends BaseController
{
   public $category_menu;
   public $content_menu;
   public $setting_model;
   public $cat_facilities;

   public function __construct()
   {
      $this->category_menu = new CategorymenuModel();
      $this->content_menu = new ContentmenuModel();
      $this->setting_model = new SettingModel();
      $this->cat_facilities = new GiscategoryfacilitiesModel();
   }

   public function profile($id)
   {

      $data['title'] = "Profile";

      $data_page = $this->content_menu->find($id);

      $this->breadcrumb->add('Profile', '/page/profile/' . $id);
      $this->breadcrumb->add($data_page->title, '#');
      $data['breadcrumbs'] = $this->breadcrumb->render();

      $data['cat_facilities'] = $this->cat_facilities->where('on_menu','Yes')->find();
      $data['profile'] = $this->category_menu->get_category_menu('profile');
      $data['information'] = $this->category_menu->get_category_menu('information');

      $data['content_profile'] = $data_page;

      $data['setting'] = $this->setting_model->first();

      return view('home/page/content', $data);
   }

   public function information($id)
   {

      $data['title'] = "Profile";

      $data_page = $this->content_menu->find($id);

      $this->breadcrumb->add('Information', '/page/information/' . $id);
      $this->breadcrumb->add($data_page->title, '#');
      $data['breadcrumbs'] = $this->breadcrumb->render();

      $data['cat_facilities'] = $this->cat_facilities->where('on_menu','Yes')->find();
      $data['profile'] = $this->category_menu->get_category_menu('profile');
      $data['information'] = $this->category_menu->get_category_menu('information');

      $data['content_profile'] = $data_page;

      $data['setting'] = $this->setting_model->first();

      return view('home/page/content', $data);
   }
}
