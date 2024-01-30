<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class AllergenCharacteristicTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$kpsmwlmbre = new SKOSConcept(connector: $connector, semanticId: "http://base.com/jnnxlenrzy");
		
		$dxuzlcoake = new SKOSConcept(connector: $connector, semanticId: "http://base.com/fpndnkazrb");

        $obj = new AllergenCharacteristic(
            connector: $connector,
        	
        	unit: $kpsmwlmbre,
        	value: 0.32792687,
        	allergenDimension: $dxuzlcoake
        );

        
		$this->assertSame($kpsmwlmbre, $obj->getQuantityUnit());
		$this->assertSame(0.32792687, $obj->getQuantityValue());
		$this->assertSame($dxuzlcoake, $obj->getQuantityDimension());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new AllergenCharacteristic(
            connector: $connector
        );

		$fyaodtszzb = new SKOSConcept(connector: $connector, semanticId: "http://base.com/shuhxsuhqs");
		$obj->setQuantityUnit($fyaodtszzb);
		$this->assertSame($fyaodtszzb, $obj->getQuantityUnit());
		
		
		
		$obj->setQuantityValue(0.36073792);
		$this->assertSame(0.36073792, $obj->getQuantityValue());
		
		
		$xrrwmtvonc = new SKOSConcept(connector: $connector, semanticId: "http://base.com/gaxoppgpda");
		$obj->setQuantityDimension($xrrwmtvonc);
		$this->assertSame($xrrwmtvonc, $obj->getQuantityDimension());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new AllergenCharacteristic(
		    connector: $connector,
			
			unit: $kpsmwlmbre,
			value: 0.32792687,
			allergenDimension: $dxuzlcoake
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
