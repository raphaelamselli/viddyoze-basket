<?
require 'autoload.php';

use model\{ProductFactory, Basket};


function testBasket4() {

	$pf = new model\ProductFactory();
	$basket = new model\Basket;

	$product1 = $pf->getProduct("B01");
	$product2 = $pf->getProduct("B01");
	$product3 = $pf->getProduct("R01");
	$product4 = $pf->getProduct("R01");
	$product5 = $pf->getProduct("R01");

	$basket->addProduct($product1);
	$basket->addProduct($product2);
	$basket->addProduct($product3);
	$basket->addProduct($product4);
	$basket->addProduct($product5);


	print($basket->to_string());

}

testBasket4();

?>


