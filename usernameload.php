<?php    session_start(); 

   include "db.php";
    $emails=$_SESSION['email'];
   $select=mysqli_query($connet,"select * from signup where email='$emails'");
   $fetch=mysqli_fetch_array($select);
 $firtn=$fetch['firstname'];
 $last=$fetch['lastname'];
 $email=$fetch['email'];
echo $email;
 ?>

