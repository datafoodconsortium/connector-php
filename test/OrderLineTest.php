<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class OrderLineTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		$iuuoqcnxfk = new Price(connector: $connector);
		$pxrbkcapax = new Offer(connector: $connector, semanticId: "http://base.com/pvpxfmactm");
		$dsxrrepdfz = new Order(connector: $connector, semanticId: "http://base.com/zwvdycmcha");

        $obj = new OrderLine(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	quantity: 0.76779443,
        	price: $iuuoqcnxfk,
        	offer: $pxrbkcapax,
        	order: $dsxrrepdfz
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame(0.76779443, $obj->getQuantity());
		$this->assertSame(true, $obj->getPrice()->equals($iuuoqcnxfk));
		$this->assertSame($pxrbkcapax, $obj->getOffer());
		$this->assertSame($dsxrrepdfz, $obj->getOrder());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new OrderLine(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		$tltifuhdej = new Offer(connector: $connector, semanticId: "http://base.com/akxnywkxad");
		$obj->setOffer($tltifuhdej);
		$this->assertSame($tltifuhdej, $obj->getOffer());
		
		
		
		$obj->setDescription("xnvohccqla");
		$this->assertSame("xnvohccqla", $obj->getDescription());
		
		
		$kqefcbupcz = new Price(connector: $connector);
		$obj->setPrice($kqefcbupcz);
		$this->assertSame(true, $obj->getPrice()->equals($kqefcbupcz));
		
		
		
		$obj->setQuantity(0.291838);
		$this->assertSame(0.291838, $obj->getQuantity());
		
		
		$bfyeqimdvy = new Order(connector: $connector, semanticId: "http://base.com/jhrwqpoovi");
		$obj->setOrder($bfyeqimdvy);
		$this->assertSame($bfyeqimdvy, $obj->getOrder());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new OrderLine(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			quantity: 0.76779443,
			price: $iuuoqcnxfk,
			offer: $pxrbkcapax,
			order: $dsxrrepdfz
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
