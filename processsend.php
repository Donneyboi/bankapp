<?php session_start();
include "db.php";
 if (1==1) {
$email=$_POST['email'];
$amount=$_POST['amount'];
$pin=$_POST['pin'];
$emails=$_SESSION['email'];


$electeamount=mysqli_query($connet,"select * from signup where email='$emails'");
$fetch=mysqli_fetch_array($electeamount);
$amounts=$fetch['balance'];
$pins=$fetch['pin'];

$electemail=mysqli_query($connet,"select * from signup where email='$email'");
$fetc2=mysqli_fetch_array($electemail);
$oldamount=$fetc2['balance'];


$numemail=mysqli_num_rows($electemail);
if ($numemail<1) {
	echo "user not found";
}
elseif ($amounts<$amount) {

	echo "your balance is low ";
}
elseif ($pins!=$pin) {

	echo "wrong pin ";
}

else{
$newamount=$amounts-$amount;
$pernewamount=$amount+$oldamount;

$upadtemyown=mysqli_query($connet,"update signup set balance='$newamount' where email='$emails'");
$upadte=mysqli_query($connet,"update signup set balance='$pernewamount' where email='$email'");


$insrtsender=mysqli_query($connet,"insert into  notification(email,message,amout,time)values('$emails',' you send  out','$amount','".date('h:i:a')."')");
$insrtrecever=mysqli_query($connet,"insert into  notification(email,message,amout,time)values('$email',' you receive ','$amount','".date('h:i:a')."')");
echo mysqli_error($connet);
}



 }


  ?>