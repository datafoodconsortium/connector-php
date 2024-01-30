<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class CatalogItemTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$pwhypamumj = new TechnicalProduct(connector: $connector, semanticId: "http://base.com/vnudmypalt");
		
		
		$nsthrenvvm = array(new Offer(connector: $connector, semanticId: "http://base.com/waipxzeycd"));
		$pqdsrxhdpx = array(new Catalog(connector: $connector, semanticId: "http://base.com/yuhbvzgbgs"));

        $obj = new CatalogItem(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	product: $pwhypamumj,
        	sku: "hbpepupivf",
        	stockLimitation: 0.47980082,
        	offers: $nsthrenvvm,
        	catalogs: $pqdsrxhdpx
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame($pwhypamumj, $obj->getOfferedProduct());
		$this->assertSame("hbpepupivf", $obj->getSku());
		$this->assertSame(0.47980082, $obj->getStockLimitation());
		$this->assertSame($nsthrenvvm, $obj->getOfferers());
		$this->assertSame($pqdsrxhdpx, $obj->getCatalogs());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new CatalogItem(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		$orjltxmvvn = new TechnicalProduct(connector: $connector, semanticId: "http://base.com/lppapgjcfh");
		$obj->setOfferedProduct($orjltxmvvn);
		$this->assertSame($orjltxmvvn, $obj->getOfferedProduct());
		
		
		
		$obj->setSku("ltkfxappks");
		$this->assertSame("ltkfxappks", $obj->getSku());
		
		
		
		$obj->setStockLimitation(0.9789771);
		$this->assertSame(0.9789771, $obj->getStockLimitation());
		
		
		
		$tfwxuvusrx = new Offer(connector: $connector, semanticId: "http://base.com/wvjccqdral");
		$obj->addOffer($tfwxuvusrx);
		$this->assertSame([$tfwxuvusrx], $obj->getOfferers());
		
		
		$dfwnptbsfc = new Catalog(connector: $connector, semanticId: "http://base.com/zomuhfoghx");
		$obj->registerInCatalog($dfwnptbsfc);
		$this->assertSame([$dfwnptbsfc], $obj->getCatalogs());
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new CatalogItem(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			product: $pwhypamumj,
			sku: "hbpepupivf",
			stockLimitation: 0.47980082,
			offers: $nsthrenvvm,
			catalogs: $pqdsrxhdpx
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
