$(document).ready(function () {
$('.notification').hide();
$('.user').hide();

//******************************
$('.h').on('click',function () {
$('.home').show()
$('.notification').hide();
$('.user').hide();	
})

$('.n').on('click',function () {
$('.home').hide()
$('.notification').show();
$('.user').hide();	
})
$('.u').on('click',function () {
$('.home').hide()
$('.notification').hide();
$('.user').show();	
})
//showsend
$('.send').hide()
$('.showsend').on('click',function () {
$('.send').fadeIn(1000);
})
//closeshowsend
$('.closesend').on('click',function () {
$('.send').fadeOut(1000);
})
$('.Bankbodys').hide()
$('.showpersonal').on('click',function () {
$('.sendbody').fadeIn(100);
$('.Bankbodys').fadeOut(100);
})

$('.showbank').on('click',function () {
$('.sendbody').fadeOut(100);
$('.Bankbodys').fadeIn(100);
})
//showWithdraw
$('.Withdraw').hide();
$('.showWithdraw').on('click',function () {
$('.Withdraw').fadeIn(1000);
})
//closewithdraw
$('.closewithdraw').on('click',function () {
$('.Withdraw').fadeOut(1000);
})
//signup
$('.signin').hide();
$('.showlogin').on('click',function () {
$('.signup').hide();
$('.signin').show();
})
 

$('.showsigup').on('click',function () {
$('.signup').show();
$('.signin').hide();
})
})