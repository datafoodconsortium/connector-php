<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class SuppliedProductTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		
		$zobrmfdjuc = new SKOSConcept(connector: $connector, semanticId: "http://base.com/rgzscwgckz");
		$wwtunmqlyw = new Quantity(connector: $connector);
		
		
		$cdqsuwoeps = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/mbwcongzgh"));
		
		$dkmzjktnun = array(new AllergenCharacteristic(connector: $connector));
		$slrrqdrdwc = array(new NutrientCharacteristic(connector: $connector));
		$aciyrlktyf = array(new PhysicalCharacteristic(connector: $connector));
		$mscfflwrhm = new SKOSConcept(connector: $connector, semanticId: "http://base.com/deoodqhugv");
		$ghvwumatmj = array(new CatalogItem(connector: $connector, semanticId: "http://base.com/icpusjyssm"));
		$behxfqymcf = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/nioxsciwfp"));
		$ckcscengvi = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/wiewqofxze"));
		$ynfptdivww = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/zubhmyqmgi"));
		

        $obj = new SuppliedProduct(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	name: "nteycairep",
        	description: "ngkqttlsft",
        	productType: $zobrmfdjuc,
        	quantity: $wwtunmqlyw,
        	alcoholPercentage: 0.30005717,
        	lifetime: "tztexohegb",
        	claims: $cdqsuwoeps,
        	usageOrStorageConditions: "nyisepodcu",
        	allergenCharacteristics: $dkmzjktnun,
        	nutrientCharacteristics: $slrrqdrdwc,
        	physicalCharacteristics: $aciyrlktyf,
        	geographicalOrigin: $mscfflwrhm,
        	catalogItems: $ghvwumatmj,
        	certifications: $behxfqymcf,
        	natureOrigin: $ckcscengvi,
        	partOrigin: $ynfptdivww,
        	totalTheoreticalStock: 0.14140141
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame("nteycairep", $obj->getName());
		$this->assertSame("ngkqttlsft", $obj->getDescription());
		$this->assertSame($zobrmfdjuc, $obj->getProductType());
		$this->assertSame(true, $obj->getQuantity()->equals($wwtunmqlyw));
		$this->assertSame(0.30005717, $obj->getAlcoholPercentage());
		$this->assertSame("tztexohegb", $obj->getLifetime());
		$this->assertSame($cdqsuwoeps, $obj->getClaims());
		$this->assertSame("nyisepodcu", $obj->getUsageOrStorageConditions());
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getAllergenCharacteristics(), $dkmzjktnun));
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getNutrientCharacteristics(), $slrrqdrdwc));
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getPhysicalCharacteristics(), $aciyrlktyf));
		$this->assertSame($mscfflwrhm, $obj->getGeographicalOrigin());
		$this->assertSame($ghvwumatmj, $obj->getCatalogItems());
		$this->assertSame($behxfqymcf, $obj->getCertifications());
		$this->assertSame($ckcscengvi, $obj->getNatureOrigin());
		$this->assertSame($ynfptdivww, $obj->getPartOrigin());
		$this->assertSame(0.14140141, $obj->getTotalTheoreticalStock());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new SuppliedProduct(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$obj->setTotalTheoreticalStock(0.08369976);
		$this->assertSame(0.08369976, $obj->getTotalTheoreticalStock());
		
		
		
		$obj->setDescription("shmahxecgl");
		$this->assertSame("shmahxecgl", $obj->getDescription());
		
		
		
		$sakuiuzctk = new SKOSConcept(connector: $connector, semanticId: "http://base.com/hrdpfrualo");
		$obj->addNatureOrigin($sakuiuzctk);
		$this->assertSame([$sakuiuzctk], $obj->getNatureOrigin());
		
		$tbrkncarvo = new Quantity(connector: $connector);
		$obj->setQuantity($tbrkncarvo);
		$this->assertSame(true, $obj->getQuantity()->equals($tbrkncarvo));
		
		
		
		$hcdnrahmtt = new PhysicalCharacteristic(connector: $connector);
		$obj->addPhysicalCharacteristic($hcdnrahmtt);
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getPhysicalCharacteristics(), [$hcdnrahmtt]));
		
		
		$khkewinqvb = new SKOSConcept(connector: $connector, semanticId: "http://base.com/ucteegqztc");
		$obj->addPartOrigin($khkewinqvb);
		$this->assertSame([$khkewinqvb], $obj->getPartOrigin());
		
		
		$kiktgftmnl = new NutrientCharacteristic(connector: $connector);
		$obj->addNutrientCharacteristic($kiktgftmnl);
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getNutrientCharacteristics(), [$kiktgftmnl]));
		
		
		$obj->setName("kyvrhkbufa");
		$this->assertSame("kyvrhkbufa", $obj->getName());
		
		
		$kywhhdpbiu = new SKOSConcept(connector: $connector, semanticId: "http://base.com/pduyuxcvxk");
		$obj->setProductType($kywhhdpbiu);
		$this->assertSame($kywhhdpbiu, $obj->getProductType());
		
		
		
		$qybqvdrkmd = new SKOSConcept(connector: $connector, semanticId: "http://base.com/drfkrewjrk");
		$obj->addCertification($qybqvdrkmd);
		$this->assertSame([$qybqvdrkmd], $obj->getCertifications());
		
		
		$ruqilyanio = new CatalogItem(connector: $connector, semanticId: "http://base.com/jwxbdihqmn");
		$obj->addCatalogItem($ruqilyanio);
		$this->assertSame([$ruqilyanio], $obj->getCatalogItems());
		
		
		$obj->setUsageOrStorageConditions("mvyrzjtvmm");
		$this->assertSame("mvyrzjtvmm", $obj->getUsageOrStorageConditions());
		
		
		$hwcrzvhmjj = new SKOSConcept(connector: $connector, semanticId: "http://base.com/mjzrglooqh");
		$obj->setGeographicalOrigin($hwcrzvhmjj);
		$this->assertSame($hwcrzvhmjj, $obj->getGeographicalOrigin());
		
		
		
		$obj->setAlcoholPercentage(0.49682224);
		$this->assertSame(0.49682224, $obj->getAlcoholPercentage());
		
		
		
		$obj->setLifetime("nntqxfksod");
		$this->assertSame("nntqxfksod", $obj->getLifetime());
		
		
		
		$dwsmrejqxb = new AllergenCharacteristic(connector: $connector);
		$obj->addAllergenCharacteristic($dwsmrejqxb);
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getAllergenCharacteristics(), [$dwsmrejqxb]));
		
		
		$vxqhodicqe = new SKOSConcept(connector: $connector, semanticId: "http://base.com/uhikcocxfg");
		$obj->addClaim($vxqhodicqe);
		$this->assertSame([$vxqhodicqe], $obj->getClaims());
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new SuppliedProduct(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			name: "nteycairep",
			description: "ngkqttlsft",
			productType: $zobrmfdjuc,
			quantity: $wwtunmqlyw,
			alcoholPercentage: 0.30005717,
			lifetime: "tztexohegb",
			claims: $cdqsuwoeps,
			usageOrStorageConditions: "nyisepodcu",
			allergenCharacteristics: $dkmzjktnun,
			nutrientCharacteristics: $slrrqdrdwc,
			physicalCharacteristics: $aciyrlktyf,
			geographicalOrigin: $mscfflwrhm,
			catalogItems: $ghvwumatmj,
			certifications: $behxfqymcf,
			natureOrigin: $ckcscengvi,
			partOrigin: $ynfptdivww,
			totalTheoreticalStock: 0.14140141
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
