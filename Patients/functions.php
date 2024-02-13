

<?php

/*-----------------------GET DATA -----------------------*/

session_start();
include_once("../Admin/database.php");

function storeUser($data, $files){
    global $db;
    $sql="insert into patients(name, email, img, phone, password) values(?,?,?,?,?)";
    $stmt=$db->prepare($sql);
    $ext= pathinfo($files['image']['name'],PATHINFO_EXTENSION);
    $img= md5(microtime()).".".$ext;
    $stmt->execute([$data['name'],$data['email'], $img, $data['phone'], md5($data['password'])]);
    move_uploaded_file($files['image']['tmp_name'], "../images/$img");
}

/*------------------------------reports---------------------------------*/

function get_reports()
{
    global $db;
    $sql = "select * FROM reports WHERE patient_id=?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$_SESSION['logged_user']['id']]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

/*------------------------------pationt---------------------------------*/

function get_patients()
{
    global $db;
    $sql="select patients.name,patients.phone, img from patients where id=?";
    $stmt=$db->prepare($sql);
    $stmt->execute([$_SESSION['logged_user']['id']]);
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}


/*---------------------------------Update------------------------------*/

function Update_profile($data){
    global $db;
    $sql= "update patients set name=?, phone=? where id=? ";
    $stmt = $db->prepare($sql);
    $stmt->execute([$data['name'], $data['phone'],$_SESSION['logged_user']['id'] ]);
    header("location:profile.php");
}
/*---------------------------------requests----------------------------------*/

function get_requests()
{
    global $db;
    $sql = "select * from labs_patients where patient_id =?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$_SESSION['logged_user']['id']]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}


function getitembyid($id){
    global $db;
    $sql = "select * from reports inner join labs on reports.id=labs.id where labs.id=? and patient_id =?;";
    $stmt=$db->prepare($sql);
    $stmt->execute([$id,$_SESSION['logged_user']['id']]);
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

?>




