<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class OfferTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$elawpfaydh = new CatalogItem(connector: $connector, semanticId: "http://base.com/ovnykygzjh");
		$scpcptpxlx = new CustomerCategory(connector: $connector, semanticId: "http://base.com/xlipjhands");
		$ojfdkmdkhi = new Price(connector: $connector);
		

        $obj = new Offer(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	offeredItem: $elawpfaydh,
        	offeredTo: $scpcptpxlx,
        	price: $ojfdkmdkhi,
        	stockLimitation: 0.40618354
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame($elawpfaydh, $obj->getOfferedItem());
		$this->assertSame($scpcptpxlx, $obj->getCustomerCategory());
		$this->assertSame(true, $obj->getPrice()->equals($ojfdkmdkhi));
		$this->assertSame(0.40618354, $obj->getStockLimitation());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Offer(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		$yvjslytong = new Price(connector: $connector);
		$obj->setPrice($yvjslytong);
		$this->assertSame(true, $obj->getPrice()->equals($yvjslytong));
		
		
		
		$obj->setStockLimitation(0.15710717);
		$this->assertSame(0.15710717, $obj->getStockLimitation());
		
		
		$odgeehahvp = new CustomerCategory(connector: $connector, semanticId: "http://base.com/nptfizmcgi");
		$obj->setCustomerCategory($odgeehahvp);
		$this->assertSame($odgeehahvp, $obj->getCustomerCategory());
		
		
		$evslxyinfv = new CatalogItem(connector: $connector, semanticId: "http://base.com/czxndbqtiz");
		$obj->setOfferedItem($evslxyinfv);
		$this->assertSame($evslxyinfv, $obj->getOfferedItem());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Offer(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			offeredItem: $elawpfaydh,
			offeredTo: $scpcptpxlx,
			price: $ojfdkmdkhi,
			stockLimitation: 0.40618354
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
