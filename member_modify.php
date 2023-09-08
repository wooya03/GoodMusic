<?php
$id = $_GET["id"];

$pass = $_POST["pass"];
$name = $_POST["name"];
$address = $_POST["address"];
$email1 = $_POST["email1"];
$email2 = $_POST["email2"];

$email = $email1 . "@" . $email2;

$con = mysqli_connect("localhost", "user1", "12345", "project");
$sql = "update user set pass='$pass', name='$name' , email='$email', address='$address'";
$sql .= " where id='$id'";
mysqli_query($con, $sql);

mysqli_close($con);

echo "<script> 
        alert('변경되었습니다.'); 
     </script>
     ";

echo "
	      <script>
	          location.href = 'index.php';
	      </script>
	  ";
?>