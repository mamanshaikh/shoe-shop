<?php
include('connection.php');


//UPDATE / CHANGE STOCK
if($_POST['up-stock-brand-id'] !="" && $_POST['up-stock-article-id'] !="")
{
	$up_stock_id=$_POST['up-stock-id'];
	$up_stock_brand_id=$_POST['up-stock-brand-id'];
	$up_stock_article_id=$_POST['up-stock-article-id'];
	$up_stock_item_id=$_POST['up-stock-item-id'];
	$up_stock_color_id=$_POST['up-stock-color-id'];
	$up_stock_size_id=$_POST['up-stock-size-id'];
	$up_stock_dealer_id=$_POST['up-stock-dealer-id'];
	$que = mysql_query("UPDATE `insert_stock` SET `brand_ID` = '$up_stock_brand_id', `article_ID` = '$up_stock_article_id', `item` = '$up_stock_item_id', `color_ID` = '$up_stock_color_id', `size_ID` = '$up_stock_size_id', `dealer_ID` = '$up_stock_dealer_id' WHERE `insert_stock`.`ID` = $up_stock_id") or die("Error".mysql_error()); 

	$location = 'view-stock.php';
}



//INSERT / ADD STOCK
elseif($_POST['brand-id'] !="" && $_POST['article-id'] !="")
{
	$brand_id=$_POST['brand-id'];
	$article_id=$_POST['article-id'];
	$item=$_POST['item'];
	$color_id=$_POST['color-id'];
	$size_id=$_POST['size-id'];
	$dealer_id=$_POST['dealer-id'];
	
	$que = mysql_query("INSERT INTO insert_stock(brand_id,article_id,item,color_id,size_id,dealer_id)VALUES('$brand_id','$article_id','$item','$color_id','$size_id','$dealer_id')") or die("Error".mysql_error());
	$location = 'view-stock.php';
}
	



//UPDATE ARTICLE
elseif($_POST['up-article'] !="" && $_POST['up-aid'] !="")
{
	$up_aid=$_POST['up-aid'];
	$up_article=$_POST['up-article'];
	$up_bid=$_POST['up-bid'];
	$que = mysql_query("UPDATE `article` SET `BID`=$up_bid, `A_No`='$up_article' WHERE ID = $up_aid") or die("Error".mysql_error());
	$location = 'add-article.php';
}


//UPDATE DEALER NAME
elseif($_POST['up-dealer-id'] !="" && $_POST['up-dealer-name'] !="")
{
	$up_dealer_id=$_POST['up-dealer-id'];
	$up_dealer_name=$_POST['up-dealer-name'];
	$que = mysql_query("UPDATE `dealer` SET `dealer`='$up_dealer_name' WHERE ID = $up_dealer_id") or die("Error".mysql_error());
	$location = 'add-dealer.php';
}


//UPDATE BRAND NAME
elseif($_POST['up-brandid'] !="" && $_POST['up-brand-name'] !="")
{
	$up_brand_id=$_POST['up-brandid'];
	$up_brand_name=$_POST['up-brand-name'];
	$que = mysql_query("UPDATE `brand` SET `Bname`='$up_brand_name' WHERE ID = $up_brand_id") or die("Error".mysql_error());
	$location = 'add-brand.php';
}



//UPDATE COLOR
elseif($_POST['up-clrid'] !="" && $_POST['up-clr'] !="")
{
	$up_clrid=$_POST['up-clrid'];
	$up_clr=$_POST['up-clr'];
	$que = mysql_query("UPDATE `color` SET `clr`='$up_clr' WHERE ID = $up_clrid") or die("Error".mysql_error());
	$location = 'add-color.php';
}



//INSERT / ADD BRAND
elseif($_POST['a-brand'] !="")
{
	$a_brand=$_POST['a-brand'];

	$que = "INSERT INTO brand(Bname)VALUES('$a_brand')";
	echo "Adding Brand Successful";
	$location ='add-brand.php';
}



//ADD ARTICLE
elseif($_POST['a-article'] !="" && $_POST['a-bid'] !="")
{
	$a_art=$_POST['a-article'];
	$a_bid=$_POST['a-bid'];

	$que = "INSERT INTO article(BID,A_No)VALUES('$a_bid','$a_art')";
	//echo "Adding Article Successful";
	$location ='add-article.php';
}



//ADD COLOR
elseif($_POST['a-color'] !="")
{
	$a_clr=$_POST['a-color'];

	$que = "INSERT INTO color(clr)VALUES('$a_clr')";
	echo "Adding Color Successful";
	$location ='add-color.php';
}



//ADD DEALER NAME 
elseif($_POST['a-dealer'] !="")
{
	$a_dlr=$_POST['a-dealer'];

	$que = "INSERT INTO dealer(dealer)VALUES('$a_dlr')";
	echo "Adding Dealer Successful";
	$location = 'add-dealer.php';
}



//DELETE ARTICLE
elseif($_REQUEST['id'] !="")
{
	$did = $_REQUEST['id'];
	$que= "delete from article where ID = ". $did;
	$location ='add-article.php';
}

mysql_query($que) or die("Error Occured".mysql_error());
header("location:". $location);
?>