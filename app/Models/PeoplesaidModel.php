<?php

namespace App\Models;

use CodeIgniter\Model;

class PeoplesaidModel extends Model
{
    protected $db;
    protected $builder;
    protected $table = "people_said";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $allowedFields = ['id', 'name', 'image', 'subject', 'message', 'active'];


    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    public function gt_findAll()
    {
        $this->builder = $this->db->table($this->table . ' AS n');
        $this->builder->select('n.*');
        $this->builder->where('active',1);
       
        return $this;
    }

    public function gt_findLimit($lmt)
    {
        $this->builder = $this->db->table($this->table . ' AS n');
        $this->builder->select('n.*');
        $this->builder->where('active',1);
       	$this->builder->limit($lmt);
        $this->builder->orderBy('n.id','DESC');

        $query = $this->builder->get();
        return $query->getResult();
    }
}
