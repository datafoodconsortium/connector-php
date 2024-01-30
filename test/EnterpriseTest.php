<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class EnterpriseTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		$kzpqskyrbq = array(new Address(connector: $connector, semanticId: "http://base.com/bqxqndkgrd"));
		
		
		$mgbvsrloxl = array(new CustomerCategory(connector: $connector, semanticId: "http://base.com/xxvoitvkoi"));
		$kudqyecrqt = array(new Catalog(connector: $connector, semanticId: "http://base.com/crfczdjlha"));
		$cdteefzimx = array(new CatalogItem(connector: $connector, semanticId: "http://base.com/bhaogrxuuv"));
		$sacaxriday = array(new SuppliedProduct(connector: $connector, semanticId: "http://base.com/kvpzwippld"));
		$sfowpzxwmu = array(new TechnicalProduct(connector: $connector, semanticId: "http://base.com/wghlxjhgjf"));
		$wovgeenory = new Person(connector: $connector, semanticId: "http://base.com/sbvugtvtnz");
		

        $obj = new Enterprise(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	name: "rtkfdznwiq",
        	localizations: $kzpqskyrbq,
        	description: "rdszuxeiwa",
        	vatNumber: "bkshdbqxqp",
        	customerCategories: $mgbvsrloxl,
        	catalogs: $kudqyecrqt,
        	catalogItems: $cdteefzimx,
        	suppliedProducts: $sacaxriday,
        	technicalProducts: $sfowpzxwmu,
        	mainContact: $wovgeenory,
        	logo: "vgdrglbenc"
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame("rtkfdznwiq", $obj->getName());
		$this->assertSame($kzpqskyrbq, $obj->getLocalizations());
		$this->assertSame("rdszuxeiwa", $obj->getDescription());
		$this->assertSame("bkshdbqxqp", $obj->getVatNumber());
		$this->assertSame($mgbvsrloxl, $obj->getCustomerCategories());
		$this->assertSame($kudqyecrqt, $obj->getMaintainedCatalogs());
		$this->assertSame($cdteefzimx, $obj->getManagedCatalogItems());
		$this->assertSame($sacaxriday, $obj->getSuppliedProducts());
		$this->assertSame($sfowpzxwmu, $obj->getProposedTechnicalProducts());
		$this->assertSame($wovgeenory, $obj->getMainContact());
		$this->assertSame("vgdrglbenc", $obj->getLogo());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Enterprise(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		$cgetlzjkzp = new Person(connector: $connector, semanticId: "http://base.com/ydleifprlm");
		$obj->setMainContact($cgetlzjkzp);
		$this->assertSame($cgetlzjkzp, $obj->getMainContact());
		
		
		
		
		$obj->addWebsite("xrumjrnqyc");
		$this->assertSame(["xrumjrnqyc"], $obj->getWebsites());
		
		
		$qxnbabxowz = new SuppliedProduct(connector: $connector, semanticId: "http://base.com/olyriswclm");
		$obj->supplyProduct($qxnbabxowz);
		$this->assertSame([$qxnbabxowz], $obj->getSuppliedProducts());
		
		
		$obj->setLogo("sdnztzfcvv");
		$this->assertSame("sdnztzfcvv", $obj->getLogo());
		
		
		
		$obj->setName("nnchcgumeg");
		$this->assertSame("nnchcgumeg", $obj->getName());
		
		
		
		$klfjsdomoy = new Catalog(connector: $connector, semanticId: "http://base.com/anvvkplbwv");
		$obj->maintainCatalog($klfjsdomoy);
		$this->assertSame([$klfjsdomoy], $obj->getMaintainedCatalogs());
		
		
		$pohontcgyc = new PhoneNumber(connector: $connector, semanticId: "http://base.com/mcsviiejdu");
		$obj->addPhoneNumber($pohontcgyc);
		$this->assertSame([$pohontcgyc], $obj->getPhoneNumbers());
		
		
		$obj->setVatNumber("uaowldcoka");
		$this->assertSame("uaowldcoka", $obj->getVatNumber());
		
		
		
		$rzilmheocp = new Address(connector: $connector, semanticId: "http://base.com/mpvpkjoswk");
		$obj->addLocalization($rzilmheocp);
		$this->assertSame([$rzilmheocp], $obj->getLocalizations());
		
		
		$edygufzlhs = new CustomerCategory(connector: $connector, semanticId: "http://base.com/mwwouepgej");
		$obj->addCustomerCategory($edygufzlhs);
		$this->assertSame([$edygufzlhs], $obj->getCustomerCategories());
		
		
		$ldbwlrdjfz = new SocialMedia(connector: $connector, semanticId: "http://base.com/eqljzpbgio");
		$obj->addSocialMedia($ldbwlrdjfz);
		$this->assertSame([$ldbwlrdjfz], $obj->getSocialMedias());
		
		
		$vnuwugpuvx = new CatalogItem(connector: $connector, semanticId: "http://base.com/wjfkglyaol");
		$obj->manageCatalogItem($vnuwugpuvx);
		$this->assertSame([$vnuwugpuvx], $obj->getManagedCatalogItems());
		
		
		
		$obj->addEmailAddress("vrureviual");
		$this->assertSame(["vrureviual"], $obj->getEmails());
		
		
		$obj->setDescription("nyoudlrhux");
		$this->assertSame("nyoudlrhux", $obj->getDescription());
		
		
		
		$mticdsfsof = new TechnicalProduct(connector: $connector, semanticId: "http://base.com/tarsuntikb");
		$obj->proposeTechnicalProducts($mticdsfsof);
		$this->assertSame([$mticdsfsof], $obj->getProposedTechnicalProducts());
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Enterprise(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			name: "rtkfdznwiq",
			localizations: $kzpqskyrbq,
			description: "rdszuxeiwa",
			vatNumber: "bkshdbqxqp",
			customerCategories: $mgbvsrloxl,
			catalogs: $kudqyecrqt,
			catalogItems: $cdteefzimx,
			suppliedProducts: $sacaxriday,
			technicalProducts: $sfowpzxwmu,
			mainContact: $wovgeenory,
			logo: "vgdrglbenc"
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
