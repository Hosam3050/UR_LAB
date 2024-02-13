  <?php
    session_start();
    include_once("functions.php");

    if (!empty($_POST)) {
      store($_POST, $_GET['id']);
    } else {
      $tests = getAll();
      
    }
    ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="test.css">
    <link rel="icon" href="../images/logo2.png" type="image/gif" sizes="16x16">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>

  <body>
    <div class="wrapper">
      <form method="post">
        <h1>إحجز الآن</h1>

        <div class="input-box">
          <input type="date" placeholder="تاريخ الحجز" name="booking_date" required>
          <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
          <input type="select" placeholder="إسم الخدمه" name="sevice_name" required>
          <i class='bx bxs-user'></i>
        </div>

        <button type="submit" class="btn">إرسال</button>

      </form>
    </div>
  </body>