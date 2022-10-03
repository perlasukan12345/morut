<?php

namespace App\Models;

use CodeIgniter\Model;

class GisfacilitiesModel extends Model
{
   public $db;
   public $builder;
   protected $table = "gis_facilities";
   protected $primaryKey = "facilities_id";
   protected $returnType = "object";
   protected $allowedFields = ['category_facilities_id', 'title', 'image_name', 'description', 'latitude', 'longitude'];

   public function __construct()
   {
      parent::__construct();
      $this->db = \Config\Database::connect();
   }

   protected function _get_datatables_query($table, $column_order, $column_search, $order)
   {
      $this->builder = $this->db->table($table . ' AS f');
      $this->builder->select('f.facilities_id AS facilities_id, f.title AS title, cf.category_name AS category_name');
      $this->builder->join('gis_category_facilities AS cf', 'cf.category_facilities_id = f.category_facilities_id', 'left');

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
   }

   public function get_datatables($table, $column_order, $column_search, $order, $data = '')
   {
      $this->_get_datatables_query($table, $column_order, $column_search, $order);
      if ($_POST['length'] != -1) {
         $this->builder->limit($_POST['length'], $_POST['start']);
      }
      if ($data) {
         $this->builder->where($data);
      }

      $query = $this->builder->get();
      return $query->getResult();
   }

   public function count_filtered($table, $column_order, $column_search, $order, $data = '')
   {
      $this->_get_datatables_query($table, $column_order, $column_search, $order);
      if ($data) {
         $this->builder->where($data);
      }
      $this->builder->get();
      return $this->builder->countAll();
   }

   public function count_all($table, $data = '')
   {
      if ($data) {
         $this->builder->where($data);
      }

      $this->builder->from($table);

      return $this->builder->countAll();
   }

   public function gt_dataAll()
   {
      $this->builder = $this->db->table($this->table . ' AS f');
      $this->builder->select('f.facilities_id  AS facilities_id , f.title AS title, f.image_name as image_name ,f.latitude AS latitude, f.longitude AS longitude, f.description as description, cf.category_name AS category_name, cf.category_facilities_id AS category_facilities_id ');
      $this->builder->join('gis_category_facilities as cf', 'cf.category_facilities_id = f.category_facilities_id', 'left');

      $query = $this->builder->get();
      return $query->getResult();
   }

   public function gt_dataId($id)
   {
      $this->builder = $this->db->table($this->table . ' AS f');
      $this->builder->select('f.facilities_id  AS facilities_id , f.title AS title, f.image_name as image_name ,f.latitude AS latitude, f.longitude AS longitude, f.description as description, cf.category_name AS category_name, cf.category_facilities_id AS category_facilities_id ');
      $this->builder->where('facilities_id ', $id);
      $this->builder->join('gis_category_facilities as cf', 'cf.category_facilities_id = f.category_facilities_id', 'left');

      $query = $this->builder->get();
      return $query->getRow();
   }

   public function gt_medical_facility()
   {
      $this->builder = $this->db->table($this->table . ' AS f');
      $this->builder->select('f.facilities_id  AS facilities_id , f.title AS title, f.image_name as image_name ,f.latitude AS latitude, f.longitude AS longitude, f.description as description, cf.category_name AS category_name, cf.category_facilities_id AS category_facilities_id ');
      $this->builder->where('category_name ', 'kesehatan');
      $this->builder->join('gis_category_facilities as cf', 'cf.category_facilities_id = f.category_facilities_id', 'left');

      $query = $this->builder->get();
      return $query->getResult();
   }

