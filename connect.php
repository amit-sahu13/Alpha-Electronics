<?php

global $Name;
global $Mobile;
global $Email;
global $Message;

$servername = "localhost";
$username = "root";
$password = "MUroot@123";
$database = "alpha";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die('Connection failed' . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $Mobile = $_POST['Mobile'];
    $Email = $_POST['Email'];
    $Message = $_POST['Message'];
}





$sql = "INSERT INTO contact(Name,Email,Mobile,Message) VALUES('$Name', '$Email', '$Mobile', '$Message')";

if(mysqli_query($conn, $sql)){
     
}
else{
    echo "Failed to send";
}
mysqli_close($conn);
?>