<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingModel extends Model
{
    protected $db;
    protected $builder;
    protected $table = "setting";
    protected $primaryKey = "setting_id";
    protected $returnType = "object";
    protected $allowedFields = ['setting_id', 'background', 'banner1', 'banner2', 'banner3', 'logo', 'facebook', 'twitter', 'instagram', 'youtube', 'address', 'contact', 'email', 'work_day', 'hour', 'quotes', 'motto', 'title1', 'url1', 'url_tag1', 'description1', 'title2', 'url2', 'url_tag2', 'description2', 'title3', 'url3', 'url_tag3', 'description3'];

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }
}
