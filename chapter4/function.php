<?php
require 'config.php';

if(isset($_POST["action"])){
    if($_POST["action"] == "insert"){
        insert();
    }
    else if($_POST["action"] == "edit"){
        edit();
    }
    else{
        delete();
    }
}
function insert (){
    global $conn;

    $name = $_POST["name"];
    $email = $_POST["email"];
    $pemesanan = $_POST["pemesanan"];

    $query = "INSERT INTO user VAlUES ('','$name','$email','$pemesanan')";
    mysqli_query($conn,$query);
    echo "Data inserted successfully";
}
function edit(){
    global $conn;

    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pemesanan = $_POST["pemesanan"];

    $query = "UPDATE user SET name = '$name', email = '$email',pemesanan = '$pemesanan' WHERE id = $id";
    mysqli_query($conn,$query);
    echo "updated successfully";
}

function delete(){
    global $conn;

    $id = $_POST["action"];

    $query = "DELETE FROM user WHERE id = $id";
    mysqli_query($conn,$query);
    echo "deleted successfully";
}
?>