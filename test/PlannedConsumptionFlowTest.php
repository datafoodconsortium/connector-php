<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class PlannedConsumptionFlowTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$dmbsxspyde = new Quantity(connector: $connector);
		$vyebgyghmf = new PlannedTransformation(connector: $connector, semanticId: "http://base.com/ysrmyzbbiv");
		$louzxdpfrj = new TechnicalProduct(connector: $connector, semanticId: "http://base.com/bgbrhgemoq");

        $obj = new PlannedConsumptionFlow(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	quantity: $dmbsxspyde,
        	transformation: $vyebgyghmf,
        	product: $louzxdpfrj
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame(true, $obj->getQuantity()->equals($dmbsxspyde));
		$this->assertSame($vyebgyghmf, $obj->getPlannedTransformation());
		$this->assertSame($louzxdpfrj, $obj->getConsumedProduct());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new PlannedConsumptionFlow(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		$kfjojynlax = new PlannedTransformation(connector: $connector, semanticId: "http://base.com/nnbqoarkhx");
		$obj->setPlannedTransformation($kfjojynlax);
		$this->assertSame($kfjojynlax, $obj->getPlannedTransformation());
		
		
		$tbtxsfdraa = new TechnicalProduct(connector: $connector, semanticId: "http://base.com/uhidcjstwa");
		$obj->setConsumedProduct($tbtxsfdraa);
		$this->assertSame($tbtxsfdraa, $obj->getConsumedProduct());
		
		
		$nbvvzazlav = new Quantity(connector: $connector);
		$obj->setQuantity($nbvvzazlav);
		$this->assertSame(true, $obj->getQuantity()->equals($nbvvzazlav));
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new PlannedConsumptionFlow(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			quantity: $dmbsxspyde,
			transformation: $vyebgyghmf,
			product: $louzxdpfrj
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
