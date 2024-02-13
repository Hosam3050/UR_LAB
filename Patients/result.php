<?php
    include_once("functions.php");
    $result = get_reports();
// print_r($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ur lab </title>
    <link rel="stylesheet" href="Css/result.css">
    <link rel="stylesheet" href="Css/profile.css">    
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

    <?php

    foreach ($result as $type) {

        echo "

<div class='page_B'>

    <div class='photo'>

        <div class='container' >
            <div class='row'>
                <div class='cards'>

                    <div class='card'>
                    <div class=''>
                    <h1>" . $type['file'] . "</h1>
                    <a href='../Lab/uploads/$type[file]'>عرض التقرير</a>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>";
                }
                
                
                ?>




</body>

</html>