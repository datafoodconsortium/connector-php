<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class AllergenCharacteristicTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$ghukiuckkt = new SKOSConcept(connector: $connector, semanticId: "http://base.com/nnuwborfvp");
		
		$xgsoguuhur = new SKOSConcept(connector: $connector, semanticId: "http://base.com/kblsipmyxq");

        $obj = new AllergenCharacteristic(
            connector: $connector,
        	
        	unit: $ghukiuckkt,
        	value: 0.560771,
        	allergenDimension: $xgsoguuhur
        );

        
		$this->assertSame($ghukiuckkt, $obj->getQuantityUnit());
		$this->assertSame(0.560771, $obj->getQuantityValue());
		$this->assertSame($xgsoguuhur, $obj->getQuantityDimension());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new AllergenCharacteristic(
            connector: $connector
        );

		
		$obj->setQuantityValue(0.30436456);
		$this->assertSame(0.30436456, $obj->getQuantityValue());
		
		
		$xzsreqqxry = new SKOSConcept(connector: $connector, semanticId: "http://base.com/gnjfzsaujj");
		$obj->setQuantityUnit($xzsreqqxry);
		$this->assertSame($xzsreqqxry, $obj->getQuantityUnit());
		
		
		$yrhdjrtned = new SKOSConcept(connector: $connector, semanticId: "http://base.com/mjuvvodwoc");
		$obj->setQuantityDimension($yrhdjrtned);
		$this->assertSame($yrhdjrtned, $obj->getQuantityDimension());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new AllergenCharacteristic(
		    connector: $connector,
			
			unit: $ghukiuckkt,
			value: 0.560771,
			allergenDimension: $xgsoguuhur
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
