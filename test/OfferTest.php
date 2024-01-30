<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class OfferTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$xqccezoucf = new CatalogItem(connector: $connector, semanticId: "http://base.com/lefratpghl");
		$mgwwiekhzc = new CustomerCategory(connector: $connector, semanticId: "http://base.com/olzllfgpjo");
		$srhzttmuks = new Price(connector: $connector);
		

        $obj = new Offer(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	offeredItem: $xqccezoucf,
        	offeredTo: $mgwwiekhzc,
        	price: $srhzttmuks,
        	stockLimitation: 0.80970436
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame($xqccezoucf, $obj->getOfferedItem());
		$this->assertSame($mgwwiekhzc, $obj->getCustomerCategory());
		$this->assertSame(true, $obj->getPrice()->equals($srhzttmuks));
		$this->assertSame(0.80970436, $obj->getStockLimitation());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Offer(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		$iopllewjyk = new Price(connector: $connector);
		$obj->setPrice($iopllewjyk);
		$this->assertSame(true, $obj->getPrice()->equals($iopllewjyk));
		
		
		
		$obj->setStockLimitation(0.34384233);
		$this->assertSame(0.34384233, $obj->getStockLimitation());
		
		
		$ebvdxyjagn = new CatalogItem(connector: $connector, semanticId: "http://base.com/dxjycunwom");
		$obj->setOfferedItem($ebvdxyjagn);
		$this->assertSame($ebvdxyjagn, $obj->getOfferedItem());
		
		
		$xcmadzosss = new CustomerCategory(connector: $connector, semanticId: "http://base.com/oaiojcfzsy");
		$obj->setCustomerCategory($xcmadzosss);
		$this->assertSame($xcmadzosss, $obj->getCustomerCategory());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Offer(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			offeredItem: $xqccezoucf,
			offeredTo: $mgwwiekhzc,
			price: $srhzttmuks,
			stockLimitation: 0.80970436
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
