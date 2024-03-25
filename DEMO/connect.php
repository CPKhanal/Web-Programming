<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name =  $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $conn = new mysqli('localhost', 'root', '', 'form');
    if ($conn) {
        // echo "connected";
        $sql = "INSERT into `data`(name,email,password) VALUES('$name','$email','$password')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo"Data  Inserted Successfully!";
        }
        else{
            die(mysqli_error($conn));
        }
        
    } else {
        die(mysqli_error($conn));
    }
}
