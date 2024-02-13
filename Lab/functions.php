<?php
include_once("../Admin/database.php");

function storeUser($data, $files){
    global $db;
    $sql="insert into labs(name, email, img, phone, password, address, permit, specialization) values(?,?,?,?,?,?,?,?)";
    $stmt=$db->prepare($sql);
    $ext= pathinfo($files['image']['name'],PATHINFO_EXTENSION);
    $img= md5(microtime()).".".$ext;
    $stmt->execute([$data['name'],$data['email'], $img, $data['phone'], md5($data['password']), $data['address'], $data['permit'], $data['specialization']]);
    move_uploaded_file($files['image']['tmp_name'], "../images/$img");
    header("location:login.php");
}






function getAllByPage($page): array {
    $page=3* $page;
    $sql = "SELECT * FROM services_lab limit $page, 3";
    $data = myQuary($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getAll($d) :array{

    $sql="select patients.name, patients.email,patients.phone, patients.img,reports.id,reports.file
    from patients
    iNNER JOIN reports
    on patients.id=reports.patient_id
    where lab_id=?
    ";
    global $db;
    $stmt=$db->prepare($sql,);
    $stmt->execute($d);
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function store($data) {
    $sql = "INSERT INTO services_lab ( id, name, price) VALUES ( ?, ? ,?)";
    myQuary($sql,$data['id'], $data['name'], $data['price']);
    header("Location:lab.php");
}
function calculateTotalPages($resultCount): int {
    return ceil($resultCount / 3);
}

function search($name, $page): array {
global $db;
$page = 3 * $page;
$sql = "SELECT * FROM services_lab WHERE name LIKE ? OR price=? LIMIT $page, 3";
$stmt = $db->prepare($sql);
$stmt->execute(["%" . $name . "%", $name]);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
return $result;
}

function sortByName($x, $page): array {
  $page = 3 * $page;
if ($x == "up") {
    $sql = "SELECT * FROM services_lab ORDER BY name LIMIT $page, 3";
} else {
    $sql = "SELECT * FROM services_lab ORDER BY name DESC LIMIT $page, 3";
}
$data = myQuary($sql)->fetchAll(PDO::FETCH_ASSOC);
return $data;
}


function getById(int $id) {
    $sql = "SELECT * FROM services_lab WHERE id=?";
    $data = myQuary($sql, $id)->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function update($data) {
    $sql = "UPDATE services_lab SET name = ?, price = ? WHERE id = ?";
    myQuary($sql, $data["name"], $data["price"], $data['id']);
    header("Location:lab.php");
}

function delete($id) {
    $sql = "DELETE FROM services_lab WHERE id=?";
    $q = myQuary($sql, $id);
    close_conn($q);
    header("Location:lab.php");

}



// function getAllPatients() :array{
//     $sql="select patients.name, patients.email,patients.phone, patients.img,reports.id,reports.file
//     from patients
//     iNNER JOIN reports
//     on patients.id=reports.patient_id
//     where lab_id=?
//     ";
//     global $db;
//     $stmt=$db->prepare($sql,);
//     $stmt->execute([$_SESSION['logged_user']['id']]);
//     $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
//     return $result; 
// }



function getAllPatient() :array{
    $sql="select  patients.name,patients.phone,patients.img,patients.email,reports.id,reports.file
    from patients
    iNNER JOIN reports
    on patients.id=reports.patient_id
    where lab_id=?
    ";
    global $db;
    $stmt=$db->prepare($sql,);
    $stmt->execute([$_SESSION["logged_user"]["id"]]);
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result; 
}

// function storeFiles($data,$files){
//     global $db;
//     $file=$files['file']['name'];
//     $sql="
//     insert into reports(file ,patient_id,lab_id) values(?,?,?) ";
//     move_uploaded_file($files["file"]["tmp_name"],"uploads/$file");
//     myQuary($sql,$file,$data['patient'],1);
//     header("content-type:application/pdf");
//     header("content-description:inline;filename=".$file.'"');
//     header("content-transfer-encoding:binary");
//     header("accpet-rangs:bytes");
//     @readfile($file);
// }

// function storeFiles($data,$files){
//     global $db;
//     $file=$_FILES['file']['name'];
//     $sql="insert into reports(file ,patient_id,lab_id) values(?,?,?) ";

//     myQuary($sql,$file,$data['patient'],1);
//     move_uploaded_file($files["tmp_name"]["file"],"../uploads/$file");
// }

// function storeFiles($data, $files) {
//     global $db;

//     $file = $_FILES['file']['name'];
//     $patient_id = $data['patient'];
//     $lab_id = 3;

//     $sql = "INSERT INTO reports (file, patient_id, lab_id) VALUES (?, ?, ?)";
    
//     // استخدام دالة myQuery لتنفيذ الاستعلام
//     if (myQuary($sql, $file, $patient_id, $lab_id)) {
//         // التحقق من نجاح التحميل
//         if (move_uploaded_file($files["tmp_name"]["file"], "../uploads/$file")) {
//             return true; // تم التخزين والتحميل بنجاح
//         } else {
//             return false; // فشل التحميل
//         }
//     } else {
//         return false; // فشل تنفيذ الاستعلام
//     }
// }
function storeFiles($data,$files){
    global $db;
    $file=$files['file']['name'];
    $lab_id= $_SESSION['logged_user']['id'];
    // $patient_id= $data['patient'];
    $sql="
    insert into reports(file, lab_id, patient_id ) values(?,?,?) ";
    move_uploaded_file($files["file"]["tmp_name"],"uploads/$file");
    myQuary($sql ,$file, $lab_id, $data['patient']);
}



// function getpatiant($lab_id){
//     $sql="select patients.name as name,patients.id as id from patients inner join labs_patients
//     on  labs_patients.patient_id =patients.id
//     where 
//     labs_patients.lab_id=1 ";
//     return myQuary($sql)->fetchAll(PDO::FETCH_ASSOC);
// }

// function getpatiant($lab_id){
//     $id=$_SESSION['logged_user']['id'];
//     $sql="select patients.name ,patients.phone ,patients.email ,patients.img ,
//     labs_patients.id  from labs_patients inner join patients on labs_patients.patient_id=patients.id
//     where labs_patients.lab_id=?";
//     echo $id;
//     $data=myQuary($sql,$id)->fetchAll(PDO::FETCH_ASSOC);
//     print_r($data);
//     return $data;

// }
function getpatiant(){
        // $lab_id=$_SESSION['logged_user']['id'];
    
       
        $sql='SELECT patients.id,patients.name
        FROM patients INNER JOIN labs_patients
        on patients.id=labs_patients.patient_id
        WHERE lab_id=?
        GROUP BY(patient_id)';

    $data=myQuary($sql, $_SESSION['logged_user']['id'])->fetchAll(PDO::FETCH_ASSOC);
    // print_r($data);
    return $data;
}

function update_patient($data)  {
    global $db;
    $sql="update patients set patients.name =?  where id=?;";
   $stmt=$db->prepare($sql);
   $stmt->execute([$data['name'],$data['id']]);

 }

 function update_report($data,$files)    {
    global $db;
    $sql="update reports  set file=?  where id=? and lab_id =?";
    $stmt=$db->prepare($sql);
    if($_FILES['file']['size']>0){
    $img=$files['file']['name'];
    move_uploaded_file($files["file"]["tmp_name"],"./uploads/$img"); 
 }
       else{
    $img=$data['file'];
    }
    $stmt->execute([$img,$data['id'],$data['lab_id']]);
 }



function deleteById(int $id){
    global $db;
    $sql="delete from reports
    where id= ?";
    $stmt=$db->prepare($sql);
    $stmt->execute([$id]);
header("Location:patients.php");
    
}
function getItemById(int $id): array
{
    $sql = "select  patients.name,patients.id,reports.id AS report_id , reports.lab_id as lab_id 
    ,reports.file as file from patients iNNER JOIN reports  on patients.id=reports.patient_id where reports.id  =?;";
    // execute the quary;
    global $db;
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    // if ($result === false) {
    //     return []; // or return an appropriate error value
    // }
    return $result;
    
}
