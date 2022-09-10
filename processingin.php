<?php session_start();
include "db.php";

if (1==1) {
	$email=$_POST['email'];
	$pass=$_POST['Password'];


	if ($email=="") {
		echo"input email";
	}
	else if ($pass=="") {
		echo"input password";
	}
	else{
		$select=mysqli_query($connet,"select * from signup where email='$email' and password='$pass'");
		$num=mysqli_num_rows($select);
		if ($num<1) {
			echo"user not found";
		}
		else{
			$_SESSION['email']=$email;
			header("Location:index.html");
		}
	}
}



  ?>