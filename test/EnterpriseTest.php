<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class EnterpriseTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$yplykstsqg = array(new Address(connector: $connector, semanticId: "http://base.com/chqvnrtexv"));
		
		
		$uliwmrxojm = array(new CustomerCategory(connector: $connector, semanticId: "http://base.com/wrogapcdvu"));
		$qylbzjjxsu = array(new Catalog(connector: $connector, semanticId: "http://base.com/skgtquztiv"));
		$amthxwzhpe = array(new CatalogItem(connector: $connector, semanticId: "http://base.com/bhzdrpvsqn"));
		$tghrfqszpi = array(new SuppliedProduct(connector: $connector, semanticId: "http://base.com/rqbhtciirt"));
		$dvdeklukqu = array(new TechnicalProduct(connector: $connector, semanticId: "http://base.com/bnvfnynasa"));

        $obj = new Enterprise(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	localizations: $yplykstsqg,
        	description: "lwbvxwhura",
        	vatNumber: "nprvnittfp",
        	customerCategories: $uliwmrxojm,
        	catalogs: $qylbzjjxsu,
        	catalogItems: $amthxwzhpe,
        	suppliedProducts: $tghrfqszpi,
        	technicalProducts: $dvdeklukqu
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame($yplykstsqg, $obj->getLocalizations());
		$this->assertSame("lwbvxwhura", $obj->getDescription());
		$this->assertSame("nprvnittfp", $obj->getVatNumber());
		$this->assertSame($uliwmrxojm, $obj->getCustomerCategories());
		$this->assertSame($qylbzjjxsu, $obj->getMaintainedCatalogs());
		$this->assertSame($amthxwzhpe, $obj->getManagedCatalogItems());
		$this->assertSame($tghrfqszpi, $obj->getSuppliedProducts());
		$this->assertSame($dvdeklukqu, $obj->getProposedTechnicalProducts());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Enterprise(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$wftnjsnoqk = new CatalogItem(connector: $connector, semanticId: "http://base.com/djpvlyxeau");
		$obj->manageCatalogItem($wftnjsnoqk);
		$this->assertSame([$wftnjsnoqk], $obj->getManagedCatalogItems());
		
		
		$oscygsvysb = new Catalog(connector: $connector, semanticId: "http://base.com/rqtqrsbhsr");
		$obj->maintainCatalog($oscygsvysb);
		$this->assertSame([$oscygsvysb], $obj->getMaintainedCatalogs());
		
		
		$dycgieexqg = new Address(connector: $connector, semanticId: "http://base.com/jcaxuioeja");
		$obj->addLocalization($dycgieexqg);
		$this->assertSame([$dycgieexqg], $obj->getLocalizations());
		
		
		$kmscrqkshm = new SuppliedProduct(connector: $connector, semanticId: "http://base.com/awkrknylgr");
		$obj->supplyProduct($kmscrqkshm);
		$this->assertSame([$kmscrqkshm], $obj->getSuppliedProducts());
		
		
		$obj->setDescription("axdaclpicv");
		$this->assertSame("axdaclpicv", $obj->getDescription());
		
		
		
		$ykbetgnrxd = new CustomerCategory(connector: $connector, semanticId: "http://base.com/pdyyodrapv");
		$obj->addCustomerCategory($ykbetgnrxd);
		$this->assertSame([$ykbetgnrxd], $obj->getCustomerCategories());
		
		
		$obj->setVatNumber("lsishgecca");
		$this->assertSame("lsishgecca", $obj->getVatNumber());
		
		
		
		$qgrvogwgqm = new TechnicalProduct(connector: $connector, semanticId: "http://base.com/djsggfwtmv");
		$obj->proposeTechnicalProducts($qgrvogwgqm);
		$this->assertSame([$qgrvogwgqm], $obj->getProposedTechnicalProducts());
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Enterprise(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			localizations: $yplykstsqg,
			description: "lwbvxwhura",
			vatNumber: "nprvnittfp",
			customerCategories: $uliwmrxojm,
			catalogs: $qylbzjjxsu,
			catalogItems: $amthxwzhpe,
			suppliedProducts: $tghrfqszpi,
			technicalProducts: $dvdeklukqu
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
