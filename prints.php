<?php include("inc/products.php");?><?php 
$pageTitle = "Full Product Catalog";
$section = "products";
include('inc/header.php'); ?>

	<div class="section products page">
		<div class="wrapper">
			<div class="row">
			<div class="small-8 columns">

				<ul class="products">
					<h1>Product Catelog</h1>
					<?php foreach($products as $product_id => $product) { 
							echo get_list_view_html($product_id, $product);
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php include('inc/footer.php'); ?>