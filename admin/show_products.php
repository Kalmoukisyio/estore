<!doctype html>
<html lang="gr" >
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> </title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="css/layouts/side-menu.css">
    
</head>
<body>
<style scoped>
		.button-success {
            background: rgb(28, 184, 65); /* this is a green */
        }
        .button-error {
            background: rgb(202, 60, 60); /* this is a maroon */
        }
        .button-secondary {
            background: rgb(66, 184, 221); /* this is a light blue */
        }
    </style>





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
            <h2>Εμφάνιση προϊόντων</h2>
						<br>
        </div>
		<div class="content">
	<table align="center" class="pure-table pure-table-horizontal">
    <thead>
        <tr>
						<th>id</th>
            <th>Όνομα</th>
            <th>Τιμή</th>
            <th>Απόθεμα</th>
						<th>Ενέργεια</th>
        </tr>
    </thead>
	<?php 
	
	$host = "mysql1.000webhost.com";
	$db_name = "a1258492_store";
	$user = "a1258492_admin";
	$password = "kalmyo1";
	$conn = mysql_connect($host, $user, $password);
	
	$query = 'SELECT id,name,price,quantity FROM products';
	mysql_select_db($db_name);

	$result = mysql_query( $query, $conn );
	mysql_query("SET CHARACTER SET utf8", $conn);
	if(! $result )
	{
		die('Could not get data: ' . mysql_error());
	}
	echo "<tbody>";
	while($row = mysql_fetch_array($result))
	{
		$id =$row['id'];
		$name=$row['name'];
		$price=$row['price'];
		$quantity=$row['quantity'];
		echo "    <tr>";
		echo "        <td> $id </td>";
		echo "        <td> $name </td>";
		echo "        <td> $price </td>";
		echo "        <td> $quantity </td>";
		echo "	      <td> <button name=delete class='button-error pure-button'>Διαγραφή </button> <button name=edit class='button-secondary pure-button'>Επεξεργασία</button> </td>";
		echo "    </tr>";
	} 
    echo "</tbody>";
	?>
    </table>
		</div>
    </div>
</div>





<script src="js/ui.js"></script>


</body>
</html>
