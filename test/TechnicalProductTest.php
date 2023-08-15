<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class TechnicalProductTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		
		$lcihpcqlnh = new SKOSConcept(connector: $connector, semanticId: "http://base.com/rndqufciwh");
		$blacebnzen = new Quantity(connector: $connector);
		
		
		$yqoqocdjtu = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/vlejvnidyj"));
		
		$hiucamnmsb = array(new AllergenCharacteristic(connector: $connector));
		$akfqydqpwy = array(new NutrientCharacteristic(connector: $connector));
		$fuftlrywjm = array(new PhysicalCharacteristic(connector: $connector));
		$dtznzjiinp = new SKOSConcept(connector: $connector, semanticId: "http://base.com/psyxcqmdzw");
		$xisyxavhnf = array(new CatalogItem(connector: $connector, semanticId: "http://base.com/zcoahzumth"));
		$idhwajawxw = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/cfdlolzcra"));
		$xgzfhxqkhe = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/bkotsbxaqd"));
		$jfvyrlraem = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/wesvooxlyd"));

        $obj = new TechnicalProduct(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	name: "fpqqhrrevs",
        	description: "uxbcabukzy",
        	productType: $lcihpcqlnh,
        	quantity: $blacebnzen,
        	alcoholPercentage: 0.6576785,
        	lifetime: "onuoelvqnz",
        	claims: $yqoqocdjtu,
        	usageOrStorageConditions: "maefqqyxxn",
        	allergenCharacteristics: $hiucamnmsb,
        	nutrientCharacteristics: $akfqydqpwy,
        	physicalCharacteristics: $fuftlrywjm,
        	geographicalOrigin: $dtznzjiinp,
        	catalogItems: $xisyxavhnf,
        	certifications: $idhwajawxw,
        	natureOrigin: $xgzfhxqkhe,
        	partOrigin: $jfvyrlraem
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame("fpqqhrrevs", $obj->getName());
		$this->assertSame("uxbcabukzy", $obj->getDescription());
		$this->assertSame($lcihpcqlnh, $obj->getProductType());
		$this->assertSame(true, $obj->getQuantity()->equals($blacebnzen));
		$this->assertSame(0.6576785, $obj->getAlcoholPercentage());
		$this->assertSame("onuoelvqnz", $obj->getLifetime());
		$this->assertSame($yqoqocdjtu, $obj->getClaims());
		$this->assertSame("maefqqyxxn", $obj->getUsageOrStorageConditions());
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getAllergenCharacteristics(), $hiucamnmsb));
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getNutrientCharacteristics(), $akfqydqpwy));
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getPhysicalCharacteristics(), $fuftlrywjm));
		$this->assertSame($dtznzjiinp, $obj->getGeographicalOrigin());
		$this->assertSame($xisyxavhnf, $obj->getCatalogItems());
		$this->assertSame($idhwajawxw, $obj->getCertifications());
		$this->assertSame($xgzfhxqkhe, $obj->getNatureOrigin());
		$this->assertSame($jfvyrlraem, $obj->getPartOrigin());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new TechnicalProduct(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$wobydwrvqn = new NutrientCharacteristic(connector: $connector);
		$obj->addNutrientCharacteristic($wobydwrvqn);
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getNutrientCharacteristics(), [$wobydwrvqn]));
		
		
		$uimfxhydxr = new SKOSConcept(connector: $connector, semanticId: "http://base.com/oalpmdgnsg");
		$obj->addCertification($uimfxhydxr);
		$this->assertSame([$uimfxhydxr], $obj->getCertifications());
		
		
		$qoebzgklxk = new PhysicalCharacteristic(connector: $connector);
		$obj->addPhysicalCharacteristic($qoebzgklxk);
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getPhysicalCharacteristics(), [$qoebzgklxk]));
		
		
		$eucgkjdecf = new CatalogItem(connector: $connector, semanticId: "http://base.com/vaoyeiltuy");
		$obj->addCatalogItem($eucgkjdecf);
		$this->assertSame([$eucgkjdecf], $obj->getCatalogItems());
		
		
		$obj->setAlcoholPercentage(0.0031416416);
		$this->assertSame(0.0031416416, $obj->getAlcoholPercentage());
		
		
		
		$obj->setDescription("rzwqlykiod");
		$this->assertSame("rzwqlykiod", $obj->getDescription());
		
		
		$knyfoucyjv = new SKOSConcept(connector: $connector, semanticId: "http://base.com/ygfwdlhsna");
		$obj->setProductType($knyfoucyjv);
		$this->assertSame($knyfoucyjv, $obj->getProductType());
		
		
		
		$qsjcgzsxus = new AllergenCharacteristic(connector: $connector);
		$obj->addAllergenCharacteristic($qsjcgzsxus);
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getAllergenCharacteristics(), [$qsjcgzsxus]));
		
		$hbijlsbajf = new Quantity(connector: $connector);
		$obj->setQuantity($hbijlsbajf);
		$this->assertSame(true, $obj->getQuantity()->equals($hbijlsbajf));
		
		
		
		$nqvlurnnzs = new SKOSConcept(connector: $connector, semanticId: "http://base.com/chcdurtqmn");
		$obj->addNatureOrigin($nqvlurnnzs);
		$this->assertSame([$nqvlurnnzs], $obj->getNatureOrigin());
		
		
		$obj->setLifetime("rojzmemuhq");
		$this->assertSame("rojzmemuhq", $obj->getLifetime());
		
		
		$gsdaftmzyj = new SKOSConcept(connector: $connector, semanticId: "http://base.com/pidkxirqoq");
		$obj->setGeographicalOrigin($gsdaftmzyj);
		$this->assertSame($gsdaftmzyj, $obj->getGeographicalOrigin());
		
		
		
		$xrdofqlkxx = new SKOSConcept(connector: $connector, semanticId: "http://base.com/xusjbwegyg");
		$obj->addPartOrigin($xrdofqlkxx);
		$this->assertSame([$xrdofqlkxx], $obj->getPartOrigin());
		
		
		$obj->setUsageOrStorageConditions("xfsznvjpwz");
		$this->assertSame("xfsznvjpwz", $obj->getUsageOrStorageConditions());
		
		
		
		$obj->setName("rqbikdvigm");
		$this->assertSame("rqbikdvigm", $obj->getName());
		
		
		
		$mrjzxvkwev = new SKOSConcept(connector: $connector, semanticId: "http://base.com/sgzegnqkpd");
		$obj->addClaim($mrjzxvkwev);
		$this->assertSame([$mrjzxvkwev], $obj->getClaims());
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new TechnicalProduct(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			name: "fpqqhrrevs",
			description: "uxbcabukzy",
			productType: $lcihpcqlnh,
			quantity: $blacebnzen,
			alcoholPercentage: 0.6576785,
			lifetime: "onuoelvqnz",
			claims: $yqoqocdjtu,
			usageOrStorageConditions: "maefqqyxxn",
			allergenCharacteristics: $hiucamnmsb,
			nutrientCharacteristics: $akfqydqpwy,
			physicalCharacteristics: $fuftlrywjm,
			geographicalOrigin: $dtznzjiinp,
			catalogItems: $xisyxavhnf,
			certifications: $idhwajawxw,
			natureOrigin: $xgzfhxqkhe,
			partOrigin: $jfvyrlraem
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
