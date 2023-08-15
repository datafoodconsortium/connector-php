<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class PhysicalCharacteristicTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$itwovymcnq = new SKOSConcept(connector: $connector, semanticId: "http://base.com/bxwatynbyq");
		
		$ajqfszmeaa = new SKOSConcept(connector: $connector, semanticId: "http://base.com/kvfberdyor");

        $obj = new PhysicalCharacteristic(
            connector: $connector,
        	
        	unit: $itwovymcnq,
        	value: 0.009193957,
        	physicalDimension: $ajqfszmeaa
        );

        
		$this->assertSame($itwovymcnq, $obj->getQuantityUnit());
		$this->assertSame(0.009193957, $obj->getQuantityValue());
		$this->assertSame($ajqfszmeaa, $obj->getQuantityDimension());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new PhysicalCharacteristic(
            connector: $connector
        );

		
		$obj->setQuantityValue(0.30436456);
		$this->assertSame(0.30436456, $obj->getQuantityValue());
		
		
		$xzsreqqxry = new SKOSConcept(connector: $connector, semanticId: "http://base.com/gnjfzsaujj");
		$obj->setQuantityUnit($xzsreqqxry);
		$this->assertSame($xzsreqqxry, $obj->getQuantityUnit());
		
		
		$rfciclgbxj = new SKOSConcept(connector: $connector, semanticId: "http://base.com/kjefumeues");
		$obj->setQuantityDimension($rfciclgbxj);
		$this->assertSame($rfciclgbxj, $obj->getQuantityDimension());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new PhysicalCharacteristic(
		    connector: $connector,
			
			unit: $itwovymcnq,
			value: 0.009193957,
			physicalDimension: $ajqfszmeaa
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
