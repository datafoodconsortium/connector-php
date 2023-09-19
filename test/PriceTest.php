<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class PriceTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		
		$enptqdodxm = new SKOSConcept(connector: $connector, semanticId: "http://base.com/yglpcsixri");

        $obj = new Price(
            connector: $connector,
        	
        	value: 0.90167844,
        	vatRate: 0.30123216,
        	unit: $enptqdodxm
        );

        
		$this->assertSame(0.90167844, $obj->getQuantityValue());
		$this->assertSame(0.30123216, $obj->getVatRate());
		$this->assertSame($enptqdodxm, $obj->getQuantityUnit());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Price(
            connector: $connector
        );

		$gjcnuubkmj = new SKOSConcept(connector: $connector, semanticId: "http://base.com/jfeafwvsqr");
		$obj->setQuantityUnit($gjcnuubkmj);
		$this->assertSame($gjcnuubkmj, $obj->getQuantityUnit());
		
		
		
		$obj->setVatRate(0.5887325);
		$this->assertSame(0.5887325, $obj->getVatRate());
		
		
		
		$obj->setQuantityValue(0.49470216);
		$this->assertSame(0.49470216, $obj->getQuantityValue());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Price(
		    connector: $connector,
			
			value: 0.90167844,
			vatRate: 0.30123216,
			unit: $enptqdodxm
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
