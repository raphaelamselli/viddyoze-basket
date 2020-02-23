<?php
namespace Model;


class Basket {

	private $basketItems = array();
	private $delivery_charges ;

	public function __construct() {
		$this->delivery_charges = new DeliveryCharges();		
	}


	public function getBasketItems() {
		return $this->basketItems;
	}

	public function addProduct($product) {
		$item;

		if(  array_key_exists($product->getCode(), $this->basketItems) ) {
			$item = $this->basketItems[$product->getCode()];
		} else {
			$item = new BasketItem();
			$item->setProduct($product);
		}
		$item->addProduct();

		$this->basketItems[$product->getCode()] = $item; 

	}

	private function applyDiscounts():float {
		$df = new discounts\DiscountFactory();
		$discount_processors = $df->getDiscountProcessors();

		$discount = 0;

		foreach ($discount_processors as $discount_processor) {
			$discount += $discount_processor->getDiscount($this);
		}
		return $discount;
	}


	public function calculateTotal():float {
		$total = 0;
		foreach ($this->basketItems as $basketItem) {
			$total += $basketItem->getProduct()->getPrice() * $basketItem->getQuantity();
		}
		return $total;
	}

	public function to_string() {
		$returnString = "";

		foreach ($this->basketItems as $basketItem) {
			$returnString .= $basketItem->to_string()."\n";
		}

		$amount = $this->calculateTotal();
		$additional_discount = $this->applyDiscounts();
		$delivery_charge = $this->delivery_charges->getDeliveryCharge($amount-$additional_discount);
		
		$returnString .= "--------------------------------\n";
		$returnString .= "sub-total\t\t ".round($amount, 2, PHP_ROUND_HALF_DOWN)."\n";
		$returnString .= "delivery charge\t\t ".round($delivery_charge, 2, PHP_ROUND_HALF_DOWN)."\n";
		if($additional_discount != 0) {
			$returnString .= "Discount\t\t ".round($additional_discount, 2, PHP_ROUND_HALF_DOWN)."\n";
		}
		$returnString .= "--------------------------------\n";
		$returnString .= "total\t\t ".round($amount + $delivery_charge - $additional_discount, 2, PHP_ROUND_HALF_DOWN)."\n";


		
		return $returnString;
	}
}
?>