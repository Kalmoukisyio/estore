<?php

if(isset($_POST['submit']))
{	
	$host = "mysql1.000webhost.com";
	$db_name = "a1258492_store";
	$user = "a1258492_admin";
	$password = "kalmyo1";
	$conn = mysql_connect($host, $user, $password);
	$name = $_POST['product_name'];
	$price = $_POST['product_price'];
	$quantity = $_POST['product_quantity'];
	$query = "INSERT INTO products (name,price,quantity) VALUES ( '$name',$price,$quantity )";
	mysql_select_db('a1258492_store');
	$result = mysql_query( $query, $conn );
	if(! $result )
	{
		die('Could not enter data: ' . mysql_error());
	}
	mysql_close($conn);
}
else
{
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> </title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="css/layouts/side-menu.css">
    
</head>
<body>






<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="http://store.kalmyio.tk/products.php">Store</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="show_orders.php" class="pure-menu-link">Παραγγελίες</a></li>
                
				<li class="pure-menu-item"><a href="show_users.php" class="pure-menu-link">Χρήστες</a></li>
                
				
                <li class="pure-menu-item"><a href="show_products.php" class="pure-menu-link">Απόθεμα</a></li>
                <li class="pure-menu-item"><a href="add_new_product.php" class="pure-menu-link">Νέο Προϊόν</a></li>
                        
                    
                
				
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h2>Εισαγωγή νέου προϊόντος</h2>
			<br>
        </div>
		<div class="content">
		<center>
			<form class=pure-form method=post action=<?php $_PHP_SELF ?>>
				<fieldset class=pure-group>
					<input name=product_name type=text class=pure-input-1-2 placeholder=Όνομα>
					<input name=product_price type=text class=pure-input-1-2 placeholder=Τιμή>
					<input name=product_quantity type=text class=pure-input-1-2 placeholder=Απόθεμα>
				</fieldset>
				<button name=submit type=submit class="pure-button pure-input-1-2 pure-button-primary">Εισαγωγή</button>
			</form>
		</center>
		</div>
    </div>
</div>
<script src="js/ui.js"></script>
</body>
</html>