	   
		<?php
		
	session_start();

$uname = $_POST['username'];
$password = $_POST['password'];


$dbhost='localhost';
$dbuser='root';
$dbpass="";
$db='admin_info';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$db);

$sql1="SELECT * FROM user where uname='$uname' &&  password = '$password' ";

$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {

      
		  $_SESSION['m']=$row['uname'];
		  
		
    }
    include("adminhome.php"); 	
} else {
	include("admin.php"); 	

}
$conn->close();

		?>
	   
