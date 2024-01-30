<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class PhysicalCharacteristicTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$bamhsdxybq = new SKOSConcept(connector: $connector, semanticId: "http://base.com/zfoeqjvfdc");
		
		$kjjkyqwhif = new SKOSConcept(connector: $connector, semanticId: "http://base.com/asyqavquzy");

        $obj = new PhysicalCharacteristic(
            connector: $connector,
        	
        	unit: $bamhsdxybq,
        	value: 0.052755952,
        	physicalDimension: $kjjkyqwhif
        );

        
		$this->assertSame($bamhsdxybq, $obj->getQuantityUnit());
		$this->assertSame(0.052755952, $obj->getQuantityValue());
		$this->assertSame($kjjkyqwhif, $obj->getQuantityDimension());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new PhysicalCharacteristic(
            connector: $connector
        );

		$mbrpqhezou = new SKOSConcept(connector: $connector, semanticId: "http://base.com/luvqamocch");
		$obj->setQuantityDimension($mbrpqhezou);
		$this->assertSame($mbrpqhezou, $obj->getQuantityDimension());
		
		
		$fyaodtszzb = new SKOSConcept(connector: $connector, semanticId: "http://base.com/shuhxsuhqs");
		$obj->setQuantityUnit($fyaodtszzb);
		$this->assertSame($fyaodtszzb, $obj->getQuantityUnit());
		
		
		
		$obj->setQuantityValue(0.36073792);
		$this->assertSame(0.36073792, $obj->getQuantityValue());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new PhysicalCharacteristic(
		    connector: $connector,
			
			unit: $bamhsdxybq,
			value: 0.052755952,
			physicalDimension: $kjjkyqwhif
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
