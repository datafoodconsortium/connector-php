<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class TechnicalProductTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		
		$hgddiamdqe = new SKOSConcept(connector: $connector, semanticId: "http://base.com/xyxvakgltq");
		$gqrlogwirr = new Quantity(connector: $connector);
		
		
		$yoldthdeym = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/zoiyjmhiwq"));
		
		$gutzaanhco = array(new AllergenCharacteristic(connector: $connector));
		$oygfnucyjz = array(new NutrientCharacteristic(connector: $connector));
		$qjjivtbptu = array(new PhysicalCharacteristic(connector: $connector));
		$sizpzfkwvq = new SKOSConcept(connector: $connector, semanticId: "http://base.com/wektdjggzn");
		$nskwqnehkr = array(new CatalogItem(connector: $connector, semanticId: "http://base.com/ibndddzsux"));
		$xxyfysxlrm = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/pxgzsflvar"));
		$zwrqankudt = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/rbeznnivau"));
		$uteheelzjj = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/lleuwddmcz"));

        $obj = new TechnicalProduct(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	name: "rkiqplxqud",
        	description: "ijmkflkqmj",
        	productType: $hgddiamdqe,
        	quantity: $gqrlogwirr,
        	alcoholPercentage: 0.56418914,
        	lifetime: "rkcgvqcosi",
        	claims: $yoldthdeym,
        	usageOrStorageConditions: "snydmpdbpm",
        	allergenCharacteristics: $gutzaanhco,
        	nutrientCharacteristics: $oygfnucyjz,
        	physicalCharacteristics: $qjjivtbptu,
        	geographicalOrigin: $sizpzfkwvq,
        	catalogItems: $nskwqnehkr,
        	certifications: $xxyfysxlrm,
        	natureOrigin: $zwrqankudt,
        	partOrigin: $uteheelzjj
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame("rkiqplxqud", $obj->getName());
		$this->assertSame("ijmkflkqmj", $obj->getDescription());
		$this->assertSame($hgddiamdqe, $obj->getProductType());
		$this->assertSame(true, $obj->getQuantity()->equals($gqrlogwirr));
		$this->assertSame(0.56418914, $obj->getAlcoholPercentage());
		$this->assertSame("rkcgvqcosi", $obj->getLifetime());
		$this->assertSame($yoldthdeym, $obj->getClaims());
		$this->assertSame("snydmpdbpm", $obj->getUsageOrStorageConditions());
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getAllergenCharacteristics(), $gutzaanhco));
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getNutrientCharacteristics(), $oygfnucyjz));
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getPhysicalCharacteristics(), $qjjivtbptu));
		$this->assertSame($sizpzfkwvq, $obj->getGeographicalOrigin());
		$this->assertSame($nskwqnehkr, $obj->getCatalogItems());
		$this->assertSame($xxyfysxlrm, $obj->getCertifications());
		$this->assertSame($zwrqankudt, $obj->getNatureOrigin());
		$this->assertSame($uteheelzjj, $obj->getPartOrigin());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new TechnicalProduct(
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

		$obj = new TechnicalProduct(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			name: "rkiqplxqud",
			description: "ijmkflkqmj",
			productType: $hgddiamdqe,
			quantity: $gqrlogwirr,
			alcoholPercentage: 0.56418914,
			lifetime: "rkcgvqcosi",
			claims: $yoldthdeym,
			usageOrStorageConditions: "snydmpdbpm",
			allergenCharacteristics: $gutzaanhco,
			nutrientCharacteristics: $oygfnucyjz,
			physicalCharacteristics: $qjjivtbptu,
			geographicalOrigin: $sizpzfkwvq,
			catalogItems: $nskwqnehkr,
			certifications: $xxyfysxlrm,
			natureOrigin: $zwrqankudt,
			partOrigin: $uteheelzjj
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
