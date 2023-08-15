<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class PriceTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		
		$hdjkfqdnzp = new SKOSConcept(connector: $connector, semanticId: "http://base.com/pledvbhsyc");

        $obj = new Price(
            connector: $connector,
        	
        	value: 0.28559244,
        	vatRate: 0.98041385,
        	unit: $hdjkfqdnzp
        );

        
		$this->assertSame(0.28559244, $obj->getQuantityValue());
		$this->assertSame(0.98041385, $obj->getVatRate());
		$this->assertSame($hdjkfqdnzp, $obj->getQuantityUnit());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Price(
            connector: $connector
        );

		
		$obj->setVatRate(0.040436566);
		$this->assertSame(0.040436566, $obj->getVatRate());
		
		
		$yuobjwfazp = new SKOSConcept(connector: $connector, semanticId: "http://base.com/gnjfzsaujj");
		$obj->setQuantityUnit($yuobjwfazp);
		$this->assertSame($yuobjwfazp, $obj->getQuantityUnit());
		
		
		
		$obj->setQuantityValue(0.83337075);
		$this->assertSame(0.83337075, $obj->getQuantityValue());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Price(
		    connector: $connector,
			
			value: 0.28559244,
			vatRate: 0.98041385,
			unit: $hdjkfqdnzp
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
