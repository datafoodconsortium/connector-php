<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class OrderTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		
		$pwvwqmexbt = new SaleSession(connector: $connector, semanticId: "http://base.com/mldalmpaxl");
		$uzmwwetpku = new Enterprise(connector: $connector, semanticId: "http://base.com/mclmqgpefx");
		$wwtvwxjbus = array(new OrderLine(connector: $connector, semanticId: "http://base.com/szypmeiyde"));
		$unnqlkxjfn = new SKOSConcept(connector: $connector, semanticId: "http://base.com/gqlvrqopax");
		$abjupirhbk = new SKOSConcept(connector: $connector, semanticId: "http://base.com/dsxobdvsgw");
		$fvlegakmyi = new SKOSConcept(connector: $connector, semanticId: "http://base.com/uffbofikxk");

        $obj = new Order(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	number: "ztwcgyorub",
        	date: "ztcvzqxluz",
        	saleSession: $pwvwqmexbt,
        	client: $uzmwwetpku,
        	lines: $wwtvwxjbus,
        	fulfilmentStatus: $unnqlkxjfn,
        	orderStatus: $abjupirhbk,
        	paymentStatus: $fvlegakmyi
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame("ztwcgyorub", $obj->getNumber());
		$this->assertSame("ztcvzqxluz", $obj->getDate());
		$this->assertSame($pwvwqmexbt, $obj->getSaleSession());
		$this->assertSame($uzmwwetpku, $obj->getClient());
		$this->assertSame($wwtvwxjbus, $obj->getLines());
		$this->assertSame($unnqlkxjfn, $obj->getFulfilmentStatus());
		$this->assertSame($abjupirhbk, $obj->getOrderStatus());
		$this->assertSame($fvlegakmyi, $obj->getPaymentStatus());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Order(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		$jaltfghign = new SKOSConcept(connector: $connector, semanticId: "http://base.com/ouwaqtifza");
		$obj->setOrderStatus($jaltfghign);
		$this->assertSame($jaltfghign, $obj->getOrderStatus());
		
		
		$mrrzuthwdg = new SKOSConcept(connector: $connector, semanticId: "http://base.com/hyfcbbzaad");
		$obj->setFulfilmentStatus($mrrzuthwdg);
		$this->assertSame($mrrzuthwdg, $obj->getFulfilmentStatus());
		
		
		
		$krtbvjvnvu = new OrderLine(connector: $connector, semanticId: "http://base.com/laqtxjvuip");
		$obj->addLine($krtbvjvnvu);
		$this->assertSame([$krtbvjvnvu], $obj->getLines());
		
		
		$obj->setDate("oxbclvmnlx");
		$this->assertSame("oxbclvmnlx", $obj->getDate());
		
		
		$ddrzytpyzk = new SaleSession(connector: $connector, semanticId: "http://base.com/mbjscvkuit");
		$obj->setSaleSession($ddrzytpyzk);
		$this->assertSame($ddrzytpyzk, $obj->getSaleSession());
		
		
		$yqldlnaeac = new SKOSConcept(connector: $connector, semanticId: "http://base.com/bvfonycsjc");
		$obj->setPaymentStatus($yqldlnaeac);
		$this->assertSame($yqldlnaeac, $obj->getPaymentStatus());
		
		
		
		$obj->setNumber("gxkbguzpgw");
		$this->assertSame("gxkbguzpgw", $obj->getNumber());
		
		
		$idzwlripfx = new Enterprise(connector: $connector, semanticId: "http://base.com/mtjvvebavv");
		$obj->setClient($idzwlripfx);
		$this->assertSame($idzwlripfx, $obj->getClient());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Order(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			number: "ztwcgyorub",
			date: "ztcvzqxluz",
			saleSession: $pwvwqmexbt,
			client: $uzmwwetpku,
			lines: $wwtvwxjbus,
			fulfilmentStatus: $unnqlkxjfn,
			orderStatus: $abjupirhbk,
			paymentStatus: $fvlegakmyi
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
