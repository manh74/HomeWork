<?php 
session_start();
if (isset($_SESSION["session_username"])) {
	echo $_SESSION["session_username"];
}
if(isset($_COOKIE["cookie_username"])){
	echo "<br>".$_COOKIE["cookie_username"];
}
?>