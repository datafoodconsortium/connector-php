<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class OrderLineTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		$duwaaekjjl = new Price(connector: $connector);
		$dsdhleisly = new Offer(connector: $connector, semanticId: "http://base.com/emvigihbuq");
		$bwzkhvtrvf = new Order(connector: $connector, semanticId: "http://base.com/zbpzricjrq");

        $obj = new OrderLine(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	quantity: 0.75411695,
        	price: $duwaaekjjl,
        	offer: $dsdhleisly,
        	order: $bwzkhvtrvf
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame(0.75411695, $obj->getQuantity());
		$this->assertSame(true, $obj->getPrice()->equals($duwaaekjjl));
		$this->assertSame($dsdhleisly, $obj->getOffer());
		$this->assertSame($bwzkhvtrvf, $obj->getOrder());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new OrderLine(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		$ztizeeqtas = new Price(connector: $connector);
		$obj->setPrice($ztizeeqtas);
		$this->assertSame(true, $obj->getPrice()->equals($ztizeeqtas));
		
		
		
		$obj->setQuantity(0.61820567);
		$this->assertSame(0.61820567, $obj->getQuantity());
		
		
		$gxstckchny = new Offer(connector: $connector, semanticId: "http://base.com/gbyxogemlv");
		$obj->setOffer($gxstckchny);
		$this->assertSame($gxstckchny, $obj->getOffer());
		
		
		
		$obj->setDescription("okamkhievb");
		$this->assertSame("okamkhievb", $obj->getDescription());
		
		
		$tplhxnohpu = new Order(connector: $connector, semanticId: "http://base.com/baspqejfdk");
		$obj->setOrder($tplhxnohpu);
		$this->assertSame($tplhxnohpu, $obj->getOrder());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new OrderLine(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			quantity: 0.75411695,
			price: $duwaaekjjl,
			offer: $dsdhleisly,
			order: $bwzkhvtrvf
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
