<?php
namespace App\Models;
 
use CodeIgniter\Model;
 
class CategoryopdModel extends Model
{
	protected $db;
    protected $builder;
    protected $table = "category_opd";
    protected $primaryKey = "category_opd_id";
    protected $returnType = "object";
    protected $allowedFields = ['category'];

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    protected function _get_datatables_query($table, $column_order, $column_search, $order)
     {
         $this->builder = $this->db->table($table);
        
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
        if ($_POST['length'] != -1){
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

    public function refill_id(){

        $this->builder = $this->db->table($this->table)->select();
        $cat = $this->builder->get()->getResult();

            $no = 1;
            for ($i = 0; $i < count($cat); $i++) {
                $cat_id = $cat[$i]->category_opd_id;
                
                $this->builder->set('category_opd_id',$no)->where('category_opd_id',$cat_id)->update();
            $no++;    
            }

        $this->db->query("ALTER TABLE category_opd AUTO_INCREMENT =".$no);
    }
} 
 ?>