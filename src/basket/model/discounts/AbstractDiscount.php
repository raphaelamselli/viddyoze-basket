<?
namespace model\discounts;

abstract class AbstractDiscount {
	abstract public function getDiscount($basket):float;	
}

?>