   public function gt_educational_facilities()
   {
      $this->builder = $this->db->table($this->table . ' AS f');
      $this->builder->select('f.facilities_id  AS facilities_id , f.title AS title, f.image_name as image_name ,f.latitude AS latitude, f.longitude AS longitude, f.description as description, cf.category_name AS category_name, cf.category_facilities_id AS category_facilities_id ');
      $this->builder->where('category_name ', 'pendidikan');
      $this->builder->join('gis_category_facilities as cf', 'cf.category_facilities_id = f.category_facilities_id', 'left');

      $query = $this->builder->get();
      return $query->getResult();
   }
   public function gt_hotel_facility()
   {
      $this->builder = $this->db->table($this->table . ' AS f');
      $this->builder->select('f.facilities_id  AS facilities_id , f.title AS title, f.image_name as image_name ,f.latitude AS latitude, f.longitude AS longitude, f.description as description, cf.category_name AS category_name, cf.category_facilities_id AS category_facilities_id ');
      $this->builder->where('category_name ', 'hotel');
      $this->builder->join('gis_category_facilities as cf', 'cf.category_facilities_id = f.category_facilities_id', 'left');

      $query = $this->builder->get();
      return $query->getResult();
   }

   public function gt_culinary_facilities()
   {
      $this->builder = $this->db->table($this->table . ' AS f');
      $this->builder->select('f.facilities_id  AS facilities_id , f.title AS title, f.image_name as image_name ,f.latitude AS latitude, f.longitude AS longitude, f.description as description, cf.category_name AS category_name, cf.category_facilities_id AS category_facilities_id ');
      $this->builder->where('category_name ', 'kuliner');
      $this->builder->join('gis_category_facilities as cf', 'cf.category_facilities_id = f.category_facilities_id', 'left');

      $query = $this->builder->get();
      return $query->getResult();
   }

   public function gt_wisata()
   {
      $this->builder = $this->db->table($this->table . ' AS f');
      $this->builder->select('f.facilities_id  AS facilities_id , f.title AS title, f.image_name as image_name ,f.latitude AS latitude, f.longitude AS longitude, f.description as description, cf.category_name AS category_name, cf.category_facilities_id AS category_facilities_id ');
      $this->builder->where('category_name ', 'wisata');
      $this->builder->join('gis_category_facilities as cf', 'cf.category_facilities_id = f.category_facilities_id', 'left');

      $query = $this->builder->get();
      return $query->getResult();
   }
   public function gt_mining()
   {
      $this->builder = $this->db->table($this->table . ' AS f');
      $this->builder->select('f.facilities_id  AS facilities_id , f.title AS title, f.image_name as image_name ,f.latitude AS latitude, f.longitude AS longitude, f.description as description, cf.category_name AS category_name, cf.category_facilities_id AS category_facilities_id ');
      $this->builder->where('category_name ', 'tambang');
      $this->builder->join('gis_category_facilities as cf', 'cf.category_facilities_id = f.category_facilities_id', 'left');

      $query = $this->builder->get();
      return $query->getResult();
   }
   public function gt_industry()
   {
      $this->builder = $this->db->table($this->table . ' AS f');
      $this->builder->select('f.facilities_id  AS facilities_id , f.title AS title, f.image_name as image_name ,f.latitude AS latitude, f.longitude AS longitude, f.description as description, cf.category_name AS category_name, cf.category_facilities_id AS category_facilities_id ');
      $this->builder->where('category_name ', 'pabrik');
      $this->builder->join('gis_category_facilities as cf', 'cf.category_facilities_id = f.category_facilities_id', 'left');

      $query = $this->builder->get();
      return $query->getResult();
   }

   public function gt_public_service()
   {
      $this->builder = $this->db->table($this->table . ' AS f');
      $this->builder->select('f.facilities_id  AS facilities_id , f.title AS title, f.image_name as image_name ,f.latitude AS latitude, f.longitude AS longitude, f.description as description, cf.category_name AS category_name, cf.category_facilities_id AS category_facilities_id ');
      $this->builder->where('category_name ', 'pelayanan-publik');
      $this->builder->join('gis_category_facilities as cf', 'cf.category_facilities_id = f.category_facilities_id', 'left');

      $query = $this->builder->get();
      return $query->getResult();
   }
}
