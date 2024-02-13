<?php
include_once("../Patients/functions.php");
if(!empty($_POST)){
    storeUser($_POST, $_FILES);
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="../images/logo2.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
      @import url('https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100;200;300;400;500;600;700&display=swap');
      * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: 'Noto Kufi Arabic', sans-serif;
          font-size: 16px;
          scroll-behavior: smooth;
        }
        body section{
          background: url("../images/WhatsApp Image 2023-10-23 at 14.36.35_5724bede.jpg");
        }
  </style>

</head>
<body>
<section class="vh-100">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11 d-flex justify-content-center">
        <!-- <div class="card text-black " style="border-radius: 25px;width:50%; margin:0px"> -->
          <!-- <div class="card-body p-md-5"> -->
            <div class="card text-black row justify-content-center" style="border-radius: 25px;">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1" style="width:100%; padding:0 20px 40px 20px">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" style="color:#046998;">تسجيل الدخول</p>

                <form class="mx-1 mx-md-4" style="position:relative; left:10px" method="POST" enctype="multipart/form-data">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" placeholder="اسم المستخدم" style="text-align:right;" name="name" require/>
                    </div>
                    <i class="fas fa-user fa-lg me-3 fa-fw" style="position:relative; left:20px"></i>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                      <input type="file" class="form-control" name="image" accept="image/*">
                      <img src="profile_icon_176363.png" width="35px" style="position:relative; left:10px">
                </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <input type="email" id="form3Example3c" class="form-control" placeholder="الايميل" style="text-align:right;" name="email" require/>
                    </div>
                    <i class="fas fa-envelope fa-lg me-3 fa-fw" style="position:relative; left:20px"></i>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <input type="text" class="form-control" placeholder="رقم الهاتف" name="phone" style="text-align:right;" require/>
                    </div>
                    <i class="fas fa-phone fa-lg me-3 fa-fw" style="position:relative; left:20px"></i>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" class="form-control" placeholder="الرقم السري" style="text-align:right;" require/>
                    </div>
                    <i class="fas fa-lock fa-lg me-3 fa-fw" style="position:relative; left:20px"></i>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd" class="form-control" placeholder="تأكيد الرقم السري" style="text-align:right;" name="password" require/>
                    </div>
                    <i class="fas fa-key fa-lg me-3 fa-fw" style="position:relative; left:20px"></i>
                  </div>

                  <div class="">
                    <button type="submit" class="btn btn-primary btn-lg">تسجيل</button>
                  </div>

                </form>

              </div>
              <!-- <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                  class="img-fluid" alt="Sample image">

              </div> -->
            </div>
          <!-- </div> -->
        <!-- </div> -->
      </div>
    </div>
  </div>
</section>
</body>
</html>
