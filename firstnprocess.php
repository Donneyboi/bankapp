<?php session_start();
include"db.php";
 $emails=$_SESSION['email'];
 $electname=mysqli_query($connet,"select * from signup where email='$emails'");
 $fetch=mysqli_fetch_array($electname);
 $firtn=$fetch['firstname'];
 $last=$fetch['lastname'];

 echo $firtn."  ".$last;



 ?>