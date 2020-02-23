<?
require 'autoload.php';

use model\{ProductFactory, Basket};



function testBasket2() {

	$pf = new model\ProductFactory();
	$basket = new model\Basket;

	$product1 = $pf->getProduct("R01");
	$product2 = $pf->getProduct("R01");

	$basket->addProduct($product1);
	$basket->addProduct($product2);

	print($basket->to_string());
}



testBasket2();

?>


