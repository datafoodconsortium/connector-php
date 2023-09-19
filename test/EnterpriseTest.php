<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class EnterpriseTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$jcwlpegfrh = array(new Address(connector: $connector, semanticId: "http://base.com/oxiizuwzcs"));
		
		
		$bjfgfgciwl = array(new CustomerCategory(connector: $connector, semanticId: "http://base.com/hipwmqzmcq"));
		$hqcsbsyenv = array(new Catalog(connector: $connector, semanticId: "http://base.com/dfdkxbqbnq"));
		$vfrfzlzzym = array(new CatalogItem(connector: $connector, semanticId: "http://base.com/ywzuamwbha"));
		$wtraxnpfqf = array(new SuppliedProduct(connector: $connector, semanticId: "http://base.com/cgjnelgjeu"));
		$clurmmcsft = array(new TechnicalProduct(connector: $connector, semanticId: "http://base.com/obeyxkmvsy"));

        $obj = new Enterprise(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	localizations: $jcwlpegfrh,
        	description: "wrnseozjmi",
        	vatNumber: "gixgkhomnl",
        	customerCategories: $bjfgfgciwl,
        	catalogs: $hqcsbsyenv,
        	catalogItems: $vfrfzlzzym,
        	suppliedProducts: $wtraxnpfqf,
        	technicalProducts: $clurmmcsft
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame($jcwlpegfrh, $obj->getLocalizations());
		$this->assertSame("wrnseozjmi", $obj->getDescription());
		$this->assertSame("gixgkhomnl", $obj->getVatNumber());
		$this->assertSame($bjfgfgciwl, $obj->getCustomerCategories());
		$this->assertSame($hqcsbsyenv, $obj->getMaintainedCatalogs());
		$this->assertSame($vfrfzlzzym, $obj->getManagedCatalogItems());
		$this->assertSame($wtraxnpfqf, $obj->getSuppliedProducts());
		$this->assertSame($clurmmcsft, $obj->getProposedTechnicalProducts());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Enterprise(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$zualmsftrg = new CustomerCategory(connector: $connector, semanticId: "http://base.com/qskoykpqbt");
		$obj->addCustomerCategory($zualmsftrg);
		$this->assertSame([$zualmsftrg], $obj->getCustomerCategories());
		
		
		$obj->setVatNumber("umpozodwsi");
		$this->assertSame("umpozodwsi", $obj->getVatNumber());
		
		
		
		$tdzjudegvf = new Address(connector: $connector, semanticId: "http://base.com/fqjizhuayr");
		$obj->addLocalization($tdzjudegvf);
		$this->assertSame([$tdzjudegvf], $obj->getLocalizations());
		
		
		$koifclfbir = new CatalogItem(connector: $connector, semanticId: "http://base.com/szeeapvfxc");
		$obj->manageCatalogItem($koifclfbir);
		$this->assertSame([$koifclfbir], $obj->getManagedCatalogItems());
		
		
		$zkkvzfipcn = new Catalog(connector: $connector, semanticId: "http://base.com/opxnnlhfma");
		$obj->maintainCatalog($zkkvzfipcn);
		$this->assertSame([$zkkvzfipcn], $obj->getMaintainedCatalogs());
		
		
		$obj->setDescription("hbvqtvnwee");
		$this->assertSame("hbvqtvnwee", $obj->getDescription());
		
		
		
		$rabmhmguoo = new SuppliedProduct(connector: $connector, semanticId: "http://base.com/kbuujntpgj");
		$obj->supplyProduct($rabmhmguoo);
		$this->assertSame([$rabmhmguoo], $obj->getSuppliedProducts());
		
		
		$pnhvpxesgl = new TechnicalProduct(connector: $connector, semanticId: "http://base.com/nxugqpwwnr");
		$obj->proposeTechnicalProducts($pnhvpxesgl);
		$this->assertSame([$pnhvpxesgl], $obj->getProposedTechnicalProducts());
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Enterprise(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			localizations: $jcwlpegfrh,
			description: "wrnseozjmi",
			vatNumber: "gixgkhomnl",
			customerCategories: $bjfgfgciwl,
			catalogs: $hqcsbsyenv,
			catalogItems: $vfrfzlzzym,
			suppliedProducts: $wtraxnpfqf,
			technicalProducts: $clurmmcsft
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
