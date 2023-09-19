<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class QuantityTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$yxixbyeqdh = new SKOSConcept(connector: $connector, semanticId: "http://base.com/vprpqhrxbc");
		

        $obj = new Quantity(
            connector: $connector,
        	
        	unit: $yxixbyeqdh,
        	value: 0.27709508
        );

        
		$this->assertSame($yxixbyeqdh, $obj->getQuantityUnit());
		$this->assertSame(0.27709508, $obj->getQuantityValue());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Quantity(
            connector: $connector
        );

		$tlxmpwfgjp = new SKOSConcept(connector: $connector, semanticId: "http://base.com/jfeafwvsqr");
		$obj->setQuantityUnit($tlxmpwfgjp);
		$this->assertSame($tlxmpwfgjp, $obj->getQuantityUnit());
		
		
		
		$obj->setQuantityValue(0.22686517);
		$this->assertSame(0.22686517, $obj->getQuantityValue());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Quantity(
		    connector: $connector,
			
			unit: $yxixbyeqdh,
			value: 0.27709508
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
