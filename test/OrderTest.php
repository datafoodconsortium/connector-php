<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class OrderTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		
		$zjanpxgfsg = new SaleSession(connector: $connector, semanticId: "http://base.com/hycidajhmq");
		$xjivsfxtsr = new Person(connector: $connector, semanticId: "http://base.com/hybmgkkwnz");
		$zemxqyngds = array(new OrderLine(connector: $connector, semanticId: "http://base.com/fturjxqztt"));

        $obj = new Order(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	number: "najonfdcdw",
        	date: "beinpruulc",
        	saleSession: $zjanpxgfsg,
        	client: $xjivsfxtsr,
        	lines: $zemxqyngds
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame("najonfdcdw", $obj->getNumber());
		$this->assertSame("beinpruulc", $obj->getDate());
		$this->assertSame($zjanpxgfsg, $obj->getSaleSession());
		$this->assertSame($xjivsfxtsr, $obj->getClient());
		$this->assertSame($zemxqyngds, $obj->getLines());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Order(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$obj->setNumber("covkquzjct");
		$this->assertSame("covkquzjct", $obj->getNumber());
		
		
		
		$vpyqxjqypb = new OrderLine(connector: $connector, semanticId: "http://base.com/ljniswdjbs");
		$obj->addLine($vpyqxjqypb);
		$this->assertSame([$vpyqxjqypb], $obj->getLines());
		
		$qylvdrfelh = new SaleSession(connector: $connector, semanticId: "http://base.com/kowxzvbkxb");
		$obj->setSaleSession($qylvdrfelh);
		$this->assertSame($qylvdrfelh, $obj->getSaleSession());
		
		
		$jljcrxfrwx = new Person(connector: $connector, semanticId: "http://base.com/lvtrfgravn");
		$obj->setClient($jljcrxfrwx);
		$this->assertSame($jljcrxfrwx, $obj->getClient());
		
		
		
		$obj->setDate("peeqntauee");
		$this->assertSame("peeqntauee", $obj->getDate());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Order(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			number: "najonfdcdw",
			date: "beinpruulc",
			saleSession: $zjanpxgfsg,
			client: $xjivsfxtsr,
			lines: $zemxqyngds
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
