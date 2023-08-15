<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class QuantitativeValueTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$wuajnikccw = new SKOSConcept(connector: $connector, semanticId: "http://base.com/xwtokmhxxd");
		

        $obj = new QuantitativeValue(
            connector: $connector,
        	
        	unit: $wuajnikccw,
        	value: 0.7816849
        );

        
		$this->assertSame($wuajnikccw, $obj->getQuantityUnit());
		$this->assertSame(0.7816849, $obj->getQuantityValue());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new QuantitativeValue(
            connector: $connector
        );

		
		$obj->setQuantityValue(0.30436456);
		$this->assertSame(0.30436456, $obj->getQuantityValue());
		
		
		$xzsreqqxry = new SKOSConcept(connector: $connector, semanticId: "http://base.com/gnjfzsaujj");
		$obj->setQuantityUnit($xzsreqqxry);
		$this->assertSame($xzsreqqxry, $obj->getQuantityUnit());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new QuantitativeValue(
		    connector: $connector,
			
			unit: $wuajnikccw,
			value: 0.7816849
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
