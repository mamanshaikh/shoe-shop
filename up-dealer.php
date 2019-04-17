<form action="process.php" method="POST">
	<?php

		include('connection.php');

		$dealer_id = $_REQUEST['id'];
		echo $dealer_id;
	?>
	<input type="hidden" name="up-dealer-id" value="<?php echo $dealer_id; ?>">
	<input type="text" name="up-dealer-name" placeholder="Change Dealer Name">
	<input type="submit" value="Update Dealer">
</form>