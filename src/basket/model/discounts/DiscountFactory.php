<?
namespace model\discounts;

class DiscountFactory {
	
	private $discounts = array();
	private $json_discounts_file = '/../../data/discounts.json';

	public function __construct () {
		$json_discounts = json_decode(  file_get_contents(dirname(__FILE__).$this->json_discounts_file )   );

		foreach ($json_discounts->discounts as $json_discount) {
			$discount = new $json_discount();
			$this->discounts[$json_discount] = $discount;
		}


	}

	public function getDiscountProcessors() {
			//print_r($this->discounts);
			//print("bla");
		return $this->discounts;
	}	

}

?>