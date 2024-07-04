<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Category_model extends CI_Model
{
  public function insert_data($tablename, $data)
  {
    return $this->db->insert($tablename, $data);
  }

  public function all_category($tablename)
  {
    return $this->db->where(['status' => 1, 'parent_id' => 0])->get($tablename)->result();
  }
  public function all_subcategory($tablename, $cate_id)
  {
    return $this->db->where(['status' => 1, 'parent_id' => $cate_id])->get($tablename)->result();
  }
}
