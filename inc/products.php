<?php

function get_list_view_html($product_id, $product) {
    
    $output = "";
    $output = $output . '<li>';
    $output = $output . '<a href="print.php?id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . "<p>View Details</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";
    return $output;
}



    
    try {
        require("database.php");
        $results = $db->query("SELECT name, price, img, sku FROM products");
    } catch (Exception $e) {
        echo "query failed";
    }
    
    $products = $results->fetchAll(PDO::FETCH_ASSOC);
    return $products;



// $products = array();
// $products[101] = array(
// 	"name" => "Morning Coffee",
// 	"img" => "img/stock/coffee.jpeg",
// 	"price" => 18,
//     "paypal" => "DXMEVPUNV57M8"
// );
// $products[102] = array(
// 	"name" => "Lil' Sebastian",
//     "img" => "img/stock/horses.jpeg",
//     "price" => 20,
//     "paypal" => "E4DQNWZYVXGRN"
// );
// $products[103] = array(
//     "name" => "Market",
//     "img" => "img/stock/market.jpg",    
//     "price" => 20,
//     "paypal" => "NEWHJG7SRAVSY"
// );
// $products[104] = array(
//     "name" => "SFO",
//     "img" => "img/stock/sfo.jpeg",    
//     "price" => 18,
//     "paypal" => "4HG89KWAFKLWJ"
//     );
// $products[105] = array(
//     "name" => "Time Lapse",
//     "img" => "img/stock/stars.jpeg",    
//     "price" => 25,
//     "paypal" => "3CTFWYEN25FWJ"
// );
// $products[106] = array(
//     "name" => "Street",
//     "img" => "img/stock/street.jpeg",    
//     "price" => 20,
//     "paypal" => "YTHXYNB3ZVGQS"
// );
// $products[107] = array(
//     "name" => "Morning Commute",
//     "img" => "img/stock/subway.jpeg",    
//     "price" => 20,
//     "paypal" => "TDPLTC29784CW"
// );
// $products[108] = array(
//     "name" => "Tiger",
//     "img" => "img/stock/tiger.jpeg",    
//     "price" => 25,
//     "paypal" => "3STT43UGCA9UN"
// );

?>