<?php session_start();
include "db.php";
$emails=$_SESSION['email'];
$selectn=mysqli_query($connet, "select * from  notification where email='$emails'");
while ($nfect=mysqli_fetch_array($selectn)) {

	$message=$nfect['message'];
	$time=$nfect['time'];
	$amount=$nfect['amout'];





?>




								<div class="notificationsmallbody">
									<div class="Notificationimage"></div>
									<div class="Notificationname">
										<h3 style="text-transform: capitalize;"><?php echo $message; ?> </h3>
										<span><?php echo $time; ?></span>
									</div>
									<div class="Notificationamout">
										NGN<?php echo number_format($amount,2); ?>
									</div>
								</div>

<?php } ?>
