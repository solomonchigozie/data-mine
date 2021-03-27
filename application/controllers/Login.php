<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    public function index(){
        $this->load->view("login");
    }
    public function login_val(){
        if($this->input->post("email")){
            $email = $this->input->post("email"); 
            $password = md5($this->input->post("password")); 

            $fetchDetailsFromDatabase = $this->db->get_where("users", array("email"=>$email, "password"=>$password));

            foreach($fetchDetailsFromDatabase->result() as $row) : 
                if($email == $row->email && $password==$row->password):
                    $_SESSION['email'] = $row->email;
                    $_SESSION['fullname'] = $row->fullname;
                    echo 1;
                else:
                    echo 0;
                endif;

            endforeach;
        }else{
            echo 2;
        }
    }
}


?>