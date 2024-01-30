<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class PlannedProductionFlowTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$qkutdjptqn = new Quantity(connector: $connector);
		$mansflmtld = new PlannedTransformation(connector: $connector, semanticId: "http://base.com/okpvwdexqm");
		$ghnjsmltmb = new SuppliedProduct(connector: $connector, semanticId: "http://base.com/vmhoeuhqmz");

        $obj = new PlannedProductionFlow(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	quantity: $qkutdjptqn,
        	transformation: $mansflmtld,
        	product: $ghnjsmltmb
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame(true, $obj->getQuantity()->equals($qkutdjptqn));
		$this->assertSame($mansflmtld, $obj->getPlannedTransformation());
		$this->assertSame($ghnjsmltmb, $obj->getProducedProduct());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new PlannedProductionFlow(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		$nbvvzazlav = new Quantity(connector: $connector);
		$obj->setQuantity($nbvvzazlav);
		$this->assertSame(true, $obj->getQuantity()->equals($nbvvzazlav));
		
		
		$rialwaosao = new SuppliedProduct(connector: $connector, semanticId: "http://base.com/xndfjhnubb");
		$obj->setProducedProduct($rialwaosao);
		$this->assertSame($rialwaosao, $obj->getProducedProduct());
		
		
		$rkqzqkyfqd = new PlannedTransformation(connector: $connector, semanticId: "http://base.com/nnbqoarkhx");
		$obj->setPlannedTransformation($rkqzqkyfqd);
		$this->assertSame($rkqzqkyfqd, $obj->getPlannedTransformation());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new PlannedProductionFlow(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			quantity: $qkutdjptqn,
			transformation: $mansflmtld,
			product: $ghnjsmltmb
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
