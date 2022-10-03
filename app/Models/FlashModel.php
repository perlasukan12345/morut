<?php

namespace App\Models;

use CodeIgniter\Model;

class FlashModel extends Model
{
    protected $db;
    protected $builder;
    protected $table = "flash_screen";
    protected $primaryKey = "flash_id";
    protected $returnType = "object";
    protected $allowedFields = ['flash_id', 'name', 'position', 'job_history', 'education_background', 'organization_history', 'address', 'telephone', 'img'];

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    public function gt_dataPosition($position)
    {
        $this->builder = $this->db->table($this->table);
        $this->builder->select('*');
        $this->builder->where('position', $position);
       
        $query = $this->builder->get();
        return $query->getRow();
    }
}
