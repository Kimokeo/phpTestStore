CREATE DATABASE `printsnstuff` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE `printsnstuff`;

CREATE TABLE IF NOT EXISTS `products` (
  `sku` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `paypal` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(101, 'Morning Coffee', 'img/stock/coffee.jpeg', 18.00, 'DXMEVPUNV57M8');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(102, 'Lil Sebastian', 'img/stock/horses.jpeg', 20.00, 'E4DQNWZYVXGRN');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(103, 'Market', 'img/stock/market.jpg', 20.00, 'NEWHJG7SRAVSY');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(104, 'SFO', 'img/stock/sfo.jpeg', 18.00, '4HG89KWAFKLWJ');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(105, 'Time Lapse', 'img/stock/stars.jpeg', 25.00, '3CTFWYEN25FWJ');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(106, 'Street', 'img/stock/street.jpeg', 20.00, 'YTHXYNB3ZVGQS');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(107, 'Morning Commute', 'img/stock/subway.jpeg', 20.00, 'TDPLTC29784CW');
INSERT INTO `products` (`sku`, `name`, `img`, `price`, `paypal`) VALUES(108, 'Tiger', 'img/stock/tiger.jpeg', 25.00, '3STT43UGCA9UN');


-- To create php data object PDO(location, username, password)
-- example
-- <?php
-- try {
-- 	$db = new PDO("mysql:host=localhost;dbname=printsnstuff;port=8889","root","root");
-- 	var_dump($db);
-- } catch (Exception $e){
-- 	echo "There was an error connecting to the database.";
-- 	exit;
-- }
-- echo "Success!";
-- ?>