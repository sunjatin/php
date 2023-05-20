<?php
session_start();
?>
<table>
	<tr>
		<th>Key</th>
		<th>Value</th>
	</tr>
	<?php
	$sessionVariables = $_SESSION;
	
	foreach($sessionVariables as $key => $value){
		?>
		<tr>
			<td><?= $key ?></td>
			<td><?php echo $value ?></td>
		</tr>
		<?php
	}
	?>
	
</table>

<?php
if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']){
	?><a href="logout.php">Logout</a><?php
}
?>

