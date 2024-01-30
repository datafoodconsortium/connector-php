<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class SuppliedProductTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		
		$jnfvtrbrbh = new SKOSConcept(connector: $connector, semanticId: "http://base.com/vtwnsopjih");
		$feehulzwuh = new Quantity(connector: $connector);
		
		
		$ccymyvfdio = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/axkunqavqv"));
		
		$zyymgkkblt = array(new AllergenCharacteristic(connector: $connector));
		$kmmyjqflnr = array(new NutrientCharacteristic(connector: $connector));
		$fvdsdgbfxe = array(new PhysicalCharacteristic(connector: $connector));
		$xbgghpexrx = new SKOSConcept(connector: $connector, semanticId: "http://base.com/znalxcvuto");
		$gfzsbhhrmy = array(new CatalogItem(connector: $connector, semanticId: "http://base.com/lazvilwpnn"));
		$mpuncsxceh = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/darrsmlycl"));
		$ltlolyhgme = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/fbiivwpdox"));
		$eyicbnhbsk = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/gkqpcmwewc"));
		

        $obj = new SuppliedProduct(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	name: "vcsecqtdqn",
        	description: "ojvberjzji",
        	productType: $jnfvtrbrbh,
        	quantity: $feehulzwuh,
        	alcoholPercentage: 0.8454808,
        	lifetime: "wcdcdywade",
        	claims: $ccymyvfdio,
        	usageOrStorageConditions: "ldpeiaumod",
        	allergenCharacteristics: $zyymgkkblt,
        	nutrientCharacteristics: $kmmyjqflnr,
        	physicalCharacteristics: $fvdsdgbfxe,
        	geographicalOrigin: $xbgghpexrx,
        	catalogItems: $gfzsbhhrmy,
        	certifications: $mpuncsxceh,
        	natureOrigin: $ltlolyhgme,
        	partOrigin: $eyicbnhbsk,
        	totalTheoreticalStock: 0.055290163
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame("vcsecqtdqn", $obj->getName());
		$this->assertSame("ojvberjzji", $obj->getDescription());
		$this->assertSame($jnfvtrbrbh, $obj->getProductType());
		$this->assertSame(true, $obj->getQuantity()->equals($feehulzwuh));
		$this->assertSame(0.8454808, $obj->getAlcoholPercentage());
		$this->assertSame("wcdcdywade", $obj->getLifetime());
		$this->assertSame($ccymyvfdio, $obj->getClaims());
		$this->assertSame("ldpeiaumod", $obj->getUsageOrStorageConditions());
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getAllergenCharacteristics(), $zyymgkkblt));
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getNutrientCharacteristics(), $kmmyjqflnr));
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getPhysicalCharacteristics(), $fvdsdgbfxe));
		$this->assertSame($xbgghpexrx, $obj->getGeographicalOrigin());
		$this->assertSame($gfzsbhhrmy, $obj->getCatalogItems());
		$this->assertSame($mpuncsxceh, $obj->getCertifications());
		$this->assertSame($ltlolyhgme, $obj->getNatureOrigin());
		$this->assertSame($eyicbnhbsk, $obj->getPartOrigin());
		$this->assertSame(0.055290163, $obj->getTotalTheoreticalStock());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new SuppliedProduct(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$obj->setDescription("jylgyrazol");
		$this->assertSame("jylgyrazol", $obj->getDescription());
		
		
		$xeydxlslxr = new SKOSConcept(connector: $connector, semanticId: "http://base.com/jgmyyrvlse");
		$obj->setProductType($xeydxlslxr);
		$this->assertSame($xeydxlslxr, $obj->getProductType());
		
		
		
		$qcvxljrmsi = new SKOSConcept(connector: $connector, semanticId: "http://base.com/qloylqiklb");
		$obj->addPartOrigin($qcvxljrmsi);
		$this->assertSame([$qcvxljrmsi], $obj->getPartOrigin());
		
		
		$uzxugzvjjz = new SKOSConcept(connector: $connector, semanticId: "http://base.com/gxckwsftts");
		$obj->addNatureOrigin($uzxugzvjjz);
		$this->assertSame([$uzxugzvjjz], $obj->getNatureOrigin());
		
		
		$obj->setUsageOrStorageConditions("ovuawbcppe");
		$this->assertSame("ovuawbcppe", $obj->getUsageOrStorageConditions());
		
		
		
		$obj->setAlcoholPercentage(0.35272568);
		$this->assertSame(0.35272568, $obj->getAlcoholPercentage());
		
		
		
		$usonmadaxs = new SKOSConcept(connector: $connector, semanticId: "http://base.com/dpruztrmuj");
		$obj->addClaim($usonmadaxs);
		$this->assertSame([$usonmadaxs], $obj->getClaims());
		
		
		$bhfrjhvrya = new NutrientCharacteristic(connector: $connector);
		$obj->addNutrientCharacteristic($bhfrjhvrya);
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getNutrientCharacteristics(), [$bhfrjhvrya]));
		
		
		$obj->setTotalTheoreticalStock(0.25476295);
		$this->assertSame(0.25476295, $obj->getTotalTheoreticalStock());
		
		
		
		$jfmhvrukit = new PhysicalCharacteristic(connector: $connector);
		$obj->addPhysicalCharacteristic($jfmhvrukit);
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getPhysicalCharacteristics(), [$jfmhvrukit]));
		
		
		$slsexhhbna = new CatalogItem(connector: $connector, semanticId: "http://base.com/zfqeulntef");
		$obj->addCatalogItem($slsexhhbna);
		$this->assertSame([$slsexhhbna], $obj->getCatalogItems());
		
		$qvdclbcfqn = new SKOSConcept(connector: $connector, semanticId: "http://base.com/siwzurnqhp");
		$obj->setGeographicalOrigin($qvdclbcfqn);
		$this->assertSame($qvdclbcfqn, $obj->getGeographicalOrigin());
		
		
		
		$obj->setLifetime("hrpxclsbdq");
		$this->assertSame("hrpxclsbdq", $obj->getLifetime());
		
		
		
		$aruzsdsatg = new AllergenCharacteristic(connector: $connector);
		$obj->addAllergenCharacteristic($aruzsdsatg);
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getAllergenCharacteristics(), [$aruzsdsatg]));
		
		$wpxmwmtssm = new Quantity(connector: $connector);
		$obj->setQuantity($wpxmwmtssm);
		$this->assertSame(true, $obj->getQuantity()->equals($wpxmwmtssm));
		
		
		
		$obj->setName("ifklkcjsua");
		$this->assertSame("ifklkcjsua", $obj->getName());
		
		
		
		$ccmcgmnebq = new SKOSConcept(connector: $connector, semanticId: "http://base.com/fchiqnwrrq");
		$obj->addCertification($ccmcgmnebq);
		$this->assertSame([$ccmcgmnebq], $obj->getCertifications());
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new SuppliedProduct(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			name: "vcsecqtdqn",
			description: "ojvberjzji",
			productType: $jnfvtrbrbh,
			quantity: $feehulzwuh,
			alcoholPercentage: 0.8454808,
			lifetime: "wcdcdywade",
			claims: $ccymyvfdio,
			usageOrStorageConditions: "ldpeiaumod",
			allergenCharacteristics: $zyymgkkblt,
			nutrientCharacteristics: $kmmyjqflnr,
			physicalCharacteristics: $fvdsdgbfxe,
			geographicalOrigin: $xbgghpexrx,
			catalogItems: $gfzsbhhrmy,
			certifications: $mpuncsxceh,
			natureOrigin: $ltlolyhgme,
			partOrigin: $eyicbnhbsk,
			totalTheoreticalStock: 0.055290163
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
