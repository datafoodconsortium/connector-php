<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class NutrientCharacteristicTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$eqpdzousqa = new SKOSConcept(connector: $connector, semanticId: "http://base.com/fevprimosj");
		
		$tgbajzpsjb = new SKOSConcept(connector: $connector, semanticId: "http://base.com/zzsgbgwcdm");

        $obj = new NutrientCharacteristic(
            connector: $connector,
        	
        	unit: $eqpdzousqa,
        	value: 0.018144667,
        	nutrientDimension: $tgbajzpsjb
        );

        
		$this->assertSame($eqpdzousqa, $obj->getQuantityUnit());
		$this->assertSame(0.018144667, $obj->getQuantityValue());
		$this->assertSame($tgbajzpsjb, $obj->getQuantityDimension());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new NutrientCharacteristic(
            connector: $connector
        );

		
		$obj->setQuantityValue(0.30436456);
		$this->assertSame(0.30436456, $obj->getQuantityValue());
		
		
		$xzsreqqxry = new SKOSConcept(connector: $connector, semanticId: "http://base.com/gnjfzsaujj");
		$obj->setQuantityUnit($xzsreqqxry);
		$this->assertSame($xzsreqqxry, $obj->getQuantityUnit());
		
		
		$lxmnmxqwqe = new SKOSConcept(connector: $connector, semanticId: "http://base.com/ohtfttjptt");
		$obj->setQuantityDimension($lxmnmxqwqe);
		$this->assertSame($lxmnmxqwqe, $obj->getQuantityDimension());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new NutrientCharacteristic(
		    connector: $connector,
			
			unit: $eqpdzousqa,
			value: 0.018144667,
			nutrientDimension: $tgbajzpsjb
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
