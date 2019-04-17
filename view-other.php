<?php
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<html>
<head>
	<title>View Stock</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Add Stock</h1>
	<form action="process.php" method="POST">
		<?php

		//Select Brand
		include('connection.php');

		$que=mysql_query("SELECT ID,Bname FROM brand") or die ("Error".mysql_error());
		echo "<br><br>";
		echo "Select Brand";
		echo "<select name='brand-id' id='brand-id' onchange='getdatab()'>";
		while ($fecth=mysql_fetch_array($que))
		{
			echo "<option value='".$fecth[0]."'>".$fecth[1]."</option>";
		}
		echo "</select>";


		//Select Article
		$que=mysql_query("SELECT ID,A_No FROM article") or die ("Error".mysql_error());
		echo "Select Article";
		echo "<select name='article-id'>";
		while ($fecth=mysql_fetch_array($que))
		{
			echo "<option value='".$fecth[0]."'>".$fecth[1]."</option>";
		}
		echo "</select>";
		//Enter Item

		echo 'Enter Item<input type="number" name="item" placeholder='.'HowMuchItem'.'>';


		//Select Color
		$que=mysql_query("SELECT ID,clr FROM color") or die ("Error".mysql_error());
		echo "Color";
		echo "<select name='color-id'>";
		while ($fecth=mysql_fetch_array($que))
		{
			echo "<option value='".$fecth[0]."'>".$fecth[1]."</option>";
		}
		echo "</select>";


		//Select Size

		$que=mysql_query("SELECT ID,size FROM size") or die ("Error".mysql_error());
		echo "Size";
		echo "<select name='size-id'>";
		while ($fecth=mysql_fetch_array($que))
		{
			echo "<option value='".$fecth[0]."'>".$fecth[1]."</option>";
		}
		echo "</select>";


		//Select Dealer

		$que=mysql_query("SELECT ID,dealer FROM dealer") or die ("Error".mysql_error());
		echo "Dealer Name";
		echo "<select name='dealer-id'>";
		while ($fecth=mysql_fetch_array($que))
		{
			echo "<option value='".$fecth[0]."'>".$fecth[1]."</option>";
		}
		echo "</select>";



		?>
	<input type="submit" value="ADD">
	</form>
	<br>
	<?php
/*		$que = mysql_query("select * from insert_stock") or die("Error".mysql_error());
		echo "<table>";
		echo "<tr>";
		echo "
		<th>S/no</th>
		<th>Brand ID</th>
		<th>Article ID</th>
		<th>Piece</th>
		<th>Color ID</th>
		<th>Size ID</th>
		<th>Dealer ID</th>";
		echo "</tr>";
		$counter = 1;
		while ($fec=mysql_fetch_array($que))
		{
			$upid = $fec[0];
			echo "<tr>";
			echo "<td>".$counter++."</td>";
			echo "<td>".$fec[1]."</td>";
			echo "<td>".$fec[2]."</td>";
			echo "<td>".$fec[3]."</td>";
			echo "<td>".$fec[4]."</td>";
			echo "<td>".$fec[5]."</td>";
			echo "<td>".$fec[6]."</td>";
			echo "<td><a href=update-stock.php?id=".$upid.">UPDATE</a></td>";
			echo "</tr>";
		}
		echo "</table>";
*/
//To SHOW THE REAL NAME IDENTIFICATION
		$que = mysql_query("SELECT insert_stock.ID,Bname,A_NO,size,clr,item,dealer FROM brand,article,size,color,dealer,insert_stock WHERE brand.ID = insert_stock.brand_ID AND article.ID=insert_stock.article_ID AND size.ID=insert_stock.size_ID AND color.ID=insert_stock.color_ID AND dealer.ID=insert_stock.dealer_ID
") or die("Error".mysql_error());
		echo "<table>";
		echo "<tr>";
		echo "
		<th>S/no</th>
		<th>Brand</th>
		<th>Article</th>
		<th>Size</th>
		<th>Color</th>
		<th>Piece's</th>
		<th>Dealer Name</th>";
		echo "</tr>";
		$counter = 1;
		while ($fec=mysql_fetch_array($que))
		{
			$upid = $fec[0];
			echo "<tr>";
			echo "<td>".$counter++."</td>";
			echo "<td>".$fec[1]."</td>";
			echo "<td>".$fec[2]."</td>";
			echo "<td>".$fec[3]."</td>";
			echo "<td>".$fec[4]."</td>";
			echo "<td>".$fec[5]."</td>";
			echo "<td>".$fec[6]."</td>";
			echo "<td><a href=update-stock.php?id=".$upid.">UPDATE</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	?>

</body>
</html>