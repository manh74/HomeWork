<form method="post">
	<label>Username</label>
	<input type="text" name="username">
	<label>Password</label>
	<input type="password" name="password">
	<button name="login">Login</button>
</form>
<?php 
	$db = new mysqli("localhost", "root", "", "homework2");
	$sql_select = "SELECT * FROM Users";
	$result = $db->query($sql_select)->fetch_all();
	session_start();
	if(isset($_POST["login"])){
		setcookie("cookie_username",$_POST["username"]);
		$_SESSION["session_username"] = $_POST["username"];
		for ($i=0; $i < count($result); $i++) { 
		if($_POST["username"]==$result[$i][1]&&$_POST["password"]==$result[$i][2]){
			echo "Login thành công!";
			$_SESSION["user_id"] = $result[$i][0];
			break;
		}
		else {
			unset($_SESSION["user_id"]);
		}}
	}
 ?>