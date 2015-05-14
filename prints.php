<?php

$products = array();
$products[101] = array(
	"name" => "Logo Shirt, Red",
	"img" => "img/stock/coffee.jpeg",
	"price" => 18	
);
$products[102] = array(
	"name" => "Mike the Frog Shirt, Black",
    "img" => "img/stock/horses.jpeg",
    "price" => 20
);
$products[103] = array(
    "name" => "Mike the Frog Shirt, Blue",
    "img" => "img/stock/market.jpg",    
    "price" => 20
);
$products[104] = array(
    "name" => "Logo Shirt, Green",
    "img" => "img/stock/sfo.jpeg",    
    "price" => 18);
$products[105] = array(
    "name" => "Mike the Frog Shirt, Yellow",
    "img" => "img/stock/stars.jpeg",    
    "price" => 25
);
$products[106] = array(
    "name" => "Logo Shirt, Gray",
    "img" => "img/stock/street.jpeg",    
    "price" => 20
);
$products[107] = array(
    "name" => "Logo Shirt, Turquoise",
    "img" => "img/stock/subway.jpeg",    
    "price" => 20
);
$products[108] = array(
    "name" => "Logo Shirt, Orange",
    "img" => "img/stock/tiger.jpeg",    
    "price" => 25,
);

?><?php 
$pageTitle = "Full Product Catalog";
$section = "products";
include('inc/header.php'); ?>

	<div class="section shirts page">
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