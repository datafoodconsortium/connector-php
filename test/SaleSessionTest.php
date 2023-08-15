<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class SaleSessionTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		
		
		$ygqpwghxbz = array(new Offer(connector: $connector, semanticId: "http://base.com/khxvcrilvl"));

        $obj = new SaleSession(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	beginDate: "xfjzrzoyik",
        	endDate: "lwsicfhagp",
        	quantity: 0.18701339,
        	offers: $ygqpwghxbz
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame("xfjzrzoyik", $obj->getBeginDate());
		$this->assertSame("lwsicfhagp", $obj->getEndDate());
		$this->assertSame(0.18701339, $obj->getQuantity());
		$this->assertSame($ygqpwghxbz, $obj->getOffers());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new SaleSession(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$obj->setEndDate("nvdnivfbmt");
		$this->assertSame("nvdnivfbmt", $obj->getEndDate());
		
		
		
		$obj->setBeginDate("uuvdkwysvy");
		$this->assertSame("uuvdkwysvy", $obj->getBeginDate());
		
		
		
		$obj->setQuantity(0.94355935);
		$this->assertSame(0.94355935, $obj->getQuantity());
		
		
		
		$suxgaaqnix = new Offer(connector: $connector, semanticId: "http://base.com/xauzbjdbtt");
		$obj->addOffer($suxgaaqnix);
		$this->assertSame([$suxgaaqnix], $obj->getOffers());
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new SaleSession(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			beginDate: "xfjzrzoyik",
			endDate: "lwsicfhagp",
			quantity: 0.18701339,
			offers: $ygqpwghxbz
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
