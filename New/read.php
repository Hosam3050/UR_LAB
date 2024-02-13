<?php
$file="http://localhost/upload/new%20folder/uploads/$_GET[file]";
header("content-type:application/pdf");
    header("content-description:inline;filename=".$file.'"');
    header("content-transfer-encoding:binary");
    header("accpet-rangs:bytes");
    @readfile($file);
?>