<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class PhysicalCharacteristicTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$wxlzohugue = new SKOSConcept(connector: $connector, semanticId: "http://base.com/uurkplynly");
		
		$qxegzaxmky = new SKOSConcept(connector: $connector, semanticId: "http://base.com/jeggppdwdr");

        $obj = new PhysicalCharacteristic(
            connector: $connector,
        	
        	unit: $wxlzohugue,
        	value: 0.94739044,
        	physicalDimension: $qxegzaxmky
        );

        
		$this->assertSame($wxlzohugue, $obj->getQuantityUnit());
		$this->assertSame(0.94739044, $obj->getQuantityValue());
		$this->assertSame($qxegzaxmky, $obj->getQuantityDimension());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new PhysicalCharacteristic(
            connector: $connector
        );

		$qbsyssgqzi = new SKOSConcept(connector: $connector, semanticId: "http://base.com/jqydrylnum");
		$obj->setQuantityDimension($qbsyssgqzi);
		$this->assertSame($qbsyssgqzi, $obj->getQuantityDimension());
		
		
		
		$obj->setQuantityValue(0.29035258);
		$this->assertSame(0.29035258, $obj->getQuantityValue());
		
		
		$ppqjedxgpk = new SKOSConcept(connector: $connector, semanticId: "http://base.com/jfeafwvsqr");
		$obj->setQuantityUnit($ppqjedxgpk);
		$this->assertSame($ppqjedxgpk, $obj->getQuantityUnit());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new PhysicalCharacteristic(
		    connector: $connector,
			
			unit: $wxlzohugue,
			value: 0.94739044,
			physicalDimension: $qxegzaxmky
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
