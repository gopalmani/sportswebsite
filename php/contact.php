<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

$nm=$_POST['nm'];
$em=$_POST['em'];
$phno=$_POST['phno'];
$web=$_POST['web'];
$msg=$_POST['msg'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO contact(nm,em,phno,web,msg) VALUES('$nm','$em', '$phno', '$web','$msg')";

if ($conn->query($sql) === TRUE) {
    echo "Submit Successfull";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>