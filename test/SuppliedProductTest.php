<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class SuppliedProductTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		
		$kyfuqpxlxs = new SKOSConcept(connector: $connector, semanticId: "http://base.com/urnuaayjfx");
		$pgdeumghrc = new Quantity(connector: $connector);
		
		
		$lykpxqycio = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/qkkchdxpyu"));
		
		$rfgmhuhjtl = array(new AllergenCharacteristic(connector: $connector));
		$rwuahumxkn = array(new NutrientCharacteristic(connector: $connector));
		$rjnwcbklhb = array(new PhysicalCharacteristic(connector: $connector));
		$xklibtylib = new SKOSConcept(connector: $connector, semanticId: "http://base.com/lhgkcpuilo");
		$jhkaxtzphf = array(new CatalogItem(connector: $connector, semanticId: "http://base.com/julfcqtjje"));
		$tyodqmxwdi = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/okzenlwmyp"));
		$llswiryeje = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/agjjiqscsu"));
		$vltajkkmgw = array(new SKOSConcept(connector: $connector, semanticId: "http://base.com/yyzlndbhzo"));
		

        $obj = new SuppliedProduct(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	name: "fjzrzzoife",
        	description: "yvpoufmbqy",
        	productType: $kyfuqpxlxs,
        	quantity: $pgdeumghrc,
        	alcoholPercentage: 0.30510288,
        	lifetime: "jmdpmlpekq",
        	claims: $lykpxqycio,
        	usageOrStorageConditions: "orfdzyhzju",
        	allergenCharacteristics: $rfgmhuhjtl,
        	nutrientCharacteristics: $rwuahumxkn,
        	physicalCharacteristics: $rjnwcbklhb,
        	geographicalOrigin: $xklibtylib,
        	catalogItems: $jhkaxtzphf,
        	certifications: $tyodqmxwdi,
        	natureOrigin: $llswiryeje,
        	partOrigin: $vltajkkmgw,
        	totalTheoreticalStock: 0.6581028
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame("fjzrzzoife", $obj->getName());
		$this->assertSame("yvpoufmbqy", $obj->getDescription());
		$this->assertSame($kyfuqpxlxs, $obj->getProductType());
		$this->assertSame(true, $obj->getQuantity()->equals($pgdeumghrc));
		$this->assertSame(0.30510288, $obj->getAlcoholPercentage());
		$this->assertSame("jmdpmlpekq", $obj->getLifetime());
		$this->assertSame($lykpxqycio, $obj->getClaims());
		$this->assertSame("orfdzyhzju", $obj->getUsageOrStorageConditions());
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getAllergenCharacteristics(), $rfgmhuhjtl));
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getNutrientCharacteristics(), $rwuahumxkn));
		$this->assertSame(true, TestUtils::testBlankNodeArray($obj->getPhysicalCharacteristics(), $rjnwcbklhb));
		$this->assertSame($xklibtylib, $obj->getGeographicalOrigin());
		$this->assertSame($jhkaxtzphf, $obj->getCatalogItems());
		$this->assertSame($tyodqmxwdi, $obj->getCertifications());
		$this->assertSame($llswiryeje, $obj->getNatureOrigin());
		$this->assertSame($vltajkkmgw, $obj->getPartOrigin());
		$this->assertSame(0.6581028, $obj->getTotalTheoreticalStock());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new SuppliedProduct(
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
		
		
		$obj->setTotalTheoreticalStock(0.7530033);
		$this->assertSame(0.7530033, $obj->getTotalTheoreticalStock());
		
		
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

		$obj = new SuppliedProduct(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			name: "fjzrzzoife",
			description: "yvpoufmbqy",
			productType: $kyfuqpxlxs,
			quantity: $pgdeumghrc,
			alcoholPercentage: 0.30510288,
			lifetime: "jmdpmlpekq",
			claims: $lykpxqycio,
			usageOrStorageConditions: "orfdzyhzju",
			allergenCharacteristics: $rfgmhuhjtl,
			nutrientCharacteristics: $rwuahumxkn,
			physicalCharacteristics: $rjnwcbklhb,
			geographicalOrigin: $xklibtylib,
			catalogItems: $jhkaxtzphf,
			certifications: $tyodqmxwdi,
			natureOrigin: $llswiryeje,
			partOrigin: $vltajkkmgw,
			totalTheoreticalStock: 0.6581028
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
