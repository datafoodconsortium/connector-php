<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class AddressTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		
		
		

        $obj = new Address(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	street: "ytjlqvwhdb",
        	postalCode: "fzlfqvpjmg",
        	city: "xhzddzffrq",
        	country: "ekgwpxbqui"
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame("ytjlqvwhdb", $obj->getStreet());
		$this->assertSame("fzlfqvpjmg", $obj->getPostalCode());
		$this->assertSame("xhzddzffrq", $obj->getCity());
		$this->assertSame("ekgwpxbqui", $obj->getCountry());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Address(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$obj->setCountry("rxbczrqwmu");
		$this->assertSame("rxbczrqwmu", $obj->getCountry());
		
		
		
		$obj->setCity("ndxwcndzmn");
		$this->assertSame("ndxwcndzmn", $obj->getCity());
		
		
		
		$obj->setStreet("rsqcwzjcot");
		$this->assertSame("rsqcwzjcot", $obj->getStreet());
		
		
		
		$obj->setPostalCode("ukbhxiejre");
		$this->assertSame("ukbhxiejre", $obj->getPostalCode());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Address(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			street: "ytjlqvwhdb",
			postalCode: "fzlfqvpjmg",
			city: "xhzddzffrq",
			country: "ekgwpxbqui"
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
