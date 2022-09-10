<?php session_start();


if(isset($_SESSION['email'])){

echo "<style>

.forregister{display:none}
.homepage{display:block}


</style>";





}

else{
//echo $_SESSION['user'];
echo "<style>

.forregister{display:block}
.homepage{display:none}


</style>";


}




?>