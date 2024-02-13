<?php
include_once("../Admin/database.php");
function AddInDatabase($data){ // will add these in the card => database & card
    $sql="insert into items (name, price) values(?,?)";
    myQuary($sql,$data['name'],$data['price']);
}

?>