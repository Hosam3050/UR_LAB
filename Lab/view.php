<?php
session_start();
include_once("functions.php");
if (!empty($_POST)) {
    storeFiles($_POST, $_FILES);
    header("Location:patients.php");
} else {
    // $categories = getAllPatient();
}
$Patient= getpatiant();

// echo "<pre>";
// print_r($Patient);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>services</title>
    <!-- loader-->
    <!-- <link href="assets/css/pace.min.css" rel="stylesheet"/>
<script src="assets/js/pace.min.js"></script> -->
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet" />

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100;200;300;400;500;600;700&display=swap');

    * {
        font-family: 'Noto Kufi Arabic', sans-serif;
    }
</style>



<!-- loader-->
<!-- <link href="assets/css/pace.min.css" rel="stylesheet"/>
<script src="assets/js/pace.min.js"></script> -->
<!--favicon-->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
<!-- Vector CSS -->
<link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
<!-- simplebar CSS-->
<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
<!-- Bootstrap core CSS-->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
<!-- animate CSS-->
<link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
<!-- Icons CSS-->
<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
<!-- Sidebar CSS-->
<link href="assets/css/sidebar-menu.css" rel="stylesheet" />
<!-- Custom Style-->
<link href="assets/css/app-style.css" rel="stylesheet" />

</head>

<!-- <body class="bg-theme bg-theme1">
<div class="container mt-5">
    <h3>إضافة جديدة</h3><br>
    <div class="form-group">
        <form method="POST" action="add.php">
            <label for="serviceName">إسم المريض</label><br>
            <input type="text" name="name" class="form-control"><br>

            <div class="form-group">
                <label for="productImage">التقرير (File):</label>
                <input type="file" class="form-control-file" id="productImage" name="file" accept=".pdf, .doc, .docx" required>
            </div> -->

<!-- Submit Button -->
<!-- <button type="submit" class="btn btn-primary">Submit</button>
                </form>
    </div> -->


<!-- //////////////////////////////////////////////////////////// -->

<body class="bg-theme bg-theme1">

    <div class="container mt-5">
        <h3>إضافه التقرير</h3>
        <form action="" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label for="productName">إسم المريض:</label>
                <select name="patient" id="productName">
                    <?php
                    foreach ($Patient as $value) {
                        echo "<option value='$value[id]'>$value[name]</option>";
                        
                    }
                    ?>

                </select>
            </div>

            <div class="form-group">
                <label for="productImage">التقرير (File):</label>
                <input type="file" class="form-control-file" id="productImage" name="file" accept=".pdf, .doc, .docx" required>
            </div>


            <button type="submit" class="btn btn-primary">إضافة</button>
            <a href="lab.php" class="btn btn-primary">رجوع</a>
        </form>
    </div>


    <!--start color switcher-->
    <div class="right-sidebar">
        <div class="switcher-icon">
            <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
        </div>
        <div class="right-sidebar-content">

            <p class="mb-0">Gaussion Texture</p>
            <hr>

            <ul class="switcher">
                <li id="theme1"></li>
                <li id="theme2"></li>
                <li id="theme3"></li>
                <li id="theme4"></li>
                <li id="theme5"></li>
                <li id="theme6"></li>
            </ul>

            <p class="mb-0">Gradient Background</p>
            <hr>

            <ul class="switcher">
                <li id="theme7"></li>
                <li id="theme8"></li>
                <li id="theme9"></li>
                <li id="theme10"></li>
                <li id="theme11"></li>
                <li id="theme12"></li>
                <li id="theme13"></li>
                <li id="theme14"></li>
                <li id="theme15"></li>
            </ul>

        </div>
    </div>
    <!--end color switcher-->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="assets/js/sidebar-menu.js"></script>
    <!-- loader scripts -->
    <!-- <script src="assets/js/jquery.loading-indicator.js"></script> -->
    <!-- Custom scripts -->
    <script src="assets/js/app-script.js"></script>
    <!-- Chart js -->

    <script src="assets/plugins/Chart.js/Chart.min.js"></script>

    <!-- Index js -->
    <script src="assets/js/index.js"></script>


</body>

</html>