<?php 
include 'connection.php';

// Function to fetch products based on the filter criteria
function fetchProducts($filter) {
    $q = "SELECT * FROM product INNER JOIN category USING(cat_id) WHERE $filter";
    $res = select($q);
    $count = 0; // Initialize a counter to keep track of the number of products in the row

    foreach($res as $row) {
        $count++; // Increment the counter for each product
        echo '<div style="width: 50%;" class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 p-b-35 isotope-item ' . $row['cat_name'] . '">';
        echo '<div class="block2">';
        echo '<div class="block2-pic hov-img0">';
        echo '<img src="uploads/' . $row['product_image'] . '" alt="IMG-PRODUCT">';
        echo '<a href="product-details.php?id=' . $row['product_id'] . '&pname=' . $row['product_name'] . '&rate=' . $row['product_price'] . '" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">';
        echo 'View';
        echo '</a>';
        echo '</div>';
        echo '<div class="block2-txt flex-w flex-t p-t-14">';
        echo '<div class="block2-txt-child1 flex-col-l">';
        echo '<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">';
        echo $row['product_name'];
        echo '</a>';
        echo '<span class="stext-105 cl3">';
        echo '₹ ' . $row['product_price'];
        echo '</span>';
        echo '</div>';
        echo '<div class="block2-txt-child2 flex-r p-t-3">';
        echo '<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">';
        echo '<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">';
        echo '<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">';
        echo '</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    if ($count === 0) {
        echo '<div class="col-12 text-center">No products found.</div>';
    }
}

// Default filter (Shirts)
$filter = "cat_name = 'Shirts'";

// Check if a filter is requested via POST
if (isset($_POST['filter'])) {
    $filter = $_POST['filter'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add your CSS and other head content here -->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body class="animsition">
    
    <!-- Header -->
    <?php include 'publicheader.php'; ?>

    <!-- Cart -->
    <?php include 'cart-side.php' ?>

    <!-- Product -->
    <div class="bg0 m-t-63 p-b-140">
        <div class="container">
            <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                        Shirts
                    </button>
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".Shirts">
                        Full sleeve
                    </button>
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".Dhotis">
                        Half sleeve
                    </button>
                </div>
                <div class="flex-w flex-c-m m-tb-10">
                    <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                        <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                        <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                         Sort
                    </div>
                    <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                        <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                        <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Search
                    </div>
                </div>
                <!-- Search product -->
                <div class="dis-none panel-search w-full p-t-10 p-b-15">
                    <div class="bor8 dis-flex p-l-15">
                        <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                        <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
                    </div>
                </div>
                <!-- Filter -->
                <div class="dis-none panel-filter w-full p-t-10">
                    <div class="wrap-filter flex-w bg6 w-100 p-lr-40 p-t-27 p-lr-15-sm">
                        <div class="filter-col1 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Sort By
                            </div>
                            <ul>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                        Default
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Full sleeve
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Half sleeve
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Price: Low to High
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04">
                                        Price: High to Low
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Grid -->
            <div class="row isotope-grid">
                <?php 
                // Display the products based on the filter
                fetchProducts($filter);
                ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'publicfooter.php' ?>

    <!-- Add your scripts and other HTML content here -->
</body>
</html>
