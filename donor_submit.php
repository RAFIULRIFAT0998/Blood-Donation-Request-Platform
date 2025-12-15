<?php
include("../config.php");

if(
    isset($_POST['name'], $_POST['phone'], $_POST['blood'])
){
    $name  = $_POST['name'];
    $phone = $_POST['phone'];
    $blood = $_POST['blood'];
    $msg   = $_POST['message'] ?? '';

    $q = mysqli_query($conn,
        "INSERT INTO donors(name,phone,blood,message)
         VALUES('$name','$phone','$blood','$msg')"
    );

    echo $q ? "success" : "error";
}
