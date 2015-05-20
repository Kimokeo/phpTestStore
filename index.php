<?php 
require_once("inc/config.php");
include(ROOT_PATH . "inc/products.php");
$pageTitle = "Prints n Stuff";
include('inc/header.php'); ?>

		<div class="section banner">

			<div class="wrapper">


			</div>

		</div>

		<div class="section products latest">

			<div class="wrapper">

				<h2>Latest Products</h2>
				<?php include("inc/products.php"); ?>
				<ul class="products">
					<?php 
						$total_products = count($products);
						$position = 0;
						$list_view_html = "";
						foreach($products as $product_id => $product) { 
							$position = $position + 1;
							if ($total_products - $position < 4) {
								$list_view_html = $list_view_html . get_list_view_html($product_id, $product);
							}
						}
						echo $list_view_html;
					?>
				</ul>

			</div>

		</div>

<?php include('inc/footer.php'); ?>