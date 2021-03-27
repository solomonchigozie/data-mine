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
                            <form action="" method="post" id="loginForm">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="form-group text-center">
                                    <span id="msg"></span>
                                </div>
                                <button class="au-btn au-btn--block au-btn--blue m-b-20" id="submit" type="submit">sign in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="<?php echo base_url() ?>Register">Sign Up Here</a>
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
        $("#loginForm").submit(function(e){
            e.preventDefault();
            
            $.ajax({
                url : '<?php echo site_url() ?>Login/login_val',
                method: 'post',
                data : new FormData(this),
                cache : false,
                contentType : false,
                processData : false,
                beforeSend : function(){
                    $("#submit").text("Please Wait.....");
                },
                success : function(data){
                    $("#submit").text("sign in");
                    if(data ==1){
                        location = "<?php echo site_url()?>Home";
                    }else if(data==0){
                        $("#msg").html("<span class='text-danger'>Incorrect Email or Passsword</span>");
                    }else{
                        $("#msg").html("<span class='text-warning'>An Error Occurred</span>");
                    }
                }   
            })
        })
    })
</script>

</html>
<!-- end document-->