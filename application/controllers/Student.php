<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller{
    public function index(){
        $this->load->view("add_student");
    }

    public function view(){
        $this->load->view("view_student");
    }

    public function addstudent(){
        if($this->input->post("name")){
            $name = $this->input->post("name");
            $matric = $this->input->post("matric");
            $institution = $this->input->post("institution");
            $department = $this->input->post("department");
            $gender = $this->input->post("gender");
            $entry_year = $this->input->post("entry_year");
            $level = $this->input->post("level");
            $course_mode = $this->input->post("course_mode");

            $data = array(
                "matric_no"=>$matric,
                "names" => $name,
                "institution" =>$institution,
                "department" => $department,
                "entry_year"=>$entry_year,
                "sex" =>$gender,
                "level"=>$level,
                "course_mode"=>$course_mode
            );

            $insert = $this->db->insert("student", $data);

            if($insert){
                echo "inserted";
            }else{
                echo "failed";
            }



        }else{
            redirect("Home". "refresh");
        }
    }

}


?>