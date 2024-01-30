<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class PriceTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		
		$erlwlememz = new SKOSConcept(connector: $connector, semanticId: "http://base.com/tsdupkxdcg");

        $obj = new Price(
            connector: $connector,
        	
        	value: 0.8230021,
        	vatRate: 0.72790813,
        	unit: $erlwlememz
        );

        
		$this->assertSame(0.8230021, $obj->getQuantityValue());
		$this->assertSame(0.72790813, $obj->getVatRate());
		$this->assertSame($erlwlememz, $obj->getQuantityUnit());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Price(
            connector: $connector
        );

		
		$obj->setQuantityValue(0.81751704);
		$this->assertSame(0.81751704, $obj->getQuantityValue());
		
		
		
		$obj->setVatRate(0.9766349);
		$this->assertSame(0.9766349, $obj->getVatRate());
		
		
		$yvfduutpwg = new SKOSConcept(connector: $connector, semanticId: "http://base.com/shuhxsuhqs");
		$obj->setQuantityUnit($yvfduutpwg);
		$this->assertSame($yvfduutpwg, $obj->getQuantityUnit());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Price(
		    connector: $connector,
			
			value: 0.8230021,
			vatRate: 0.72790813,
			unit: $erlwlememz
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
