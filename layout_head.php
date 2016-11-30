<?php
	include 'config/db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
		<?php echo isset($page_title) ? $page_title : "The Code of a Ninja"; ?>
	</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
    <?php include 'navigation.php'; ?>
    <!-- container -->
    <div class="container">
        <div class="page-header">
            <h1><?php echo isset($page_title) ? $page_title : ""; ?></h1>
        </div>