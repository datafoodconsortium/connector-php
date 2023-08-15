<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class QuantityTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$rxxiqdvdvc = new SKOSConcept(connector: $connector, semanticId: "http://base.com/cunkbkctjd");
		

        $obj = new Quantity(
            connector: $connector,
        	
        	unit: $rxxiqdvdvc,
        	value: 0.53388315
        );

        
		$this->assertSame($rxxiqdvdvc, $obj->getQuantityUnit());
		$this->assertSame(0.53388315, $obj->getQuantityValue());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Quantity(
            connector: $connector
        );

		$ekxfsycaop = new SKOSConcept(connector: $connector, semanticId: "http://base.com/gnjfzsaujj");
		$obj->setQuantityUnit($ekxfsycaop);
		$this->assertSame($ekxfsycaop, $obj->getQuantityUnit());
		
		
		
		$obj->setQuantityValue(0.18479455);
		$this->assertSame(0.18479455, $obj->getQuantityValue());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Quantity(
		    connector: $connector,
			
			unit: $rxxiqdvdvc,
			value: 0.53388315
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
