<?php

session_start();
include_once("functions.php");

if (!empty($_post)) {
    store($_POST, $_FILES);
} else {
    $result = getAllPatient();
}
if (isset($_GET['action'])) {
    $id = $_GET['id'];
}


?>

<!DOCTYPE html>
<html lang="ar">
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>services</title>
  <!-- loader-->
  <!-- <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script> -->
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>
<style>

  
@import url('https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100;200;300;400;500;600;700&display=swap');
 * {
    font-family: 'Noto Kufi Arabic', sans-serif;
}
</style>

<body class="bg-theme bg-theme1">

<!-- Start wrapper-->
<div id="wrapper">

  <!--Start sidebar-wrapper-->
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
    <a style="margin-right:10px"  href="#">
        <img width="50px" style="margin:10px 20px 0 0px  ;border-radius:50%" src="../images/<?php echo $_SESSION['logged_user']['img']; ?>"class="logo-icon" alt="logo icon">
          <h5 style="margin-right:60px" class="logo-text"><?php echo $_SESSION['logged_user']['name']; ?></h5>
        </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header"></li>
      <li>
        <a href="lab.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>الخدمات</span>
        </a>
      </li>
      <li>
        <a href="add.php">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>اضافة خدمه</span>
        </a>
      </li>
      <li>
        <a href="reservation.php">
          <i class="zmdi zmdi-invert-colors"></i> <span>الحجز</span>
        </a>
      </li>
      <li>
        <a href="patients.php">
          <i class="zmdi zmdi-lock"></i> <span>المرضى </span>
        </a>
      </li>

      <li>
        <a href="view.php" target="_blank">
          <i class="zmdi zmdi-account-circle"></i> <span>إضافه تقرير</span>
        </a>
      </li>
      <li>
          <a href="index.php">
            <i class="zmdi zmdi-account-circle"></i> <span> عوده</span>
          </a>
        </li>

    

    </ul>
  
  </div>
  <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
        <i class="icon-menu menu-icon"></i>
      </a>
    </li>
    <!--  -->
  </ul>
     
 
</nav>
</header>
<!--End topbar header-->

<div class="clearfix">
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->


	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
<tr>
                            <th style="background-color: #237092;">الرقم التسلسلي</th>
                            <th style="background-color: #237092;">اسم المريض</th>
                            <th style="background-color: #237092;">رقم الهاتف </th>
                            <th style="background-color: #237092;">الأيميل </th>
                            <th style="background-color: #237092;">الصوره</th>
                            <th style="background-color: #237092;">التقرير</th>
                            <th style="background-color: #237092;">الإجراءات </th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        foreach ($result as $patient) {
                            echo "
                        <tr>
                        <td>$patient[id]</td>
                            <td>$patient[name]</td>
                          
                            <td>$patient[phone]</td>
                            <td>$patient[email]</td>
                            <td><img style='border-radius: 50%' width='80px' src='../images/$patient[img]'></td>
                            <td> <a href='http://localhost/UR_LAB/lab/uploads/$patient[file]'>file</a></td>
                            
                            <td>
                          
                            <br>
                                
                            <a style='background-color:#237092' href='edit_pati.php?id=$patient[id]' class='btn btn-dark'>تعديل </a>
                      
                            <a style='background-color:#237092' href='delet.php?id= $patient[id]' class='btn btn-dark'>حذف</a>

    
                            </td>
        
                    
                </tr>
                ";
                        }
                        ?>
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
 
                    </tbody>


                    <script>
                        function displayWarningMessage(message) {
                            if (confirm(message)) {

                            } else {


                            }
                        }
                    </script>


                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>