<?php 
session_start();
if(!isset($_SESSION["user_id"])){
	echo "Phải login mới được xem profile";
}
else{
	$db = new mysqli("localhost", "root", "", "homework2");
	$sql_select = "SELECT * FROM Users WHERE id = ".$_SESSION["user_id"];
	$result = $db->query($sql_select)->fetch_all();
	echo "<center>WELCOME ".$result[0][3]."</center>";
?>
<table align="center" cellspacing="0px" border="1px">
	<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Password</th>
		<th>Full Name</th>
	</tr>
	<tr>
		<td><?php echo $result[0][0]?></td>
		<td><?php echo $result[0][1]?></td>
		<td><?php echo "********"?></td>
		<td><?php echo $result[0][3]?></td>
	</tr>
</table>
<?php 
}
?>