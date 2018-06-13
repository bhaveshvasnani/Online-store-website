	   
		<?php
		
	session_start();

$uname = $_POST['ml'];
$password = $_POST['pass'];


$dbhost='localhost';
$dbuser='root';
$dbpass="";
$db='admin_info';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$db);

$sql1="SELECT * FROM user where uname='$uname' and  password = '$password' ";

$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {

        $_SESSION['name']=$row['name'];
		  $_SESSION['m']=$row['uname'];
		  
		
    }
    include("userhome.php"); 	
} else {
	include("login_again.php"); 	

}
$conn->close();

		?>