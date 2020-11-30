<?php

/*------------------- Establishing Connection---------------------------*/

$email = $_POST["email"];
$password = $_POST["psw"];

$server = 'localhost';
$user = 'sanika';
$pass = 'sanika123';
$db = 'techteam';
$tablename = 'Users';

$conn = new mysqli($server,$user,$pass,$db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

insert($tablename,$conn, $email , $password);

/*------------------- Inserting---------------------------*/

function insert($tablename,$conn, $email , $password){
    
    $sql = "INSERT INTO ".$tablename." (email,password)
    VALUES ('".$email."','".$password."')";

    if ($conn->query($sql) === TRUE) {
        header("Location: Loginpage.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


/*-----------------Close Connection ---------------------*/
$conn->close();
?>