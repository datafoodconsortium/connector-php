<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class PhoneNumberTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		

        $obj = new PhoneNumber(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	countryCode: -751506906,
        	phoneNumber: "ykrvmrtbcb"
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame(-751506906, $obj->getCountryCode());
		$this->assertSame("ykrvmrtbcb", $obj->getNumber());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new PhoneNumber(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$obj->setNumber("rxvnsbynwg");
		$this->assertSame("rxvnsbynwg", $obj->getNumber());
		
		
		
		$obj->setCountryCode(-1101652056);
		$this->assertSame(-1101652056, $obj->getCountryCode());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new PhoneNumber(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			countryCode: -751506906,
			phoneNumber: "ykrvmrtbcb"
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
