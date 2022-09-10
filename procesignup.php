<?php  session_start();
include "db.php";
if (1==1) {
	$firstn=$_POST['firstname'];
    $lastn=$_POST['lastname'];
    $email=$_POST['email'];
    $date=$_POST['date'];
    $sex=$_POST['sex'];
    $pass=$_POST['Password'];
    $cpass=$_POST['confirmPassword'];

if ($firstn=="") {
	echo "input firstname";
}
else if ($lastn=="") {
	echo"input lastname";
}
else if ($email=="") {
	echo"input email";
}
else if ($date=="") {
	echo"input date";
}
else if ($sex=="") {
	echo"input gender";
}
else if ($pass=="") {
	echo" input password";
}
else if ($cpass=="") {
	echo"password not match";
}
else{
	$select=mysqli_query($connet,"select * from signup where email='$email'");
	$num=mysqli_num_rows($select);
	if ($num>0) {
		echo"email already exit".$email;
	}
	else{
		$insert=mysqli_query($connet," insert into signup(firstname,lastname,email,date,sex,password)values('$firstn','$lastn','$email','$date','$sex','$pass')");
		if ($insert) {
			$_SESSION['email']=$email;
			header("location:index.html");
		}

	}
}


}






  ?>