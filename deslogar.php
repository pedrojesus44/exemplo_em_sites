<?php
session_start();
/*session is started if you don't write this line can't use $_Session global variable*/ 
unset($_SESSION["login"]);
/*session deleted. if youn try using this you've got an error*/ 
header('location:index.php');
?>