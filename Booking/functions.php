<?php
include_once("../Admin/database.php");

function getAll(): array {
    $sql = "SELECT * FROM services_lab";
    $data = myQuary($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}


function store($data ,$lab_id) {
    // $p_id=$user['user']['id'];
    $p_id=$_SESSION['logged_user']['id'];
    $sql = "INSERT INTO  labs_patients (lab_id,patient_id,sevice_name,booking_date) VALUES ( ?,?, ? ,?)";
    myQuary($sql,$lab_id, $p_id, $data['sevice_name'],$data['booking_date']);
    header("Location:http://localhost/UR_LAB/Patients/request.php");
}
