<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class SaleSessionTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		
		
		$yhuqjrvbug = array(new Offer(connector: $connector, semanticId: "http://base.com/zughjxmtvb"));

        $obj = new SaleSession(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	beginDate: "wygagmtehc",
        	endDate: "qwkqpkixwi",
        	quantity: 0.023079395,
        	offers: $yhuqjrvbug
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame("wygagmtehc", $obj->getBeginDate());
		$this->assertSame("qwkqpkixwi", $obj->getEndDate());
		$this->assertSame(0.023079395, $obj->getQuantity());
		$this->assertSame($yhuqjrvbug, $obj->getOffers());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new SaleSession(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$obj->setBeginDate("izqsgjfhxv");
		$this->assertSame("izqsgjfhxv", $obj->getBeginDate());
		
		
		
		$obj->setEndDate("coljzpvbjm");
		$this->assertSame("coljzpvbjm", $obj->getEndDate());
		
		
		
		$obj->setQuantity(0.12961578);
		$this->assertSame(0.12961578, $obj->getQuantity());
		
		
		
		$ntssraayxd = new Offer(connector: $connector, semanticId: "http://base.com/mjurgbsjwq");
		$obj->addOffer($ntssraayxd);
		$this->assertSame([$ntssraayxd], $obj->getOffers());
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new SaleSession(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			beginDate: "wygagmtehc",
			endDate: "qwkqpkixwi",
			quantity: 0.023079395,
			offers: $yhuqjrvbug
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
