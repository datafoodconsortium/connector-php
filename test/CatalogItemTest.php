<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class CatalogItemTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$rscpehygvw = new TechnicalProduct(connector: $connector, semanticId: "http://base.com/mpitzkyypr");
		
		
		$jdxrzjcdzy = array(new Offer(connector: $connector, semanticId: "http://base.com/kilvwqpptj"));
		$ggwrwbozmp = array(new Catalog(connector: $connector, semanticId: "http://base.com/wzaotbxmdn"));

        $obj = new CatalogItem(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	product: $rscpehygvw,
        	sku: "pwjdinhwna",
        	stockLimitation: 0.9194131,
        	offers: $jdxrzjcdzy,
        	catalogs: $ggwrwbozmp
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame($rscpehygvw, $obj->getOfferedProduct());
		$this->assertSame("pwjdinhwna", $obj->getSku());
		$this->assertSame(0.9194131, $obj->getStockLimitation());
		$this->assertSame($jdxrzjcdzy, $obj->getOfferers());
		$this->assertSame($ggwrwbozmp, $obj->getCatalogs());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new CatalogItem(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$zvpnfqdumq = new Offer(connector: $connector, semanticId: "http://base.com/csvsbnhfnv");
		$obj->addOffer($zvpnfqdumq);
		$this->assertSame([$zvpnfqdumq], $obj->getOfferers());
		
		
		$obj->setSku("xtbgnwatmh");
		$this->assertSame("xtbgnwatmh", $obj->getSku());
		
		
		
		$ghskayelxy = new Catalog(connector: $connector, semanticId: "http://base.com/xatcarqwaf");
		$obj->registerInCatalog($ghskayelxy);
		$this->assertSame([$ghskayelxy], $obj->getCatalogs());
		
		
		$obj->setStockLimitation(0.4993915);
		$this->assertSame(0.4993915, $obj->getStockLimitation());
		
		
		$martbkogri = new TechnicalProduct(connector: $connector, semanticId: "http://base.com/obkfkudkex");
		$obj->setOfferedProduct($martbkogri);
		$this->assertSame($martbkogri, $obj->getOfferedProduct());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new CatalogItem(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			product: $rscpehygvw,
			sku: "pwjdinhwna",
			stockLimitation: 0.9194131,
			offers: $jdxrzjcdzy,
			catalogs: $ggwrwbozmp
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
