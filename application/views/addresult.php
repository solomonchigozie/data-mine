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
    <title>Add Result</title>

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
                        
                        <div class="row m-t-25">
                        


                        <div class="col-md-7" style="margin:0 auto !important;">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>STUDENT RESULT ENTRY</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" id="form">
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-5">
                                                    <label for="matric" class=" form-control-label">MATRIC NUMBER</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="matric" name="matric" placeholder="Enter Mat.No" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-5">
                                                    <label for="institution" class=" form-control-label">INSTITUTION</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="institution" id="institution" class="form-control" required>
                                                        <option value="">Please select</option>
                                                        <option value="rivers state university">Rivers State University</option>
                                                        <option value="university of port harcourt">University of Port Harcourt</option>
                                                    </select>                                                
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-5">
                                                    <label for="department" class=" form-control-label">DEPARTMENT/COURSE</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <!-- <input type="text" id="department" name="department" placeholder="Enter Student Department" class="form-control" required> -->
                                                    <select name="department" id="department" class="form-control" required>
                                                        <option value="">Please select</option>
                                                        <option value="Computer Science">Computer Science</option>
                                                        <option value="Mathematics">Mathematics</option>
                                                        <option value="Statistics">Statistics</option>
                                                        <option value="Physics">Physics</option>
                                                        <option value="Chemistry">Chemistry</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-5">
                                                    <label for="level" class=" form-control-label">LEVEL</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="level" id="level" class="form-control" required>
                                                        <option value="">Please select</option>
                                                        <option value="100">100</option>
                                                        <option value="200">200</option>
                                                        <option value="300">300</option>
                                                        <option value="400">400</option>
                                                        <option value="500">500</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-5">
                                                    <label for="course_mode" class=" form-control-label">COURSE MODE</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="course_mode" id="course_mode" class="form-control" required>
                                                        <option value="">Please select</option>
                                                        <option value="full time">Full Time</option>
                                                        <option value="part time">Part Time</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-5">
                                                    <label for="gender" class=" form-control-label">SEMESTER</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="semester" id="semester" class="form-control" required>
                                                        <option value="">Please select</option>
                                                        <option value="first semester">First Semester</option>
                                                        <option value="second semester">Second Semester</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-5">
                                                    <label for="gp" class=" form-control-label">STUDENT GP</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="gp" name="gp" placeholder="Enter Student GP" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="form-group text-right">
                                                <button type="submit" class="btn btn-primary" id="submit">
                                                    Add Result
                                                </button>
                                                <button type="button" class="btn btn-danger" id="resetBtn">
                                                    Reset
                                                </button>                                        
                                        
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>

    <?php $this->load->view('inc/scripts') ?>
    <script>
        $(document).ready(function(){
            $("#resetBtn").click(function(){
                $("#form").trigger("reset");
            })

            $("#form").submit(function(e){
                e.preventDefault();

                $.ajax({
                    url : '<?php site_url() ?>Result/addresult',
                    method : 'post',
                    data : new FormData(this),
                    cache : false,
                    beforeSend : function(){
                        $("#submit").text("Please Wait.....")
                    },
                    contentType : false,
                    processData: false,
                    success: function(data){
                        alert(data);
                        $("#form").trigger("reset");
                        $("#submit").text("Add Student");
                    }
                })
            })

        })
    </script>

</body>

</html>
<!-- end document-->