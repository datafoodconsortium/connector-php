<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class CatalogItemTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$aimbpubqen = new SuppliedProduct(connector: $connector, semanticId: "http://base.com/qdtxnbaymu");
		
		
		$isdfemdeer = array(new Offer(connector: $connector, semanticId: "http://base.com/cwyrmwlrpu"));
		$ipmbfcjzqf = array(new Catalog(connector: $connector, semanticId: "http://base.com/xvnhiohgrq"));

        $obj = new CatalogItem(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	product: $aimbpubqen,
        	sku: "rnihtenajo",
        	stockLimitation: 0.7117032,
        	offers: $isdfemdeer,
        	catalogs: $ipmbfcjzqf
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame($aimbpubqen, $obj->getOfferedProduct());
		$this->assertSame("rnihtenajo", $obj->getSku());
		$this->assertSame(0.7117032, $obj->getStockLimitation());
		$this->assertSame($isdfemdeer, $obj->getOfferers());
		$this->assertSame($ipmbfcjzqf, $obj->getCatalogs());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new CatalogItem(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$tqbpefyuag = new Catalog(connector: $connector, semanticId: "http://base.com/vvtqehwukv");
		$obj->registerInCatalog($tqbpefyuag);
		$this->assertSame([$tqbpefyuag], $obj->getCatalogs());
		
		$ytbnajomxg = new SuppliedProduct(connector: $connector, semanticId: "http://base.com/esmidskumc");
		$obj->setOfferedProduct($ytbnajomxg);
		$this->assertSame($ytbnajomxg, $obj->getOfferedProduct());
		
		
		
		$obj->setStockLimitation(0.012362063);
		$this->assertSame(0.012362063, $obj->getStockLimitation());
		
		
		
		$obj->setSku("asqgocokuo");
		$this->assertSame("asqgocokuo", $obj->getSku());
		
		
		
		$hmszriuofu = new Offer(connector: $connector, semanticId: "http://base.com/devsgzwzle");
		$obj->addOffer($hmszriuofu);
		$this->assertSame([$hmszriuofu], $obj->getOfferers());
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new CatalogItem(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			product: $aimbpubqen,
			sku: "rnihtenajo",
			stockLimitation: 0.7117032,
			offers: $isdfemdeer,
			catalogs: $ipmbfcjzqf
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
