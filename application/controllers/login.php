		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
ob_start();
include('config.php');
//grab user information
$user=$_POST['email'];
$password=$_POST['pass'];
 
 if(isset($_POST['Rem']))
{
	setcookie("user_n",$user,time()*3600);
	setcookie("pass_n",$password,time()*3600);
	
}
$result = mysqli_query($conn,"SELECT * FROM register WHERE email='$user' and psw='$password'");

$row = mysqli_fetch_array($result);
$result1 = mysqli_query($conn,"SELECT name FROM register WHERE email='$user'");

//$row1 = mysqli_fetch_array($result1);
$row1 = $result1->fetch_assoc();

if(($row['email']==$user) && ($row['psw']==$password))
{
	echo "successfully loged in";
	echo "<script> window.location.href='home1.php'</script>";
	$_SESSION['login']="1";
	$_SESSION['Im']=$row1["name"];
}
else 
{
	echo "sorry your credentials are not valid please try again";
	header("location:index.php");
		
}
	ob_end_flush();
	
?>
</body>
</html>