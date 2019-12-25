<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
  private $_table = "products";

  public $product_id;
  public $name;
  public $price;
  public $image = "default.jpg";
  public $description;

  public function rules()
  {
    return [
      ['field' => 'name',
      'label' => 'Name',
      'rules' => 'required'],

      ['field' => 'price',
      'label' => 'Price',
      'rules' => 'required'],

      ['field' => 'description',
      'label' => 'Description',
      'rules' => 'required']
    ];
  }

  public function getAll()
  {
    return $this->db->get($this->_table)->result();
  }

  public function getById($id)
  {
    return $this->db->get_where($this->_table, ["product_id" => $id])->row();
  }

  public function save()
  {
    $post = $this->input->post();
    $this->product_id = uniqid();
    $this->name = $post["name"];
    $this->price = $post["price"];
    $this->description = $post["description"];
    $this->db->insert($this->_table, $this);
  }

  public function update()
  {
    $post = $this->input->post();
    $this->product_id = $post["id"];
    $this->name = $post["name"];
    $this->price = $post["price"];
    $this->description = $post["description"];
    $this->db->update($this->_table, $this, array("product_id" => $post['id']));
  }

  function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  public function delete($id)
  {
    return $this->db->delete($this->_table, array("product_id" => $id));
  }
}
