<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
</head>
<body>
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <br>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>	


<!DOCTYPE html>
<html>
<head>
	<title>Euro Shoes</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Long Life Foot Wear</h1>
	<br>
	<h2><a href="view-stock.php">View Stock</a></h2>
	<h3><a href="add-brand.php">Add Brand</a></h3>
	<h3><a href="add-article.php">Add Article</a></h3>	
	<h3><a href="add-color.php">Add Color</a></h3>
	<h3><a href="add-dealer.php">Add Dealer</a></h3>
</body>
</html>