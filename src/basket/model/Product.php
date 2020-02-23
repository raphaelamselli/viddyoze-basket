<?
namespace Model;

class Product {

	private $code = "";
	private $description = "";
	private $price = 0;


	public function __construct($code, $description, $price) {
		$this->code = $code;
		$this->description = $description;
		$this->price = $price;
	}

	public function getCode(): string  {
		return $this->code;
	}

	public function getPrice():float {
		return $this->price;
	}

	public function to_string(): string  {
		return $this->description."[".$this->code."]\t".$this->price;
	}


}

?>