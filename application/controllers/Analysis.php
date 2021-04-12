<?php 
defined('BASEPATH') OR exit("No direct script access allowed");

class Analysis extends CI_Controller{
    public function index(){
        $this->load->view("analysis");
    }

    public function chart(){

        $department = $this->input->post("department");

        $dept_pass_check = $this->db->query("SELECT * FROM results where department='$department' AND gp<2.1 ");
        $pass = $dept_pass_check->num_rows();


        $dept_lc_check = $this->db->query("SELECT * FROM results where department='$department' AND gp<=3.5 ");
        $lowercredit = $dept_lc_check->num_rows();

        $dept_uc_check = $this->db->query("SELECT * FROM results where department='$department' AND gp<=4.5 ");
        $uppercredit = $dept_uc_check->num_rows();

        $dept_d_check = $this->db->query("SELECT * FROM results where department='$department' AND gp<=5.0 ");
        $distinction = $dept_d_check->num_rows();

        // echo $dept_pass;

        $data = array(
            "pass"=>$pass,
            "lowercredit"=>$lowercredit,
            "uppercredit"=>$uppercredit,
            "distinction"=>$distinction,
            "department"=>$department
        );

        echo json_encode($data);

        // $data = "{
        //     type: 'bar',
        //     data: {
            //     labels: ['Computer Sc', 'Maths', 'Sta', 'Physics', 'Chemistry'],
            //     datasets: [{
            //         label: 'GPA',
            //         data: [[10], 30, , 3, 5, 3],
            //         backgroundColor: [
            //             'rgba(255, 0, 0, 0.2)',
            //             'rgba(54, 162, 235, 0.2)',
            //             'rgba(255, 206, 86, 0.2)',
            //             'rgba(75, 192, 192, 0.2)',
            //             'rgba(153, 102, 255, 0.2)',
            //             'rgba(255, 159, 64, 0.2)'
            //         ],
            //         borderWidth: 1
            //     }]
            // },
            // options: {
        //         scales: {
        //             y: {
        //                 beginAtZero: true
        //             }
        //         }
        //     }
        // }
        // ";

        // echo $data;



        // $dept = "";
        // $gp = "";
        
        // $getData = $this->db->query("SELECT * FROM results where department='biology' ");

        // foreach($getData->result() as $row){
        //     $dept = '" '. $row->department.'"';
        //     $gp = '" '. $row->gp.'"';
        // }


        // $dept = substr($dept, 0, -1); //remove trailing comma
        // $gp = substr($gp, 0, -1); //remove trailing comma

        // $bar_graph = '
        // <canvas id=""graph" data-settings=
        // \'{
        //     "type" : "bar",
        //     "data" : 
        //     {
        //         labels: ["Computer Sc", "Maths", "Sta", "Physics", "Chemistry"],
        //         datasets: [{
        //             label: "GPA",
        //             data: [[10], 30, , 3, 5, 3],
        //             backgroundColor: [
        //                 "rgba(255, 0, 0, 0.2)",
        //                 "rgba(54, 162, 235, 0.2)",
        //                 "rgba(255, 206, 86, 0.2)",
        //                 "rgba(75, 192, 192, 0.2)",
        //                 "rgba(153, 102, 255, 0.2)",
        //                 "rgba(255, 159, 64, 0.2)"
        //             ],
        //             borderWidth: 1
        //         }]
        //     },
        //     "options":
        //     {
        //         "legend":
        //         {
        //             "display" :true
        //         }
        //     }
        // }\'
        // ></canvas>';

        // echo $bar_graph;
        
    }

}


?>