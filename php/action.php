<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup";

$email = $_POST['email'];
$pass = $_POST['pass'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO signup(email,pass) VALUES('$email','$pass')";

if ($conn->query($sql) === TRUE) {
    //echo "SignUp Successfull";
    echo "<script>alert('SignUp Successful');
      	window.location.href='login.php';
      	</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>