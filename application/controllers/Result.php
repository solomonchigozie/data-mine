<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller{
    public function index(){
        $this->load->view("addresult");
    }

    public function addresult(){
        if($this->input->post("level")){
            $matric = $this->input->post("matric");
            $institution = $this->input->post("institution");
            $department = $this->input->post("department");
            $level = $this->input->post("level");
            $course_mode = $this->input->post("course_mode");
            $semester = $this->input->post("semester");
            $gp = $this->input->post("gp");

            $data = array(
                "matric_no"=>$matric,
                "institution" =>$institution,
                "department" => $department,
                "level"=>$level,
                "course_mode"=>$course_mode,
                "semester" => $semester,
                "gp"=>$gp
            );

            $insert = $this->db->insert("results", $data);

            if($insert){
                echo "Result has been added";
            }else{
                echo "Failed";
            }

        }else{
            redirect("Home", "refresh");
        }
    }

    public function view(){
        $this->load->view("viewresults");
    }
}

?>