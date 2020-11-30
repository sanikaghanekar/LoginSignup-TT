<?php 
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

checkUser($tablename,$conn,$email,$password);

function checkUser($tablename ,$conn,$email,$password){
$sql = "SELECT * FROM ".$tablename." where email='".$email."' and password='".$password."'";
$result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "How and why do I associate with Entrepreneurship";
    } else {
        echo "Invalid Email or Password";   
    }
}
?>