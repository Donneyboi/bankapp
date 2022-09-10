<?php session_start();
include "db.php";
$email=	$_SESSION['email'];
$select=mysqli_query($connet,"select * from signup where email='$email'");
$fetch=mysqli_fetch_array($select);
$balance=$fetch ['balance'];

echo number_format($balance);

 



  ?>