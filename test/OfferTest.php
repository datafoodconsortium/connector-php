<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class OfferTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$hrygxhzclt = new CatalogItem(connector: $connector, semanticId: "http://base.com/iqbcsmqgrr");
		$zfeznqgfyc = new CustomerCategory(connector: $connector, semanticId: "http://base.com/xcxpdatehb");
		$egdsdvmzzm = new Price(connector: $connector);
		

        $obj = new Offer(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	offeredItem: $hrygxhzclt,
        	offeredTo: $zfeznqgfyc,
        	price: $egdsdvmzzm,
        	stockLimitation: 0.2674408
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame($hrygxhzclt, $obj->getOfferedItem());
		$this->assertSame($zfeznqgfyc, $obj->getCustomerCategory());
		$this->assertSame(true, $obj->getPrice()->equals($egdsdvmzzm));
		$this->assertSame(0.2674408, $obj->getStockLimitation());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Offer(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		$jirkmzxbph = new CatalogItem(connector: $connector, semanticId: "http://base.com/hiequzadfe");
		$obj->setOfferedItem($jirkmzxbph);
		$this->assertSame($jirkmzxbph, $obj->getOfferedItem());
		
		
		$bhtapnaeyk = new Price(connector: $connector);
		$obj->setPrice($bhtapnaeyk);
		$this->assertSame(true, $obj->getPrice()->equals($bhtapnaeyk));
		
		
		
		$obj->setStockLimitation(0.7220862);
		$this->assertSame(0.7220862, $obj->getStockLimitation());
		
		
		$csbmpzxibo = new CustomerCategory(connector: $connector, semanticId: "http://base.com/mdzfasutkb");
		$obj->setCustomerCategory($csbmpzxibo);
		$this->assertSame($csbmpzxibo, $obj->getCustomerCategory());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Offer(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			offeredItem: $hrygxhzclt,
			offeredTo: $zfeznqgfyc,
			price: $egdsdvmzzm,
			stockLimitation: 0.2674408
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
