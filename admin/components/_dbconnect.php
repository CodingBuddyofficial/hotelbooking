<?php
$database='hotelbooking';
$host='localhost';
$user='root';
$pass='';
$conn=mysqli_connect($host,$user,$pass,$database);
if(!$conn){
    die("Connection Failed".mysqli_connect_error());
}

function filteration($data){
    foreach ($data as $key => $value) {
        $data[$key]=trim($value);
        $data[$key]=stripslashes($value);
        $data[$key]=htmlspecialchars($value);
        $data[$key]=strip_tags($value);
    }
    return $data;
}
?>