<?
namespace model;


class DeliveryCharges {

	private $delivery_charges = array();
	private $json_products_file = '/../data/delivery_charges.json';

	public function __construct () {
		$this->delivery_charges = json_decode(  file_get_contents(dirname(__FILE__).$this->json_products_file )   );
	}


	public function getDeliveryCharge($amount):float {
		$charge;

		foreach ($this->delivery_charges as $ref => $delivery_charge) {

			$min = $delivery_charge->min;
			$max = $delivery_charge->max;
			if(!isset($delivery_charge->min))  {
				$min = $amount-1;
			}
			if(!isset($delivery_charge->max))  {
				$max = $amount+1;
			}

			if($amount >= $min && $amount < $max) {
				$charge = $delivery_charge->cost;
				break;
			}

		}
		return $charge;
	}
}

?>