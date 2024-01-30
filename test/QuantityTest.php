<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class QuantityTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$lrthembzuk = new SKOSConcept(connector: $connector, semanticId: "http://base.com/inrnvukszn");
		

        $obj = new Quantity(
            connector: $connector,
        	
        	unit: $lrthembzuk,
        	value: 0.697133
        );

        
		$this->assertSame($lrthembzuk, $obj->getQuantityUnit());
		$this->assertSame(0.697133, $obj->getQuantityValue());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Quantity(
            connector: $connector
        );

		
		$obj->setQuantityValue(0.49664605);
		$this->assertSame(0.49664605, $obj->getQuantityValue());
		
		
		$rkhlvnrrds = new SKOSConcept(connector: $connector, semanticId: "http://base.com/shuhxsuhqs");
		$obj->setQuantityUnit($rkhlvnrrds);
		$this->assertSame($rkhlvnrrds, $obj->getQuantityUnit());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Quantity(
		    connector: $connector,
			
			unit: $lrthembzuk,
			value: 0.697133
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
