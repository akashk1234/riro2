<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Shoping Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body class="animsition">

	<!-- Header -->
	<?php include 'publicheader.php' ?>

	<!-- Cart -->
	<?php include 'cart-side.php' ?>


	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Shoping Cart
			</span>
		</div>
	</div>


	<!-- Shoping Cart -->
	<!-- PHP Code -->

	<form class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2"></th>
									<th class="column-3">Price</th>
									<!-- <th class="column-4">Quantity</th> -->
									<th class="column-5">Total</th>
								</tr>
								<?php
								// Initialize a variable to keep track of the total price
								$totalPrice = 0;

								// Initialize an array to store product quantities
								$productQuantities = [];

								$q = "SELECT product.product_id, product_name, product_image, product_price, SUM(quantity) as total_quantity FROM cart INNER JOIN product ON cart.product_id = product.product_id GROUP BY product.product_id";
								$res = select($q);

								foreach ($res as $row) {
									$productId = $row['product_id'];
									$productName = $row['product_name'];
									$productImage = $row['product_image'];

									// Convert the product price and total quantity to numbers (floats)
									$productPrice = (float) $row['product_price'];
									$totalQuantity = (float) $row['total_quantity'];

									$total = $productPrice * $totalQuantity; // Calculate the total for this product
								
									// Add the total for this product to the overall total
									$totalPrice += $total;

									// Store the product quantity in the array for later use
									$productQuantities[$productId] = $totalQuantity;

									echo '<tr class="table_row">';
									echo '<td class="column-1">';
									echo '<div class="how-itemcart1">';
									echo '<img src="uploads/' . $productImage . '" alt="IMG">';
									echo '</div>';
									echo '</td>';
									echo '<td class="column-2">' . $productName . '</td>';
									echo '<td class="column-3">' . $productPrice . '</td>';
									// echo '<td class="column-4">';
									// echo '<div class="wrap-num-product flex-w m-l-auto m-r-0">';
									// echo '<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">';
									// echo '<i class="fs-16 zmdi zmdi-minus"></i>';
									// echo '</div>';
								
									// echo '<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="' . $totalQuantity . '">';
								
									// echo '<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">';
									// echo '<i class="fs-16 zmdi zmdi-plus"></i>';
									// echo '</div>';
									// echo '</div>';
									// echo '</td>';
									echo '<td class="column-5">₹ ' . $total . '</td>';

									echo '</tr>';
								}

								// Display the overall total after the loop
								echo '<tr class="table_row">';
								echo '<td class="column-1"></td>';
								echo '<td class="column-2"></td>';
								echo '<td class="column-3"></td>';
								echo '<td class="column-4">Total:</td>';
								echo '<td class="column-5">₹ ' . $totalPrice . '</td>';
								echo '</tr>';
								?>

							</table>
						</div>
					</div>
				</div>
				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>
						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>
							<div class="size-209">
								<!-- Display the overall total price -->
								<span id="overall-total" class="mtext-110 cl2">₹
									<?php echo $totalPrice; ?>
								</span>
							</div>
						</div>


						</table>
					</div>

					<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
						

					<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
						<a href="checkout.php?total=<?php echo $totalPrice; ?>" style="color:inherit;">Proceed to Checkout</a>
					</button>
					</div>
				</div>
			</div>



			
		</div>
		</div>
	</form>

	<!-- Add this JavaScript code after your HTML content -->
	<!-- Add this JavaScript code after your HTML content -->
	<!-- Add this JavaScript code after your HTML content -->
	<!-- Add this JavaScript code after your HTML content -->
	<!-- <script>
	// Function to update the subtotal for a specific product
	function updateSubtotal(productId, productPrice) {
		var quantityInput = document.querySelector('input[name="num-product' + productId + '"]');
		var quantity = parseInt(quantityInput.value); // Parse the quantity as an integer
		var subtotal = productPrice * quantity;
		var subtotalElement = document.getElementById('subtotal-' + productId);
		subtotalElement.textContent = '$' + subtotal.toFixed(2); // Display the subtotal with two decimal places
	}

	// Function to update the overall total by summing up individual product subtotals
	function updateOverallTotal() {
		var overallTotal = 0;
		<?php foreach ($res as $row) { ?>
			var productId = <?php echo $row['product_id']; ?>;
			var productPrice = <?php echo $row['product_price']; ?>;
			var quantityInput = document.querySelector('input[name="num-product' + productId + '"]');
			var quantity = parseInt(quantityInput.value);
			var subtotal = productPrice * quantity;
			overallTotal += subtotal;
		<?php } ?>

		// Update the displayed overall total
		var overallTotalElement = document.getElementById('overall-total');
		overallTotalElement.textContent = '$' + overallTotal.toFixed(2);
	}

	// Add event listeners to quantity inputs
	<?php foreach ($res as $row) { ?>
		var productId = <?php echo $row['product_id']; ?>;
		var productPrice = <?php echo $row['product_price']; ?>;
		var quantityInput = document.querySelector('input[name="num-product' + productId + '"]');
		quantityInput.addEventListener('input', function() {
			updateSubtotal(productId, productPrice);
			updateOverallTotal();
		});
	<?php } ?>
</script> -->







	<!-- Footer -->
	<?php include 'publicfooter.php' ?>





</body>

</html>