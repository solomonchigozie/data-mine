<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{
    public function index(){
        $this->load->view("register");
    }

    public function register_val(){
        if($this->input->post("email")){
            $fname = $this->input->post("fullname");
            $email = $this->input->post("email");
            $password = md5($this->input->post("password"));

            #check if the user exists
            $checkDataBaseForUser = $this->db->get_where("users", array("email"=>$email));

            $checkResult = $checkDataBaseForUser->num_rows();

            if($checkResult){
                #user is already registered
                echo 2;
            }else{
                //add new user
                $insert = $this->db->insert("users", array("fullname"=>$fname, "email"=>$email, "password"=>$password));

                if($insert){
                    echo 1;
                }
            }
            
        }else{
            //this means there was a problem we could not resolve
            echo 0;
        }
    }
}


?>