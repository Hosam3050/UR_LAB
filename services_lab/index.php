<?php
include_once("../Admin/database.php");
$sql = "select * from services_lab where lab_id=?";
$stmt = myQuary($sql, $_GET['id']);
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dtelise</title>
   <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


  

</head>

<body style=" background-color: #c9dee4;">
<a href='http://localhost/UR_LAB/booking/?id=<?php echo $_GET['id'] ?>'><button class="btn btn-primary" style="position: absolute; top:10px; width:800px" type="button">احجز الان</button>




    <section class='cards'>
    <?php
        foreach ($items as $item) {
            echo "
            <div class='grid-container'></div>
            <article class='card card--1'>
            <div class='card__img'>
             </div>
                <a href='#' class='card_link'>
                     <div class='card__img--hover' style='background-color:black '>
                     <img style='width: 170% ; height: 43vh' src='./صورة واتساب بتاريخ 2023-11-06 في 12.54.28_78dd7047.jpg'  >
                    </div>
               </a>
            <div class='card__info'>
                <div class='content'>
                    <h3 style='height: 70px'>$item[name]</h3>
                    <p class='price'> $item[price]</p><p>جنيه</p>
                </div>
                <div class='rates'>
                    <i class='fa-solid fa-star' style='color: #ffee2e;'></i>
                    <i class='fa-solid fa-star' style='color: #ffee2e;'></i>
                    <i class='fa-solid fa-star' style='color: #ffee2e;'></i>
                    <i class='fa-solid fa-star' style='color: #ffee2e;'></i> 
                </div>
            </div>
            </article>
            ";}
            ?>
          </section>



</body>
</html>
