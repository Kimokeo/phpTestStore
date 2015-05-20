<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="foundation/css/foundation.min.css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
<div id="header">
	<div class="row">
			<div class="medium-6 columns"><h2><a href="./" style="color:black">Prints n Stuff</a></h2></div>
				<div class="medium-2 columns">
				<h2><a href="prints.php" style="color:black" class='<?php if ($section == "products") {echo "on";}?>'>Products</a></h2>
				</div>
				<div class="medium-2 columns">
				<h2><a href="contact.php" style="color:black" class='<?php if ($section == "contact") {echo "on";}?>'>Contact</a></h2>
				</div>
				<div class="medium-2 columns">
				<h2><a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&business=7HYMCJCSYTRT4&display=1" style="color:black" >Cart</a></h2>
				</div>
			
	</div>
</div>


<!-- 	<div id="content"> -->