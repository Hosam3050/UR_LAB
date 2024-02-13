<?php

include_once("functions.php");
if(!empty($_POST)){
    store($_POST, $_FILES,$_SESSION['logged_user']['id']);
    header("location:index.php");
}
$category=getAllCategories();


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
    <h2>Add a New Product</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <!-- Product Name -->
        <div class="form-group">
            <label for="productName">Product Name:</label>
            <input type="text" class="form-control" id="productName" name="name" required>
        </div>

        <!-- Product Price -->
        <div class="form-group">
            <label for="productPrice">Price:</label>
            <input type="number" class="form-control" id="productPrice" name="price" required>
        </div>

        <!-- Product Image -->
        <div class="form-group">
            <label for="productImage">Image (File):</label>
            <input type="file" class="form-control-file" id="productImage" name="image" accept="image/*">
        </div>

        <!-- Product Category -->
        <div class="form-group">
            <label for="productCategory">Category:</label>
            <select class="form-control" id="productCategory" name="category" >
                <option value="">Select Category</option>
                <?php
                    foreach ($category as $category) {
                        echo "<option value='$category[id]'>$category[name]</option>
                        ";
                    }
                    ?>
                <!-- Add more categories as needed -->
            </select>
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