<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class AllergenCharacteristicTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$nuvtggzehc = new SKOSConcept(connector: $connector, semanticId: "http://base.com/cwoizillmw");
		
		$iofjjqkkoa = new SKOSConcept(connector: $connector, semanticId: "http://base.com/gbkmqbzxrb");

        $obj = new AllergenCharacteristic(
            connector: $connector,
        	
        	unit: $nuvtggzehc,
        	value: 0.39204526,
        	allergenDimension: $iofjjqkkoa
        );

        
		$this->assertSame($nuvtggzehc, $obj->getQuantityUnit());
		$this->assertSame(0.39204526, $obj->getQuantityValue());
		$this->assertSame($iofjjqkkoa, $obj->getQuantityDimension());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new AllergenCharacteristic(
            connector: $connector
        );

		$xexqhaycwk = new SKOSConcept(connector: $connector, semanticId: "http://base.com/ivbweuqpvv");
		$obj->setQuantityDimension($xexqhaycwk);
		$this->assertSame($xexqhaycwk, $obj->getQuantityDimension());
		
		
		
		$obj->setQuantityValue(0.29035258);
		$this->assertSame(0.29035258, $obj->getQuantityValue());
		
		
		$ppqjedxgpk = new SKOSConcept(connector: $connector, semanticId: "http://base.com/jfeafwvsqr");
		$obj->setQuantityUnit($ppqjedxgpk);
		$this->assertSame($ppqjedxgpk, $obj->getQuantityUnit());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new AllergenCharacteristic(
		    connector: $connector,
			
			unit: $nuvtggzehc,
			value: 0.39204526,
			allergenDimension: $iofjjqkkoa
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
