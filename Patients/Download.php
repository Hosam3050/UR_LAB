

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Css/Download.css" />

</head>
<body>


<?php

include_once("functions.php");

$id=$_GET['id'];
$result=getitembyid($id);
    foreach ($result as $type) {

        echo '
        <div class="page_B">

    <div class="photo">

        <div class="container" >
            <div class="row">
                <div class="cards">

                    <div class="card">
                    <div class="">
                    <img src="' . "" . $type["file"] . '" alt=""><br>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    ';
                }
                
                ?>

<p></p>


</body>
</html>




