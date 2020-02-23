<?
namespace model;


class ProductFactory {

	private $products = array();
	private $json_products_file = '/../data/products.json';

	public function __construct () {
		$json_products = json_decode(  file_get_contents(dirname(__FILE__).$this->json_products_file )   );

		foreach ($json_products as $ref => $json_product) {
			$product = new Product($json_product->code, $json_product->description, $json_product->price );
			$this->products[$ref] = $product;
		}
	}


	public function getProduct($ref) {
		return $this->products[$ref];
	}

}

?>