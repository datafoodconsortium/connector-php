<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class TechnicalProductTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		
		$donlxtjxgr = new SKOSConcept(connector: $connector, semanticId: "http://base.com/mgaqjjdgnb");
		$vfwdhstree = new Quantity(connector: $connector);
		
		
		$nwxgsvquge = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/ormkuynfdt"));
		
		$qzheqwerym = array(new AllergenCharacteristic(connector: $connector));
		$lkwygpzirx = array(new NutrientCharacteristic(connector: $connector));
		$kqscikzgun = array(new PhysicalCharacteristic(connector: $connector));
		$bghnjduzlg = new SKOSConcept(connector: $connector, semanticId: "http://base.com/fnxkispnih");
		$tjucoouvpn = array(new CatalogItem(connector: $connector, semanticId: "http://base.com/bxrbnoelnb"));
		$egjvlietqb = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/fipaogaapw"));
		$xjwpxobopu = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/djjhmqtmxn"));
		$yyxtoitdoa = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/zvypjxtgnu"));

        $obj = new TechnicalProduct(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	name: "fncmlntyfc",
        	description: "mynisverrn",
        	productType: $donlxtjxgr,
        	quantity: $vfwdhstree,
        	alcoholPercentage: 0.5003202,
        	lifetime: "uwddbbeapi",
        	claims: $nwxgsvquge,
        	usageOrStorageConditions: "rtpmpddazs",
        	allergenCharacteristics: $qzheqwerym,
        	nutrientCharacteristics: $lkwygpzirx,
        	physicalCharacteristics: $kqscikzgun,
        	geographicalOrigin: $bghnjduzlg,
        	catalogItems: $tjucoouvpn,
        	certifications: $egjvlietqb,
        	natureOrigin: $xjwpxobopu,
        	partOrigin: $yyxtoitdoa
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame("fncmlntyfc", $obj->getName());
		$this->assertSame("mynisverrn", $obj->getDescription());
		$this->assertSame($donlxtjxgr, $obj->getProductType());
		$this->assertSame(true, $obj->getQuantity()->equals($vfwdhstree));
		$this->assertSame(0.5003202, $obj->getAlcoholPercentage());
		$this->assertSame("uwddbbeapi", $obj->getLifetime());
		$this->assertSame($nwxgsvquge, $obj->getClaims());
		$this->assertSame("rtpmpddazs", $obj->getUsageOrStorageConditions());
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getAllergenCharacteristics(), $qzheqwerym));
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getNutrientCharacteristics(), $lkwygpzirx));
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getPhysicalCharacteristics(), $kqscikzgun));
		$this->assertSame($bghnjduzlg, $obj->getGeographicalOrigin());
		$this->assertSame($tjucoouvpn, $obj->getCatalogItems());
		$this->assertSame($egjvlietqb, $obj->getCertifications());
		$this->assertSame($xjwpxobopu, $obj->getNatureOrigin());
		$this->assertSame($yyxtoitdoa, $obj->getPartOrigin());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new TechnicalProduct(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
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

		$obj = new TechnicalProduct(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			name: "fncmlntyfc",
			description: "mynisverrn",
			productType: $donlxtjxgr,
			quantity: $vfwdhstree,
			alcoholPercentage: 0.5003202,
			lifetime: "uwddbbeapi",
			claims: $nwxgsvquge,
			usageOrStorageConditions: "rtpmpddazs",
			allergenCharacteristics: $qzheqwerym,
			nutrientCharacteristics: $lkwygpzirx,
			physicalCharacteristics: $kqscikzgun,
			geographicalOrigin: $bghnjduzlg,
			catalogItems: $tjucoouvpn,
			certifications: $egjvlietqb,
			natureOrigin: $xjwpxobopu,
			partOrigin: $yyxtoitdoa
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
