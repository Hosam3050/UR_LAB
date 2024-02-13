<?php

try {
    $dsn="mysql:host=localhost;dbname=final";
    $user_name="root";
    $password="";
    // Create Connection
    $db= new PDO($dsn,$user_name,$password);
    // echo "connected";
} catch (PDOException $error) {
    echo $error->getMessage();
}

function myQuary($sql,...$values){
    global $db;
    $stmt=$db->prepare($sql);
    $stmt->execute($values);
    return $stmt; 
}

function close_conn($stmt){
    global $db;
    $db=null; 
    $stmt=null;  
}
