<?php


$id = 1;

$name =$_POST['name']; 

$dob =$_POST['dob'];
$statename =$_POST['st'];
$city =$_POST['ct'];
$add =$_POST['add'];
$phone =$_POST['pno'];

$sex =$_POST['sex'];

$uname =$_POST['ml'];
$password =$_POST['pass'];


$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='admin_info';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
if(! $conn)
{
die('COULD NOT CONNECT:'.mysql_error());
}

$sql="insert into user  values ($id,'$name','$dob','$statename','$city','$add','$phone','$sex','$uname','$password')";
mysql_select_db('admin_info');
$retval=mysql_query($sql,$conn);
if(! $retval)
{
die('cannot create:'.mysql_error());
}
else{


}

   include ('success_reg.php');


?>
  
