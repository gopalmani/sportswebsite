<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "message";

$msg = $_POST['msg'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO message(msg) VALUES('$msg')";

if ($conn->query($sql) === TRUE) {
    //echo "SignUp Successfull";
    echo "<script>alert('Message Submitted!!');
      	window.location.href='3rdblog.php';
      	</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>