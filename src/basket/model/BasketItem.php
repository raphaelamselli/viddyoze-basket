<?
namespace Model;


class BasketItem {

	private Product $product;
	private $quantity = 0;


	public function setProduct($product) {
		if(! isset($this->product)) {
			$this->product = $product;
		} else {
			// TODO: Throw some kind of exception
		}
	}

	public function addProduct() {
		$this->quantity++;
	}

	public function getProduct() {
		return $this->product;
	}

	public function getQuantity():int {
		return $this->quantity;
	}

	public function to_string(): string {

		return $this->product->to_string()."\t".$this->quantity;	
	} 
	

}

?>