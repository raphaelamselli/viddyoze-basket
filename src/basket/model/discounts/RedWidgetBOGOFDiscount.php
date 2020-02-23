<?
namespace model\discounts;

class RedWidgetBOGOFDiscount extends AbstractDiscount {
	
	//2n --> n + n/2


	public function getDiscount($basket):float{
		$discount = 0;

		foreach ($basket->getBasketItems() as $basketItem) {
			if( $basketItem->getProduct()->getCode() === "R01" ) {
				$quantity = $basketItem->getQuantity();
				if($quantity % 2 == 1) {
					$quantity--;
				}
				$discount = $quantity / 4 * $basketItem->getProduct()->getPrice();
				return $discount;
			}
		}
		return $discount;
	}
}

?>