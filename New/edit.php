<?php
include_once("fun.php");

if(!empty($_POST)){
    print_r($_FILES);
    print_r($_POST);
    update($_POST,$_FILES);
    header("Location:download_file.php");
}
elseif(!empty($_GET)){
    $id=$_GET['id'];
    $patient=getItemById($id);
    
}

?>
<!DOCTYPE html>
<html lang="ar">
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit Form</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>اضافه تقرير </h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <!-- Patient Name -->
        <input type="text" class="form-control" value="<?php echo $patient["id"] ?>" id="productName" name="id" required hidden readonly>
        <input type="text" class="form-control" value="<?php echo $patient["img"] ?>" id="productName" name="image" required hidden readonly>
        <div class="form-group">
            <label for="productName">اسم المريض:</label>
            <input type="text" class="form-control" value="<?php echo $patient["name"] ?>" id="productName" name="name" required>
        </div>

        
        <div class="form-group">
            <label for="productPrice">رقم الهاتف:</label>
            <input type="number" class="form-control" id="productPrice" value="<?php echo $patient["phone"] ?>" name="phone" required>
        </div>
 
        <!-- Patient Image -->
        <div class="form-group">
            <img src="./uploads/<?php echo $patient["img"] ?>" width="200px">
            <label for="productImage">Image (File):</label>
            <input type="file" class="form-control-file" id="productImage" name="image" accept="upload/*" >
        </div>
 
       
            
    

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">تعديل</button>
    </form>
</div>

<!-- Include Bootstrap JS and jQuery (Optional) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
