<?php

namespace App\Models;

use CodeIgniter\Model;

class AboutModel extends Model
{
    protected $db;
    protected $builder;
    protected $table = "about";
    protected $primaryKey = "about_id";
    protected $returnType = "object";
    protected $allowedFields = ['about_id', 'history', 'geografi', 'demografi'];
}
