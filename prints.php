<?php

$products = array();
$products[101] = array(
	"name" => "Morning Coffee",
	"img" => "img/stock/coffee.jpeg",
	"price" => 18	
);
$products[102] = array(
	"name" => "Lil' Sebastian",
    "img" => "img/stock/horses.jpeg",
    "price" => 20
);
$products[103] = array(
    "name" => "Market",
    "img" => "img/stock/market.jpg",    
    "price" => 20
);
$products[104] = array(
    "name" => "san fran",
    "img" => "img/stock/sfo.jpeg",    
    "price" => 18);
$products[105] = array(
    "name" => "Time Lapse",
    "img" => "img/stock/stars.jpeg",    
    "price" => 25
);
$products[106] = array(
    "name" => "Street",
    "img" => "img/stock/street.jpeg",    
    "price" => 20
);
$products[107] = array(
    "name" => "Morning Commute",
    "img" => "img/stock/subway.jpeg",    
    "price" => 20
);
$products[108] = array(
    "name" => "Tiger",
    "img" => "img/stock/tiger.jpeg",    
    "price" => 25,
);

?><?php 
$pageTitle = "Full Product Catalog";
$section = "products";
include('inc/header.php'); ?>

	<div class="section products page">
		<div class="wrapper">
			<div class="row">
			<div class="small-8 columns">

				<ul class="products">
					<h1>Product Catelog</h1>
					<?php foreach($products as $product) { 
							echo '<li>';
							echo '<a href="#">';
							echo '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
							echo "<p>View Details</p>";
							echo "</a>";
							echo "</li>";
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php include('inc/footer.php'); ?>