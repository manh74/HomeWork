<form method="post">
	<label>Username</label>
	<input type="text" name="username">
	<label>Password</label>
	<input type="password" name="password">
	<button name="login">Login</button>
</form>
<?php 
	session_start();
	if(isset($_POST["login"])){
		setcookie("cookie_username",$_POST["username"]);
		$_SESSION["session_username"] = $_POST["username"];
		if($_POST["username"]=="admin"&&$_POST["password"]=="123"){
			echo "Login thành công!";
		}
	}
 ?>