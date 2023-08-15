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
        	street: "mcktboibfz",
        	postalCode: "jlchwargva",
        	city: "xyyftdzemf",
        	country: "hhrvpivaho"
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame("mcktboibfz", $obj->getStreet());
		$this->assertSame("jlchwargva", $obj->getPostalCode());
		$this->assertSame("xyyftdzemf", $obj->getCity());
		$this->assertSame("hhrvpivaho", $obj->getCountry());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Address(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$obj->setCountry("vshdythkln");
		$this->assertSame("vshdythkln", $obj->getCountry());
		
		
		
		$obj->setCity("yxyztbrucn");
		$this->assertSame("yxyztbrucn", $obj->getCity());
		
		
		
		$obj->setPostalCode("balqzulvwj");
		$this->assertSame("balqzulvwj", $obj->getPostalCode());
		
		
		
		$obj->setStreet("betcqlvela");
		$this->assertSame("betcqlvela", $obj->getStreet());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Address(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			street: "mcktboibfz",
			postalCode: "jlchwargva",
			city: "xyyftdzemf",
			country: "hhrvpivaho"
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
