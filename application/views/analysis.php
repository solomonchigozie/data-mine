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
    <title>Result Analysis</title>
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
                                <div class="text-center">
                                    <h5 class="title-1">Analysis</h5>
                                </div>
                            </div>
                        </div>
                        <div style="display:flex;justify-content:flex-end">
                            <div class="col-md-4">
                                <select name="department" id="department" class="form-control">
                                    <option value=>Select Department</option>
                                    <option value="computer science">Computer Science</option>
                                    <option value="Physics">Physics</option>
                                    <option value="mathematics">Mathematic</option>
                                    <option value="statistics">Statistics</option>
                                    <option value="chemistry">Chemistry</option>
                                </select>
                            </div>
                        </div>
                        <div style="width:80%; margin:100px auto 0">
                            <canvas id="myChart" width="200" height="80"></canvas>
                        </div>
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
    // $(document).ready(function(){
    //     $.ajax({
    //         url : '<?php //echo site_url() ?>Analysis/chart',
    //         type : 'post',
    //         data : {department : "computer science"},
    //         success : function(bar_graph){
    //             $("#divGraph").html(bar_graph);
    //             $("#graph").chart = new Chart($("#graph"), $("#graph").data("settings"));
    //         }
    //     })
    // })
    </script>



<script>

$(document).ready(function(){
    var ctx = document.getElementById('myChart').getContext('2d');
    $department = "computer science";

    $.ajax({
        url : '<?php echo site_url() ?>Analysis/chart',
        method: 'post',
        dataType :'json',
        data : {department : $department },
        success: function(data){
            var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Pass', 'Lower Credit', 'Upper Credit', 'Distinction'],
                datasets: [{
                    label: data.department,
                    data: [data.pass,data.lowercredit,data.uppercredit, data.distinction],
                    backgroundColor: [
                        'rgba(255, 0, 0, 0.2)',
                        'rgba(255, 0, 0, 0.2)',
                        'rgba(255, 0, 0, 0.2)',
                        'rgba(255, 0, 0, 0.2)',
                        'rgba(255, 0, 0, 0.2)'
                    ],
                }]
            },
        });
            
        }
    })

    $("#department").change(function(){
        $department = $("#department").val();
        console.log($department);
            $.ajax({
            url : '<?php echo site_url() ?>Analysis/chart',
            method: 'post',
            dataType :'json',
            data : {department : $department},
            success: function(data){

                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Pass', 'Lower Credit', 'Upper Credit', 'Distinction'],
                    datasets: [{
                        label: data.department + ' Department',
                        data: [data.pass,data.lowercredit,data.uppercredit, data.distinction],
                        backgroundColor: [
                            'rgba(255, 0, 0, 0.2)',
                            'rgba(255, 0, 0, 0.2)',
                            'rgba(255, 0, 0, 0.2)',
                            'rgba(255, 0, 0, 0.2)',
                            'rgba(255, 0, 0, 0.2)'
                        ],
                    }]
                },
            });
                
            }
        })
    })

}); //end of document

</script>
</body>
</html>
<!-- end document-->