<?php
if(!isset($_SESSION['email'])){
    redirect("login","refresh");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('inc/header') ?>
    <!-- Title Page-->
    <title>View Results</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/datatables/jquery.dataTables.min.css">
<style>
th, td{
    white-space: nowrap;
}

</style>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php $this->load->view("inc/header-m") ?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php $this->load->view("inc/sidebar") ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php $this->load->view("inc/header-d") ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">View Student Results</h2>
                                </div>
                            </div>
                        </div>
                        
                        <table id="myTable" class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Matric</th>
                                    <th>Institution</th>
                                    <th>Department</th>
                                    <th>Level</th>
                                    <th>Course Mode</th>
                                    <th>Semester</th>
                                    <th>GP</th>
                                    <th>Date Added</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $select = $this->db->query("SELECT * FROM results ORDER BY id DESC");

                                    foreach($select->result() as $row){
                                ?>
                                <tr>
                                    <td><?php echo $row->matric_no ?></td>
                                    <td><?php echo $row->institution ?></td>
                                    <td><?php echo $row->department ?></td>
                                    <td><?php echo $row->level ?></td>
                                    <td><?php echo $row->course_mode ?></td>
                                    <td><?php echo $row->semester ?></td>
                                    <td><?php echo $row->gp ?></td>
                                    <td><?php echo $row->date_added ?></td>
                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                        


                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>





    <?php $this->load->view('inc/scripts') ?>
    <script src="<?php echo base_url() ?>assets/datatables/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#myTable").DataTable();
        });
    </script>
</body>

</html>
<!-- end document-->