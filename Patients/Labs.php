<?php
session_start();
include_once("../Admin/database.php");
$sql = "select * from labs";
$stmt = myQuary($sql);
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>معامل </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styel.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>


  <?php
  foreach ($items as $item) {
    echo "
<div class='block'>
<img style='width: 100%;' src='../images/$item[img]'>
<h2>$item[name]</h2>
<h4>$item[address]</h4>
<h4>$item[phone]</h4>
<a class='modal-body' href=http://localhost/UR_LAB/services_lab/index.php?id=1?id=$item[id]>عرض الخدمات</a>
<br>
<i class='fa-solid fa-star' style='color: #ffcf23;'></i>
<i class='fa-solid fa-star' style='color: #ffcf23;'></i>
<i class='fa-solid fa-star' style='color: #ffcf23;'></i>
<i class='fa-solid fa-star' style='color: #ffcf23;'></i>
</div>";
  }
  ?>
  </div>

</body>

</html>