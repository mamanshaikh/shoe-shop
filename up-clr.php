<form action="process.php" method="POST">
	<?php

		include('connection.php');

		$clrid = $_REQUEST['id'];
		echo $clrid;
	?>
	<input type="hidden" name="up-clrid" value="<?php echo $clrid; ?>">
	<input type="text" name="up-clr" placeholder="Change Color">
	<input type="submit" value="Update Color">
</form>