<?php
include_once("functions.php");
if(!empty($_POST)){
    storeUser($_POST, $_FILES);
    header("location:index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Add New User</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <!-- Product Name -->
        <div class="form-group">
            <label for="productName">User Name:</label>
            <input type="text" class="form-control" id="productName" name="name" required>
        </div>

        <!-- Product Price -->
        <div class="form-group">
            <label for="productPrice">Email:</label>
            <input type="email" class="form-control" id="productPrice" name="email" required>
        </div>

        <!-- Product Image -->
        <div class="form-group">
            <label for="productImage">Image (File):</label>
            <input type="file" class="form-control-file" id="productImage" name="image" accept="image/*">
        </div>

        <!-- Product Category -->
        <div class="form-group">
            <label for="productCategory">Phone :</label>
            <input type="phone" class="form-control-file" id="productImage" name="phone" >
                <!-- Add more categories as needed -->
        </div>
        <div class="form-group">
            <label for="productPrice">Password:</label>
            <input type="password" class="form-control" id="productPrice" name="password" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Include Bootstrap JS and jQuery (Optional) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>