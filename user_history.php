<html>
<head>
	<title>Purchase History</title>
	</head>
	<body>
		<h2>Purchase History</h2>
		 <table>
		 	<tr>
		 	<td><b>OrderID</b></td>	
		 	<td><b>UserID</b></td>	
		 	<td><b>ItemID</b></td>	
		 	<td><b>Item Name</b></td>	
		 	<td><b>Price</b></td>	
		 	<td><b>Quantity</b></td>	
		 	<td><b>Status</b></td>	
		 	<td><b>Timestamp</b></td>	
		 	</tr>

		 	<?php foreach ($data as $va ) { ?>
		 		<tr>
		 			<td>
		 				<?php echo $va->OrderID ?>
		 			</td>
		 			<td>
		 				<?php echo $va->UserID ?>
		 			</td>
		 			<td>
		 				<?php echo $va->ItemID ?>
		 			</td>
		 			<td>
		 				<?php echo $va->ItemName ?>
		 			</td>
		 			<td>
		 				<?php echo $va->OrderID ?>
		 			</td>
		 			<td>
		 				<?php echo $va->Quantity ?>
		 			</td>
		 			<td>
		 				<?php echo $va->Status ?>
		 			</td>
		 			<td>
		 				<?php echo $va->timestamp ?>
		 			</td>
		 		</tr>

		 		<?php } ?>
		 </table>
</body>
</html>