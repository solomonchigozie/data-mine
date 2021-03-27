<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('inc/header') ?>
    <!-- Title Page-->
    <title>Login</title>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                Student Data Miner
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post" id="registerForm">
                                <div class="form-group">
                                    <label>Full Name</label> 
                                    <input class="au-input au-input--full" type="text" name="fullname" id="fullname" placeholder="Enter Your Full Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" id="email" placeholder="Enter Your Email" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" id="password" placeholder="Enter Your Password" required>
                                </div>
                                <div class="form-group text-center">
                                    <span id="msg"></span>
                                </div>
                                <div class="form-group">
                                    <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit" id="submit">Register</button>
                                </div>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have an account?
                                    <a href="<?php echo base_url() ?>Login">Log in Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php $this->load->view('inc/scripts') ?>

</body>
<script>
$(document).ready(function(){
    $("#registerForm").submit(function(e){
        e.preventDefault();
    
        $.ajax({
            url : '<?php echo site_url()?>Register/register_val',
            method: 'post',
            data : new FormData(this),
            cache : false,
            processData : false,
            contentType :false,
            beforeSend : function(){
                $("#submit").text("Please Wait ....")
            },
            success : function(response){
                $("#submit").text("Register")
                
                if(response ==1){
                    $("#msg").html("<span class='text-success'>You Have Been Registered Successfully. <a href='<?php echo site_url() ?>Login'>Login</a> </span>");
                    //clear the form
                    $("#registerForm").trigger("reset");

                }else if(response ==2){
                    $("#msg").html("<span class='text-danger'>Sorry a User Already Exists With This Info</span>");                    
                }else{
                    $("#msg").html("<span class='text-warning'>An Error Occured</span>");                                        
                }
            }
        })
    })
})
</script>

</html>
<!-- end document-->