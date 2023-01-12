<?php
class UserModel extends CI_Model
{
 function load_data()
 {
  $this->db->order_by('id', 'DESC');
  $query = $this->db->get('user');
  return $query->result_array();
 }

 function insert($data)
 {
  $this->db->insert('user', $data);
 }

 function update($data, $id)
 {
  $this->db->where('id', $id);
  $this->db->update('user', $data);
 }

 function delete($id)
 {
  $this->db->where('id', $id);
  $this->db->delete('user');
 }
}


