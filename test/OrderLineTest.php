<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class OrderLineTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		$wlfoppsrte = new Price(connector: $connector);
		$rrtrdcxveu = new Offer(connector: $connector, semanticId: "http://base.com/pnkzctxtab");
		$gpjqyqpaek = new Order(connector: $connector, semanticId: "http://base.com/lcpxuvuvcg");

        $obj = new OrderLine(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	quantity: 0.27075833,
        	price: $wlfoppsrte,
        	offer: $rrtrdcxveu,
        	order: $gpjqyqpaek
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame(0.27075833, $obj->getQuantity());
		$this->assertSame(true, $obj->getPrice()->equals($wlfoppsrte));
		$this->assertSame($rrtrdcxveu, $obj->getOffer());
		$this->assertSame($gpjqyqpaek, $obj->getOrder());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new OrderLine(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$obj->setDescription("ubaqvtxfoa");
		$this->assertSame("ubaqvtxfoa", $obj->getDescription());
		
		
		$esaeidweww = new Order(connector: $connector, semanticId: "http://base.com/wbqcgxfbhl");
		$obj->setOrder($esaeidweww);
		$this->assertSame($esaeidweww, $obj->getOrder());
		
		
		$lbtjgjdkwl = new Price(connector: $connector);
		$obj->setPrice($lbtjgjdkwl);
		$this->assertSame(true, $obj->getPrice()->equals($lbtjgjdkwl));
		
		
		$mzykcymtte = new Offer(connector: $connector, semanticId: "http://base.com/trjukahubn");
		$obj->setOffer($mzykcymtte);
		$this->assertSame($mzykcymtte, $obj->getOffer());
		
		
		
		$obj->setQuantity(0.3769526);
		$this->assertSame(0.3769526, $obj->getQuantity());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new OrderLine(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			quantity: 0.27075833,
			price: $wlfoppsrte,
			offer: $rrtrdcxveu,
			order: $gpjqyqpaek
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
