<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class SaleSessionTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		
		
		$dexguyjnkl = array(new Offer(connector: $connector, semanticId: "http://base.com/lqlcccbyez"));

        $obj = new SaleSession(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	beginDate: "bslfmuqtnb",
        	endDate: "cfyddnqhan",
        	quantity: 0.59352225,
        	offers: $dexguyjnkl
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame("bslfmuqtnb", $obj->getBeginDate());
		$this->assertSame("cfyddnqhan", $obj->getEndDate());
		$this->assertSame(0.59352225, $obj->getQuantity());
		$this->assertSame($dexguyjnkl, $obj->getOffers());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new SaleSession(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$obj->setQuantity(0.94330496);
		$this->assertSame(0.94330496, $obj->getQuantity());
		
		
		
		$obj->setBeginDate("hpwnpzurdz");
		$this->assertSame("hpwnpzurdz", $obj->getBeginDate());
		
		
		
		$obj->setEndDate("gxuxexxoif");
		$this->assertSame("gxuxexxoif", $obj->getEndDate());
		
		
		
		$epdwvlszny = new Offer(connector: $connector, semanticId: "http://base.com/lifhqirdzk");
		$obj->addOffer($epdwvlszny);
		$this->assertSame([$epdwvlszny], $obj->getOffers());
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new SaleSession(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			beginDate: "bslfmuqtnb",
			endDate: "cfyddnqhan",
			quantity: 0.59352225,
			offers: $dexguyjnkl
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
