<?php 
require 'database.php';
$sql = "SELECT * from image";
$links = $db->query($sql)->fetch_all();
?>
<table cellspacing="0px" cellpadding="10px" border="1px">
 	<tr>
 		<th>Id</th>
 		<th>Image</th>
 	</tr>
 	<?php for ($i=0; $i < count($links); $i++) { ?>
 	<tr>
 		<td><?php echo $links[$i][0]; ?></td>
 		<td><img src="<?php echo $links[$i][1];  ?>"></td>
 	</tr>
 	<?php } ?>
 </table>