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
    protected $allowedFields = ['setting_id', 'background', 'banner1', 'banner2', 'banner3', 'logo', 'facebook', 'twitter', 'instagram', 'youtube', 'address', 'contact', 'email', 'work_day', 'hour', 'quotes', 'motto'];

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }
}
