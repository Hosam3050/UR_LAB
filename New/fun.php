
<?php
include_once("database.php");
// delete
function deleteById(int $id)
{
    global $db;
    $sql = "delete patients.name as name,patients.id as id from patients inner join labs_patients
    on  labs_patients.patient_id =patients.id
    where 
    labs_patients.lab_id=1 ";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
    header("Location:download_file.php");
}

// update
function update($data, $files)
{
    global $db;
    $sql = "update patients set name=? ,phone=? ,img=? where id=?";
    $stmt = $db->prepare($sql);
    if ($_FILES['image']['size'] > 0) {
        $img = $files['image']['name'];
        move_uploaded_file($files["image"]["tmp_name"], "./uploads/$img");
    } else {

        $img = $data['image'];
    }
    $stmt->execute($data['name'], $data['phone'], $img);
}

function getAllCategory()
{
    $sql = "select * from patients";
    $data = myQuary($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

// get by id
function getItemById(int $id): array
{
    $sql = "select * from patients where id =?";
    // execute the quary;
    global $db;
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
?>
