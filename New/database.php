<?php 
$dsn="mysql:host=localhost;dbname=ur_lab";
$user_name="root";
$password="";
try{
    // open connection
    $db=new PDO($dsn,$user_name,$password);
}catch( PDOException $e){
echo "connection error:".$e->getMessage();
}


function myQuary(string $sql,...$values){
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

?>
