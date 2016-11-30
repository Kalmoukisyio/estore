<?php
	session_start();
	$page_title="Cart";
	include 'layout_head.php';
 
	$action = isset($_GET['action']) ? $_GET['action'] : "";
	$name = isset($_GET['name']) ? $_GET['name'] : "";
 
	if($action=='removed')
	{
		echo "<div class='alert alert-info'>";
		echo "<strong>{$name}</strong> was removed from your cart!";
		echo "</div>";
	}
 
	else if($action=='quantity_updated')
	{
		echo "<div class='alert alert-info'>";
		echo "<strong>{$name}</strong> quantity was updated!";
		echo "</div>";
	}
 
	if(count($_SESSION['cart_items'])>0)
	{
		$cart_ids = "";
		foreach($_SESSION['cart_items'] as $id=>$value)
		{
			$cart_ids = $cart_ids . $id . ",";
		}
		$cart_ids = rtrim($cart_ids, ',');//remove last , 
 
		echo "<table class='table table-hover table-responsive table-bordered'>";
			echo "<tr>";
				echo "<th class='textAlignLeft'>Product Name</th>";
				echo "<th>Price (USD)</th>";
				echo "<th>Action</th>";
			echo "</tr>";
			$query = "SELECT id, name, price FROM products WHERE id IN ({$cart_ids}) ORDER BY name"; 
			$stmt = $mysql_con->prepare( $query );
			$stmt->execute(); 
			$total_price=0;
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
			{
				extract($row);
				echo "<tr>";
					echo "<td>{$name}</td>";
					echo "<td>&#36;{$price}</td>";
					echo "<td>";
						echo "<a href='remove_from_cart.php?id={$id}&name={$name}' class='btn btn-danger'>";
							echo "<span class='glyphicon glyphicon-remove'></span> Remove from cart";
						echo "</a>";
					echo "</td>";
				echo "</tr>";
				$total_price+=$price;
			}
			echo "<tr>";
                echo "<td><b>Total</b></td>";
                echo "<td>&#36;{$total_price}</td>";
                echo "<td>";
                    echo "<a href='#' class='btn btn-success'>";
                        echo "<span class='glyphicon glyphicon-shopping-cart'></span> Checkout";
                    echo "</a>";
                echo "</td>";
            echo "</tr>";
		echo "</table>";
	}
	else
	{
		echo "<div class='alert alert-danger'>";
			echo "<strong>No products found in your cart!</strong>";
		echo "</div>";
	} 
	include 'layout_foot.php';
?>