<?php

namespace App\Models;

use CodeIgniter\Model;

class GovermentModel extends Model
{
    protected $db;
    protected $builder;
    protected $table = "goverment";
    protected $primaryKey = "goverment_id";
    protected $returnType = "object";
    protected $allowedFields = ['goverment_id', 'visi_misi'];
}
