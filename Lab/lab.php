<?php
include_once("functions.php");

session_start();

if (isset($_POST['id'])) {
  $id = $_POST['id'];
  delete($id);
  header("Location: lab.php");
  exit;
}

$page = isset($_GET['page']) ? $_GET['page'] : 0;
$Search = isset($_GET['item']) ? $_GET['item'] : null;
$Sort = isset($_GET['name']) ? $_GET['name'] : null;

$totalPages = 0;

if (!empty($Search)) {
  $result = search($Search, $page);

  $totalResults = count(search($Search, 0));
  $totalPages = calculateTotalPages($totalResults);
} elseif (!empty($Sort)) {
  $result = sortByName($Sort, $page);

  $totalResults = count(sortByName($Sort, 0));
  $totalPages = calculateTotalPages($totalResults);
} else {
  $result = getAllByPage($page);

  $totalResults = count(getAllByPage(0));
  $totalPages = calculateTotalPages($totalResults);
}
?>
<!DOCTYPE html>
<html lang="ar">
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
          <a href="view.php">
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
              <input type="text" class="form-control" placeholder="بحث" name="item"> <!-- Add name to input field -->
              <a href="javascript:void();" onclick="submitSearchForm();"><i class="icon-magnifier"></i></a>
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
              <thead>
                <tr>
                  <th style="font-size: 15px;background-color: #237092;">كود الخدمة</th>
                  <th style="font-size: 15px;background-color: #237092 ">اسم الخدمة <a class="arrow-link" href="?name=up&page=<?php echo $page ?>">
                      <i class='icon-arrow-up'></i>
                    </a>
                    <a class="arrow-link" href="?name=down&page=<?php echo $page ?>">
                      <i class='icon-arrow-down'></i>
                    </a>
                  </th>
                  <th style="font-size: 15px; background-color: #237092">سعر الخدمة</th>
                  <th style="font-size: 15px;background-color: #237092">إجراءات</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($result as $item) {
                  echo "<tr>";
                  echo "<td>{$item['id']}</td>";
                  echo '<td>';
                  echo '<form action="edit.php" method="get" class="forma">';
                  echo '<input type="hidden" name="id" value="' . $item['id'] . '">';
                  echo "<input  style=' width:150px ;  background-color: #e5e6e7 ;      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        ;   border: none;
        ;

        ' name='name' value='{$item['name']}'   class='input-field'>";
                  echo '</td>';
                  echo '<td>';
                  echo "<input style=' width:50px ;   background-color: #e5e6e7 ; border: none ;
                  ' name='price' value='{$item['price']}' class='input-field'>";
                  echo '</td>';
                  echo '<td>';
                  echo '<button class="btn btn" name="locat" style="background-color:#237092;font-weight: bolder; border:20px ; font-size: 12px ; border:1px solid black; color: #ffffff;width: 48%;" type="submit">تحديث</button>';
                  echo '</form>';
                  echo '<br>';

                  echo '<form action="" method="post" class="forma">';
                  echo '<br>';

                  echo '<input type="hidden" name="id" value="' . $item['id'] . '">';
                  echo '<button  type="submit" class="btn btn"  style=" background-color:#237092;width: 48%;
        ;font-weight: bolder ;  font-size: 12px ; ; border:1px solid black; color: #ffffff;" onclick="displayWarningMessage(\'هل أنت متأكد من أنك تريد حذف هذه الخدمة؟\')">حذف</button> <br>';
                  echo '</form>';

                  echo '</td>';
                  echo "</tr>";
                }
                ?>
              </tbody>
            </table>
            <div class="btn-container" style="margin-left: 350px;">
              <button onclick="go(<?php echo $page ?>)" class="btn next" style='font-size: 15px;color:#ffffff; border:2px solid aqua; font-weight: bolder;'>التالى</button>
              <button onclick="back(<?php echo $page ?>)" class="btn pre" style=' border:2px solid aqua; font-size: 15px; color:#ffffff; font-weight: bolder;'>السابق</button>
            
            </div>
          </div>
        </div>
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



    <?php
    if (isset($_POST['locat'])) {
      header("Location: edit.php");
      exit;
    }
    if (isset($_POST['loca'])) {
      header("Location: delete.php");
      exit;
    }
    if (isset($_POST['location'])) {
      header("Location: add.php");
      exit;
    }
    ?>

    <!-- Bootstrap core JavaScript-->
    <script>
      function submitSearchForm() {

        document.querySelector('.search-bar form').submit();
      }

      function displayWarningMessage(message) {
        if (confirm(message)) {

        } else {

        }
      }

      function go(x, max) {
        console.log(x);
        if (parseInt(x) < 5) {
          x = parseInt(x) + 1;
        }
        window.location.replace("lab.php?page=" + x)
      }

      function back(x) {
        if (parseInt(x) > 0) {
          x = parseInt(x) - 1;
        }
        window.location.replace("lab.php?page=" + x)
      }
    </script>



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