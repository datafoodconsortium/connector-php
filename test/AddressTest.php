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
        	street: "tbneptjcgc",
        	postalCode: "vrfxzaweeq",
        	city: "xsecwjlcbc",
        	country: "xwuixpfmmw",
        	latitude: 0.49003834,
        	longitude: 0.07631463,
        	region: "frfngbbbyf"
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame("tbneptjcgc", $obj->getStreet());
		$this->assertSame("vrfxzaweeq", $obj->getPostalCode());
		$this->assertSame("xsecwjlcbc", $obj->getCity());
		$this->assertSame("xwuixpfmmw", $obj->getCountry());
		$this->assertSame(0.49003834, $obj->getLatitude());
		$this->assertSame(0.07631463, $obj->getLongitude());
		$this->assertSame("frfngbbbyf", $obj->getRegion());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Address(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$obj->setCountry("jwjhmcvinn");
		$this->assertSame("jwjhmcvinn", $obj->getCountry());
		
		
		
		$obj->setLatitude(0.23915607);
		$this->assertSame(0.23915607, $obj->getLatitude());
		
		
		
		$obj->setLongitude(0.8051377);
		$this->assertSame(0.8051377, $obj->getLongitude());
		
		
		
		$obj->setRegion("yliteagizt");
		$this->assertSame("yliteagizt", $obj->getRegion());
		
		
		
		$obj->setStreet("nfcyubgvjo");
		$this->assertSame("nfcyubgvjo", $obj->getStreet());
		
		
		
		$obj->setCity("hlmuhgxius");
		$this->assertSame("hlmuhgxius", $obj->getCity());
		
		
		
		$obj->setPostalCode("bdmeczkbeg");
		$this->assertSame("bdmeczkbeg", $obj->getPostalCode());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Address(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			street: "tbneptjcgc",
			postalCode: "vrfxzaweeq",
			city: "xsecwjlcbc",
			country: "xwuixpfmmw",
			latitude: 0.49003834,
			longitude: 0.07631463,
			region: "frfngbbbyf"
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
