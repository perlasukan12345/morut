<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $db;
    protected $builder;
    protected $table = "news";
    protected $primaryKey = "news_id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['user_id', 'category_news_id', 'image_name', 'title', 'slug', 'content'];

    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    protected function _get_datatables_query($table, $column_order, $column_search, $order)
    {
        $this->builder = $this->db->table($table . ' AS n');
        $this->builder->select('n.title AS title, n.news_id AS news_id, u.name AS user_name, cn.category_name AS category_name, n.slug AS slug');
        $this->builder->join('user as u', 'u.user_id = n.user_id', 'left');
        $this->builder->join('category_news as cn', 'cn.category_news_id = n.category_news_id', 'left');

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

    public function gt_dataSlug($slug)
    {
        $this->builder = $this->db->table($this->table . ' AS n');
        $this->builder->select('n.title AS title, n.news_id AS news_id, n.user_id AS user_id, n.image_name AS image_name, n.content AS content, u.name AS user_name,cn.category_news_id AS category_news_id, cn.category_name AS category_name, n.updated_at AS created_at, n.slug AS slug');
        $this->builder->where('slug', $slug);
        $this->builder->join('user as u', 'u.user_id = n.user_id', 'left');
        $this->builder->join('category_news as cn', 'cn.category_news_id = n.category_news_id', 'left');

        $query = $this->builder->get();
        return $query->getRow();
    }

    public function get_dataSlug($slug)
    {
        $this->builder = $this->db->table($this->table . ' AS n');
        $this->builder->select('n.title AS title, n.news_id AS news_id, n.user_id AS user_id, n.image_name AS image_name, n.content AS content, u.name AS user_name,cn.category_news_id AS category_news_id, cn.category_name AS category_name, n.updated_at AS created_at, n.slug AS slug');
        $this->builder->where('slug', $slug);
        $this->builder->join('user as u', 'u.user_id = n.user_id', 'left');
        $this->builder->join('category_news as cn', 'cn.category_news_id = n.category_news_id', 'left');

        $query = $this->builder->get();
        return $query->getResult();
    }

    public function gt_dataCategory($cat)
    {
        $this->builder = $this->db->table($this->table . ' AS n');
        $this->builder->select('n.title AS title, n.news_id AS news_id, n.user_id AS user_id, n.image_name AS image_name, n.content AS content, u.name AS user_name,cn.category_news_id AS category_news_id, cn.category_name AS category_name, n.updated_at AS created_at, n.slug AS slug');
        $this->builder->where('n.category_news_id', $cat);
        $this->builder->join('user as u', 'u.user_id = n.user_id', 'left');
        $this->builder->join('category_news as cn', 'cn.category_news_id = n.category_news_id', 'left');

        return $this;
    }

    public function dataArchive()
    {
        $this->builder = $this->db->table($this->table . ' AS n');
        $this->builder->select('distinct DATE_FORMAT(n.updated_at, "%m-%Y") as archive');

        $query = $this->builder->get();
        return $query->getResult();
    }

    public function gt_dataArchive($arc)
    {
        $this->builder = $this->db->table($this->table . ' AS n');
        $this->builder->select('n.title AS title, n.news_id AS news_id, n.user_id AS user_id, n.image_name AS image_name, n.content AS content, u.name AS user_name,cn.category_news_id AS category_news_id, cn.category_name AS category_name, n.updated_at AS created_at, n.slug AS slug');
        $this->builder->where('DATE_FORMAT(n.updated_at, "%m-%Y")', $arc);
        $this->builder->join('user as u', 'u.user_id = n.user_id', 'left');
        $this->builder->join('category_news as cn', 'cn.category_news_id = n.category_news_id', 'left');

        return $this;
    }

    public function gt_dataLimit($limit)
    {
        $this->builder = $this->db->table($this->table . ' AS n');
        $this->builder->select('n.title AS title, n.news_id AS news_id, n.user_id AS user_id, n.image_name AS image_name, n.content AS content, u.name AS user_name,cn.category_news_id AS category_news_id, cn.category_name AS category_name, n.updated_at AS created_at, n.slug AS slug');
        $this->builder->join('user as u', 'u.user_id = n.user_id', 'left');
        $this->builder->join('category_news as cn', 'cn.category_news_id = n.category_news_id', 'left');
        $this->builder->orderBy('n.news_id','DESC');
        $this->builder->limit($limit);

        $query = $this->builder->get();
        return $query->getResult();
    }

    public function gt_findAll()
    {
        $this->builder = $this->db->table($this->table . ' AS n');
        $this->builder->select('n.title AS title, n.news_id AS news_id, n.user_id AS user_id, n.image_name AS image_name, n.content AS content, u.name AS user_name,cn.category_news_id AS category_news_id, cn.category_name AS category_name, n.updated_at AS created_at, n.slug AS slug');
        $this->builder->join('user as u', 'u.user_id = n.user_id', 'left');
        $this->builder->join('category_news as cn', 'cn.category_news_id = n.category_news_id', 'left');
        
        return $this;
    }
}
