<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class NutrientCharacteristicTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$suofwuscpv = new SKOSConcept(connector: $connector, semanticId: "http://base.com/oejlenjmsl");
		
		$qjopncmbza = new SKOSConcept(connector: $connector, semanticId: "http://base.com/ikljpsjuij");

        $obj = new NutrientCharacteristic(
            connector: $connector,
        	
        	unit: $suofwuscpv,
        	value: 0.2998556,
        	nutrientDimension: $qjopncmbza
        );

        
		$this->assertSame($suofwuscpv, $obj->getQuantityUnit());
		$this->assertSame(0.2998556, $obj->getQuantityValue());
		$this->assertSame($qjopncmbza, $obj->getQuantityDimension());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new NutrientCharacteristic(
            connector: $connector
        );

		$fyaodtszzb = new SKOSConcept(connector: $connector, semanticId: "http://base.com/shuhxsuhqs");
		$obj->setQuantityUnit($fyaodtszzb);
		$this->assertSame($fyaodtszzb, $obj->getQuantityUnit());
		
		
		$wkjxstwqcc = new SKOSConcept(connector: $connector, semanticId: "http://base.com/toxqemihur");
		$obj->setQuantityDimension($wkjxstwqcc);
		$this->assertSame($wkjxstwqcc, $obj->getQuantityDimension());
		
		
		
		$obj->setQuantityValue(0.36073792);
		$this->assertSame(0.36073792, $obj->getQuantityValue());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new NutrientCharacteristic(
		    connector: $connector,
			
			unit: $suofwuscpv,
			value: 0.2998556,
			nutrientDimension: $qjopncmbza
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
