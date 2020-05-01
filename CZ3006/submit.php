<!-- Backend PHP Code -->
<?php

	//Retrieving of form inputs 
	$customer = $_POST["cusName"];
	$apple = $_POST["apples"];
	$orange = $_POST["oranges"];
	$banana = $_POST["bananas"];
	$payment = $_POST["paymentMethod"];
	$totalCost = $_POST["totalCost"];

	//Opens order.txt or create a new order.txt if it does not exist 
	$myfile = fopen("order.txt", "w") or die("Unable to open file!");

	//Update quantity of fruits
	$txt = "Total number of apples : " . $apple;
	fwrite($myfile, $txt);
	$txt = "\r\nTotal number of oranges : " . $orange;
	fwrite($myfile, $txt);
	$txt = "\r\nTotal number of bananas : " . $banana;
	fwrite($myfile, $txt);

	//Store cotents to order.txt
	fclose($myfile);
?>

<!-- Frontend HTML Code -->
<html>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

	<head>
		<title>Order Confirmation :-)</title>
	</head>

	<body>
		<table align="left" width="30%" bgcolor="#FFFFFF">
			<tr>
				<td><h1>Receipt for <?php echo $customer; ?></h1></td>
			</tr>
			<!-- Name of Customer -->
			<tr>
				<th>Name: </th>
				<td> <?php echo $customer; ?></td>
			</tr>

			<!-- Fruits Ordered -->
			<tr>
				<th>No. of apples: </th>
				<td> <?php echo $apple; ?></td>
			</tr>
			<tr>
				<th>No. of oranges: </th>
				<td> <?php echo $orange; ?></td>
			</tr>
			<tr>
				<th>No. of bananas: </th>
				<td> <?php echo $banana; ?></td>
			</tr>

			<!-- Payment Method -->
			<tr>
				<th>Payment by: </th>
				<td> <?php echo $payment; ?></td>
			</tr>

			<!-- Grand Total Cost -->
			<tr>
				<th>Total Cost: </th>
				<td> $ <?php echo $totalCost; ?></td>
			</tr>
		</table>

	</body>
</html>