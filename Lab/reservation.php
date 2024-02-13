<?php
session_start();
// $dsn = "mysql:host=localhost;dbname=ur_lab";
// $user_name = "root";
// $password = "";

// try {
//     $db = new PDO($dsn, $user_name, $password);
// } catch (PDOException $e) {
//     echo "خطأ في الاتصال: " . $e->getMessage();
// }

include_once("../Admin/database.php");

$defaultStatus = "قيد الانتظار";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["status"]) && isset($_POST["id"])) {
  $status = $_POST["status"];
  $id = $_POST["id"];


  $query = "UPDATE labs_patients SET status = ? WHERE id = ?";
  $stmt = $db->prepare($query);
  $stmt->execute([$status, $id]);
}
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
        <li>
          <a href="#">
            <i class="zmdi zmdi-invert-colors"></i> <span>الحجز</span>
          </a>
        </li>
        <li>
        <a href="patients.php" target="_blank">
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
          <li class="nav-item">
            <form class="search-bar" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <input type="text" class="form-control" placeholder="بحث">
              <a href="javascript:void();"><i class="icon-magnifier"></i></a>
            </form>
          </li>
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
              <thead></thead>
              <tr>
                <th style="font-size: 15px; font-weight: bolder;background-color: #237092">كود المريض</th>
                <th style="font-size: 15px; font-weight: bolder;background-color: #237092">اسم المريض</th>
                <th style="font-size: 15px; font-weight: bolder;background-color: #237092">اسم الخدمة</th>
                <th style="font-size: 15px; font-weight: bolder;background-color: #237092">تاريخ الحجز</th>
                <th style="font-size: 15px;  font-weight: bolder;background-color: #237092"> إجراءات</th>
                <th style="font-size: 15px; font-weight: bolder;background-color: #237092">الحالة</th>
              </tr>
              </thead>
              <tbody>

                <?php
                $id = $_SESSION['logged_user']['id'];
                // echo $id;

                $query = "SELECT r.id, r.lab_id, r.patient_id ,
                r.sevice_name, r.booking_date, r.decision, r.status , p.name
                AS patient_name
                  FROM labs_patients r
                  JOIN patients p ON r.patient_id = p.id
                  WHERE r.lab_id = '$id' ";
                // $query="SELECT * FROM labs_patients where lab_id=";
                $stmt = $db->query($query);
                foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
                  if ($row['status'] == "") {
                    $row['status'] = $defaultStatus;
                  }
                  echo "<tr>";
                  echo "<td>" . $row['patient_id'] . "</td>";
                  echo "<td>" . $row['patient_name'] . "</td>";
                  echo "<td>" . $row['sevice_name'] . "</td>";
                  echo "<td>" . $row['booking_date'] . "</td>";
                  echo "<td>
                          <form action='' method='POST'>
                            <input type='hidden' name='id' value='" . $row['id'] . "'>
                            <input type='submit' name='status'style='background-color:#237092'   class='form-control' style='border:1px solid black' value='تم تأكيد الطلب'><br>
                            <input type='submit' name='status' style='background-color:#237092'  class='form-control' style='border:1px solid black' value='تم رفض الطلب'><br>
                            <input type='submit' name='status' style='background-color:#237092'  class='form-control'style='border:1px solid black'  value='قيد الانتظار'><br>
                          </form>
                        </td>";
                  echo "<td>" . $row['status'] . "</td>";
                  echo "</tr>";
                }
                ?>
              </tbody>
            </table>
          </div>
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