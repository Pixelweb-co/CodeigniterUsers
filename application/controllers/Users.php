<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->load->model('userModel');
  
 }

 function index()
 {
  $this->load->view("UsersView");
 }

 function load_data()
 {
  $data = $this->userModel->load_data();
  echo json_encode($data);
 }

 function insert()
 {
  $data = array(
   'first_name' => $this->input->post('first_name'),
   'last_name'  => $this->input->post('last_name'),
   'gender'   => $this->input->post('gender'),
   'age'   => $this->input->post('age')
   
  );

  $this->userModel->insert($data);
 }

 function update()
 {
  $data = array(
   $this->input->post('table_column') => $this->input->post('value')
  );

  $this->userModel->update($data, $this->input->post('id'));
 }

 function delete()
 {
  $this->userModel->delete($this->input->post('id'));
 }
 

}


