<?php

include "functions.php";

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
if (!empty($_POST)) {
    Update_profile($_POST);
}

$result=get_patients();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Css/profile.css">  
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div id="sidebar">
        <img style="width: 150px;border-radius: 500px;" src="../images/WhatsApp Image 2023-10-25 at 12.15.35_a57667f6.jpg" alt="">
        <div class="container">
            <a href="profile.php">ملفي الشخصي </a><br>
            <a href="result.php">التحاليل</a><br>
            <a href="request.php">الطلبات</a>
            <a href="index.php">رجوع</a>
        </div>
    </div>
    
    <div class="a">
        <div id="content"><br>
        <h1 data-aos="zoom-in-up" style="font-size:20px"><?php echo " أهلاً وسهلاً    .. ".$_SESSION['logged_user']['name']." " ?></h1><br>
            <form method="post" id="container" enctype="multipart/form-data">
        <?php
        foreach($result as $item){
            echo'
                <img class="photo" src="' . "../images/" . $item["img"] . '" alt=""><br>
                <lable>الاسم بالكامل</lable>
                <input name="name" type="text" placeholder="'.$item["name"].'" /><br />
                <br />
                <lable>رقم التليفون</lable>
                <input name="phone" type="phone" placeholder="'.$item["phone"].'" /><br />
                <br /><button type="submit">حفظ التعديلات</button><br />
                ';
                }

                
                    ?>
            </form>
        </div>
</div>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>
</html>