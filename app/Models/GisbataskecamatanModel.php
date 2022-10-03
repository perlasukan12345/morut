<?php

namespace App\Models;

use CodeIgniter\Model;

class GisbataskecamatanModel extends Model
{
   public $db;
   public $builder;
   protected $table = "gis_batas_kecamatan";
   protected $primaryKey = "id";
   protected $returnType = "object";
   protected $allowedFields = ['kecamatan_name', 'geojson_file', 'geojson_color'];

   public function __construct()
   {
      parent::__construct();
      $this->db = \Config\Database::connect();
   }

   public function get_datatables($table, $column_order, $column_search, $order, $data = '')
   {
      $this->builder = $this->db->table($table . ' AS bk');
      $this->builder->select('bk.id AS id, bk.kecamatan_name AS kecamatan_name');


      $i = 0;

      foreach ($column_search as $item) {
         if ($_POST['search']['value']) {

            if ($i === 0) {
               $this->builder->groupStart();
               $this->builder->like($item, $_POST['search']['value']);
            } else {
               $this->builder->orLike($item, $_POST['search']['value']);
            }

            if (count($column_search) - 1 == $i)
               $this->builder->groupEnd();
         }
         $i++;
      }

      if (isset($_POST['order'])) {
         $this->builder->orderBy($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
      } else if (isset($order)) {
         $order = $order;
         $this->builder->orderBy(key($order), $order[key($order)]);
      }

      if (isset($_POST['length']) != -1)
         $this->builder->limit($_POST['length'], $_POST['start']);
      if ($data) {
         $this->builder->where($data);
      }
      $query = $this->builder->get();
      return $query->getResult();
   }
}
