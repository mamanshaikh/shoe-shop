<form action="process.php" method="POST">
	<?php

		include('connection.php');

		//$upid = $_REQUEST['id'];
		$que=mysql_query("SELECT * FROM brand") or die ("Error".mysql_error());
		echo "<select name='up-stock-brand-id'>";
		while ($fecth=mysql_fetch_array($que))
		{
			echo "<option value='".$fecth[0]."'>".$fecth[1]."</option>";
		}
		echo "</select>";


		$que=mysql_query("SELECT * FROM article") or die ("Error".mysql_error());
		echo "<select name='up-stock-article-id'>";
		while ($fecth=mysql_fetch_array($que))
		{
			echo "<option value='".$fecth[0]."'>".$fecth[2]."</option>";
		}
		echo "</select>";


		echo "<input type='number' name='up-stock-item-id' placeholder='Enter Value'>";


		$que=mysql_query("SELECT * FROM color") or die ("Error".mysql_error());
		echo "<select name='up-stock-color-id'>";
		while ($fecth=mysql_fetch_array($que))
		{
			echo "<option value='".$fecth[0]."'>".$fecth[1]."</option>";
		}
		echo "</select>";



		$que=mysql_query("SELECT * FROM size") or die ("Error".mysql_error());
		echo "<select name='up-stock-size-id'>";
		while ($fecth=mysql_fetch_array($que))
		{
			echo "<option value='".$fecth[0]."'>".$fecth[1]."</option>";
		}
		echo "</select>";


		$que=mysql_query("SELECT * FROM dealer") or die ("Error".mysql_error());
		echo "<select name='up-stock-dealer-id'>";
		while ($fecth=mysql_fetch_array($que))
		{
			echo "<option value='".$fecth[0]."'>".$fecth[1]."</option>";
		}
		echo "</select>";
	?>
	<input type="hidden" name="up-stock-id" value="<?php echo $_REQUEST['id'];?>">
	<input type="submit" value="Update Stock">
</form>