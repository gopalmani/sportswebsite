<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup";

$email = $_GET['email'];
$pass = $_GET['pass'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_GET["email"]) && isset($_GET["pass"]))
 {
     $query = "SELECT * FROM signup WHERE email = '". $email ."' AND pass = '". $pass ."'" ;
     $result = mysqli_query($conn,$query);
     if (mysqli_num_rows($result) == 1) 
      {
        //echo "Login Successful";
        //echo '<script>alert("login successful")</script>';
        //header("Location: index.php"); //Pass, do something
      	echo "<script>alert('Login successful');
      	window.location.href='index.php';
      	</script>";
      } 
       else 
      {
       // echo "Login Failed";
        echo "<script>alert('Login Unsuccessful');
        window.location.href='index.php';
        </script>"; //Fail
      }

 }
 else
 {
     echo "Empty input"; // empty $_POST["submit2"]
 }

$conn->close();

?>