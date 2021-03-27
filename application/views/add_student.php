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
    <title>Login</title>

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
                                        <strong>STUDENT DETAILS ENTRY</strong>
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
                                                    <label for="name" class=" form-control-label">STUDENT NAME</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="name" name="name" placeholder="Enter Student Name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-5">
                                                    <label for="institution" class=" form-control-label">INSTITUTION</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="institution" name="institution" placeholder="Name of Institution" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-5">
                                                    <label for="department" class=" form-control-label">DEPARTMENT</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="text" id="department" name="department" placeholder="Enter Student Department" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-5">
                                                    <label for="gender" class=" form-control-label">GENDER</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="gender" id="gender" class="form-control" required>
                                                        <option value="">Please select</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-5">
                                                    <label for="year" class=" form-control-label">YEAR OF ENTRY</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <input type="number" id="entry_year" name="entry_year" placeholder="Enter Student Year Of Entry" class="form-control" required>
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
                                                    <label for="gender" class=" form-control-label">COURSE MODE</label>
                                                </div>
                                                <div class="col-12 col-md-7">
                                                    <select name="course_mode" id="course_mode" class="form-control" required>
                                                        <option value="">Please select</option>
                                                        <option value="4 years">4 YEARS</option>
                                                        <option value="5 years">5 YEARS</option>
                                                    </select>
                                                </div>
                                            </div>

                                                <div class="form-group text-right">
                                                    <button type="submit" class="btn btn-primary" id="submit">
                                                        Add Student
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
                    url : '<?php site_url() ?>Student/addstudent',
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