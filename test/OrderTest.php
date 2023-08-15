<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class OrderTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		
		$axvflcnbyq = new SaleSession(connector: $connector, semanticId: "http://base.com/qsucemsvly");
		$truegoznrt = new Enterprise(connector: $connector, semanticId: "http://base.com/wvzftbsujq");
		$zsrrbfrysa = array(new OrderLine(connector: $connector, semanticId: "http://base.com/objjsskcqj"));

        $obj = new Order(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	number: "iilbbwjwqw",
        	date: "rflgnufkpm",
        	saleSession: $axvflcnbyq,
        	client: $truegoznrt,
        	lines: $zsrrbfrysa
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame("iilbbwjwqw", $obj->getNumber());
		$this->assertSame("rflgnufkpm", $obj->getDate());
		$this->assertSame($axvflcnbyq, $obj->getSaleSession());
		$this->assertSame($truegoznrt, $obj->getClient());
		$this->assertSame($zsrrbfrysa, $obj->getLines());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Order(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$obj->setNumber("ocrhgyxurv");
		$this->assertSame("ocrhgyxurv", $obj->getNumber());
		
		
		
		$uyjfrfbjav = new OrderLine(connector: $connector, semanticId: "http://base.com/scywezgkaw");
		$obj->addLine($uyjfrfbjav);
		$this->assertSame([$uyjfrfbjav], $obj->getLines());
		
		$vncnqnasvw = new Enterprise(connector: $connector, semanticId: "http://base.com/jfjdggowih");
		$obj->setClient($vncnqnasvw);
		$this->assertSame($vncnqnasvw, $obj->getClient());
		
		
		
		$obj->setDate("lxwlzshtsh");
		$this->assertSame("lxwlzshtsh", $obj->getDate());
		
		
		$vtmqgirtcx = new SaleSession(connector: $connector, semanticId: "http://base.com/cttvcirihc");
		$obj->setSaleSession($vtmqgirtcx);
		$this->assertSame($vtmqgirtcx, $obj->getSaleSession());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Order(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			number: "iilbbwjwqw",
			date: "rflgnufkpm",
			saleSession: $axvflcnbyq,
			client: $truegoznrt,
			lines: $zsrrbfrysa
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
