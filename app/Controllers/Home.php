<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\NewsModel;
use App\Models\GalleryModel;
use App\Models\CategorygalleryModel;
use App\Models\CategorynewsModel;
use App\Models\GisbataskecamatanModel;
use App\Models\GisfacilitiesModel;
use App\Models\SettingModel;
use App\Models\PeoplesaidModel;
use App\Models\OpdModel;
use App\Models\AgendaModel;
use App\Models\CategorymenuModel;
use App\Models\CategoryopdModel;

class Home extends BaseController
{
    public $user_model;
    public $news_model;
    public $gallery_model;
    public $category_gallery;
    public $category_news;
    public $batas_kecamatan;
    public $facilities;
    public $setting_model;
    public $peoplesaid_model;
    public $opd_model;
    public $agenda_model;
    public $category_menu;
    public $category_opd;


    public function __construct()
    {
        $this->user_model = new UserModel();
        $this->category_news = new CategorynewsModel();
        $this->news_model = new NewsModel();
        $this->category_gallery = new CategorygalleryModel();
        $this->gallery_model = new GalleryModel();
        $this->batas_kecamatan = new GisbataskecamatanModel();
        $this->facilities = new GisfacilitiesModel();
        $this->setting_model = new SettingModel();
        $this->peoplesaid_model = new PeoplesaidModel();
        $this->opd_model = new OpdModel();
        $this->agenda_model = new AgendaModel();
        $this->category_menu = new CategorymenuModel();
        $this->category_opd = new CategoryopdModel();
    }

    public function index()
    {
        $data['data_news'] = $this->news_model->gt_dataLimit(3);
        $data['data_gallery_foto'] = $this->gallery_model->gt_dataLimitFoto(12);
        $data['category'] = $this->category_gallery->findAll();
        $data['data_gallery_video'] = $this->gallery_model->gt_dataLimitVideo(6);
        $data['people_said'] = $this->peoplesaid_model->gt_findLimit(12);
        $data['agenda_kab'] = $this->agenda_model->gt_findLimit(3,'Kabupaten / Pemerintahan');
        $data['agenda_mas'] = $this->agenda_model->gt_findLimit(3,'Masyarakat');
        $data['setting'] = $this->setting_model->first();

        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        $data['left'] = $this->category_opd->where('(category_opd_id % 2)',1)->find();
        $data['right'] = $this->category_opd->where('(category_opd_id % 2)',0)->find();

        $data['validation'] = \Config\Services::validation();
        return view('home/index', $data);
    }

    public function news($slug = null)
    {
        if (empty($slug)) {
            $this->breadcrumb->add('Beranda', '/home/index');
            $this->breadcrumb->add('Berita', '/home/news');
            $data['breadcrumbs'] = $this->breadcrumb->render();

            $data['data_news'] = $this->news_model->gt_findAll()->paginate(5, 'p_news');
            $data['pager'] = $this->news_model->pager;
            $data['setting'] = $this->setting_model->first();

            $data['slug'] = null;
        } else {
            $this->breadcrumb->add('Beranda', '/home/index');
            $this->breadcrumb->add('Berita', '/home/news');
            $this->breadcrumb->add('Baca Berita', '/home/news/' . $slug);
            $data['breadcrumbs'] = $this->breadcrumb->render();

            $data['view_news'] = $this->news_model->get_dataSlug($slug);
            $data['setting'] = $this->setting_model->first();
            $data['slug'] = $slug;
        }

        $data['news_limit'] = $this->news_model->gt_dataLimit(3);
        $data['cat_news'] = $this->category_news->findAll();
        $data['archive'] = $this->news_model->dataArchive();

        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/news', $data);
    }

    public function services($id)
    {
        $opd = $this->opd_model->where('category_opd_id',$id)->find();
        
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Pelayanan Daerah', '/home/services/'.$id);
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['setting'] = $this->setting_model->first();
        $data['opd'] = $opd;
        $data['opd'] = $opd;

        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/services', $data);
    }

    public function category($cat){
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Berita', '/home/news');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['slug'] = null;
        $data['archive'] = $this->news_model->dataArchive();
        $data['data_news'] = $this->news_model->gt_dataCategory($cat)->paginate(1, 'p_news');
        $data['pager'] = $this->news_model->pager;
        $data['news_limit'] = $this->news_model->gt_dataLimit(3);
        $data['cat_news'] = $this->category_news->findAll();
        $data['setting'] = $this->setting_model->first();

        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/news', $data);
    }

     public function archive($arc){
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Berita', '/home/news');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['slug'] = null;
        $data['archive'] = $this->news_model->dataArchive();
        $data['data_news'] = $this->news_model->gt_dataArchive($arc)->paginate(1, 'p_news');
        $data['pager'] = $this->news_model->pager;
        $data['news_limit'] = $this->news_model->gt_dataLimit(3);
        $data['cat_news'] = $this->category_news->findAll();
        $data['setting'] = $this->setting_model->first();

        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/news', $data);
    }

    public function galleryfoto()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Galeri Gambar', '/home/galeryfoto');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['gallery'] = $this->gallery_model->gt_dataFoto();
        $data['category'] = $this->category_gallery->findAll();
        $data['setting'] = $this->setting_model->first();

        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/media/galleryfoto', $data);
    }

    public function galleryvideo()
    {
        $this->breadcrumb->add('Beranda', '/home/index');
        $this->breadcrumb->add('Galeri Video', '/media/galeryvideo');
        $data['breadcrumbs'] = $this->breadcrumb->render();

        $data['gallery'] = $this->gallery_model->gt_dataVideo();
        $data['setting'] = $this->setting_model->first();

        $data['profile'] = $this->category_menu->get_category_menu('profile');
        $data['information'] = $this->category_menu->get_category_menu('information');

        return view('home/media/galleryvideo', $data);
    }

    public function login()
    {
        return view('auth/login');
    }

    public function signup()
    {
        if (check_token('login', $this->request->getVar('token'))) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $dataUser = $this->user_model->where('username', $username)->first();

            if ($dataUser) {
                if (password_verify($password, $dataUser->password)) {
                    session()->set([
                        'username' => $dataUser->username,
                        'name' => $dataUser->name,
                        'logged_in' => TRUE,
                    ]);

                    return redirect()->to(base_url('/dashboard'));
                } else {
                    session()->setFlashdata('error', 'Password not corect');
                    return redirect()->to(base_url('/home/login'));
                }
            } else {
                session()->setFlashdata('error', 'Username not corect');
                return redirect()->to(base_url('/home/login'));
            }
        } else {
            session()->setFlashdata('error', 'Ooops, You can not login');
            return redirect()->to(base_url('/home/login'));
        }
    }

    public function logout()
    {
        $id = session()->get('username');
        $this->user_model->set('is_active', 0)->where('username', $id)->update();
        session()->destroy();
        return redirect()->to('/home/login');
    }
}
