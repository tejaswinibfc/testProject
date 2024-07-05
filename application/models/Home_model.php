<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home_model extends CI_Model
{


  public function all_category($tablename)
  {
    return $this->db->where(['status' => 1, 'parent_id' => 0])->order_by('id', 'desc')->limit(5)->get($tablename)->result();
  }
  public function all_product($tablename)
  {
    return $this->db->where('status', 1)->order_by('id', 'desc')->get($tablename)->result();
  }
  public function get_product($slug)
  {
    return $this->db->where(['status' => 1, 'slug' => $slug])->order_by('id', 'desc')->get('product')->row();
  }
  public function category_name($cate_id)
  {
    $category_name = $this->db->where('cate_id', $cate_id)->get('category')->row();
    return $category_name->cate_name;
  }


  public function all_subcategory($tablename, $cate_id)
  {
    return $this->db->where(['status' => 1, 'parent_id' => $cate_id])->get($tablename)->result();
  }
}
