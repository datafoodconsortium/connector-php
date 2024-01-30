<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class QuantitativeValueTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$xhpcbgybdy = new SKOSConcept(connector: $connector, semanticId: "http://base.com/ozujneenri");
		

        $obj = new QuantitativeValue(
            connector: $connector,
        	
        	unit: $xhpcbgybdy,
        	value: 0.7560219
        );

        
		$this->assertSame($xhpcbgybdy, $obj->getQuantityUnit());
		$this->assertSame(0.7560219, $obj->getQuantityValue());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new QuantitativeValue(
            connector: $connector
        );

		$fyaodtszzb = new SKOSConcept(connector: $connector, semanticId: "http://base.com/shuhxsuhqs");
		$obj->setQuantityUnit($fyaodtszzb);
		$this->assertSame($fyaodtszzb, $obj->getQuantityUnit());
		
		
		
		$obj->setQuantityValue(0.36073792);
		$this->assertSame(0.36073792, $obj->getQuantityValue());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new QuantitativeValue(
		    connector: $connector,
			
			unit: $xhpcbgybdy,
			value: 0.7560219
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
