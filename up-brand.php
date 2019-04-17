<form action="process.php" method="POST">
	<?php

		include('connection.php');

		$brandid = $_REQUEST['id'];
		$que = mysql_query("SELECT * From brand where brand.ID=$brandid") or die("Error".mysql_error());
		$fecth=mysql_fetch_array($que);
			//echo $fecth[1];
		//echo $brandid;
	?>
	<input type="hidden" name="up-brandid" value="<?php echo $brandid; ?>">
	<br>Enter New Brand<input type="text" name="up-brand-name" value="<?php echo $fecth[1]; ?>">
	<input type="submit" value="Update Brand">
</form>