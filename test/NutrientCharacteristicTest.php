<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class NutrientCharacteristicTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$kepnvzyxgg = new SKOSConcept(connector: $connector, semanticId: "http://base.com/lxrlarornj");
		
		$bwkrrqbuzu = new SKOSConcept(connector: $connector, semanticId: "http://base.com/bfynuxncbm");

        $obj = new NutrientCharacteristic(
            connector: $connector,
        	
        	unit: $kepnvzyxgg,
        	value: 0.32755965,
        	nutrientDimension: $bwkrrqbuzu
        );

        
		$this->assertSame($kepnvzyxgg, $obj->getQuantityUnit());
		$this->assertSame(0.32755965, $obj->getQuantityValue());
		$this->assertSame($bwkrrqbuzu, $obj->getQuantityDimension());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new NutrientCharacteristic(
            connector: $connector
        );

		
		$obj->setQuantityValue(0.29035258);
		$this->assertSame(0.29035258, $obj->getQuantityValue());
		
		
		$fdcnzmjwnt = new SKOSConcept(connector: $connector, semanticId: "http://base.com/zzbcwnovxl");
		$obj->setQuantityDimension($fdcnzmjwnt);
		$this->assertSame($fdcnzmjwnt, $obj->getQuantityDimension());
		
		
		$ppqjedxgpk = new SKOSConcept(connector: $connector, semanticId: "http://base.com/jfeafwvsqr");
		$obj->setQuantityUnit($ppqjedxgpk);
		$this->assertSame($ppqjedxgpk, $obj->getQuantityUnit());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new NutrientCharacteristic(
		    connector: $connector,
			
			unit: $kepnvzyxgg,
			value: 0.32755965,
			nutrientDimension: $bwkrrqbuzu
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
