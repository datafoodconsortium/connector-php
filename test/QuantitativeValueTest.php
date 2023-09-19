<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class QuantitativeValueTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$nzeohghuwt = new SKOSConcept(connector: $connector, semanticId: "http://base.com/qmsluaibyc");
		

        $obj = new QuantitativeValue(
            connector: $connector,
        	
        	unit: $nzeohghuwt,
        	value: 0.014794886
        );

        
		$this->assertSame($nzeohghuwt, $obj->getQuantityUnit());
		$this->assertSame(0.014794886, $obj->getQuantityValue());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new QuantitativeValue(
            connector: $connector
        );

		
		$obj->setQuantityValue(0.29035258);
		$this->assertSame(0.29035258, $obj->getQuantityValue());
		
		
		$ppqjedxgpk = new SKOSConcept(connector: $connector, semanticId: "http://base.com/jfeafwvsqr");
		$obj->setQuantityUnit($ppqjedxgpk);
		$this->assertSame($ppqjedxgpk, $obj->getQuantityUnit());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new QuantitativeValue(
		    connector: $connector,
			
			unit: $nzeohghuwt,
			value: 0.014794886
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
