<?php
session_start();
include_once("functions.php");
if (!empty($_POST)) {

    update_patient($_POST);
    update_report($_POST, $_FILES);
    header("Location:patients.php");
} elseif (!empty($_GET)) {
    $id = $_GET['id'];
    $patient = getItemByid($id);
}

?>
<!DOCTYPE html>
<html lang="ar">
<html dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>services</title>
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

<body>

    <div class="container mt-5">
        <h2>تعديل التقرير</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <!-- Patient Name -->
            <div class="form-group">
                <input type="text" class="form-control" value="<?php echo $patient["id"] ?>" id="productName" name="id" hidden>
                <input type="text" class="form-control" value="<?php echo $patient["lab_id"] ?>" id="productName" name="lab_id" hidden>
            </div>

            <div class="form-group">
                <label for="productName">اسم المريض:</label>
                <input type="text" class="form-control" value="<?php echo $patient['name'] ?>" id="productName" name="name" required>
            </div>




            <!-- Patient Image -->
            <div class="form-group">
                <img src="./uploads/<?php echo $patient['file'] ?>" width="200px">
                <label for="productImage">(File):</label>
                <input type="file" class="form-control-file" id="productImage" name="file" accept="uploads/*">
            </div>






            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">تعديل</button>
        </form>
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