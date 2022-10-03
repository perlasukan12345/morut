<?php
namespace App\Models;
 
use CodeIgniter\Model;
 
class PermissionModel extends Model
{
	public $db;
    public $builder;
    public $dt_permission_role = array();

    protected $table = "permission";
    protected $primaryKey = "permission_id";
    protected $returnType = "object";
    protected $allowedFields = ['permission_description', 'permission_category'];

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

    public function save_role_permission($data){
        return $this->db->table('role_permission')->insertBatch($data);
    }

    public function permission_role(){
        $data = $this->db->query("SELECT role_id,permission_id FROM role_permission");

        if(count($data->getResult()) > 0){
            foreach ($data->getResult() as $datas) {
                $this->dt_permission_role[] = $datas->role_id."-".$datas->permission_id;
            }
        }

       return $this->dt_permission_role;
    }

    public function save_set_permission($permissions){

        $this->db->query("DELETE FROM role_permission WHERE role_id != '1' AND role_id != '2'");

        foreach ($permissions as $key => $permission) {

            foreach ($permission as $k => $perm) {

                $fields = array(
                    'role_id' => $key,
                    'permission_id' => $k,
                );

                $params = array($fields['role_id'],$fields['permission_id']);

                $data = $this->db->query('SELECT * FROM role_permission WHERE role_id = ? AND permission_id = ?',$params);

                if(count($data->getResult()) < 1){
                    if (!$this->db->table('role_permission')->insert($fields)) {
                        return false;
                    }
                }
            }
        }

        return true;
    }
} 
 ?>