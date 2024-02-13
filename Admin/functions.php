<?php
session_start();
include_once("../database.php");

function getAll(){
    global $db;
    $sql="select items.id, items.name, img, price, 
            categories.name as category_id from items 
            inner join categories on 
            items.category_id= categories.id
            where user_id=?";
    $stmt=$db->prepare($sql);
    $stmt->execute([$_SESSION['logged_user']['id']]);
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function store($data, $files, $id){
    global $db;
    $sql="insert into items(name, price, img, category_id, user_id) values(?,?,?,?,?)";
    $stmt=$db->prepare($sql);
    $img=$files['image']['name'];
    $stmt->execute([$data['name'],$data['price'], $img, $data['category'],$id]);
    move_uploaded_file($files['image']['tmp_name'], "../images/$img");
    // return getAllProducts();
}


function getAllCategories(){
    // include_once("../Categories/functions.php");
    global $db;
    $sql="select * from categories";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}



function delete($id){
    global $db;
    $sql= "delete from items where id= ?";
    $stmt=$db->prepare($sql);
    $stmt->execute([$id]);
    header("location:http://localhost/New_Project/Vendor/");
}