<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class PersonTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		
		$ugcvzsfwec = array(new Address(connector: $connector, semanticId: "http://base.com/cabejfroqm"));
		$ohsreakwtr = array(new Enterprise(connector: $connector, semanticId: "http://base.com/wiijracwgc"));

        $obj = new Person(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	firstName: "ywqtqoxzeh",
        	lastName: "shmdpywjqk",
        	localizations: $ugcvzsfwec,
        	organizations: $ohsreakwtr
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame("ywqtqoxzeh", $obj->getFirstName());
		$this->assertSame("shmdpywjqk", $obj->getLastName());
		$this->assertSame($ugcvzsfwec, $obj->getLocalizations());
		$this->assertSame($ohsreakwtr, $obj->getAffiliatedOrganizations());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Person(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$obj->setFirstName("yojsgcznoq");
		$this->assertSame("yojsgcznoq", $obj->getFirstName());
		
		
		
		$obj->setLastName("nuibttwimb");
		$this->assertSame("nuibttwimb", $obj->getLastName());
		
		
		
		$dycgieexqg = new Address(connector: $connector, semanticId: "http://base.com/jcaxuioeja");
		$obj->addLocalization($dycgieexqg);
		$this->assertSame([$dycgieexqg], $obj->getLocalizations());
		
		
		$dalazlulhq = new Enterprise(connector: $connector, semanticId: "http://base.com/wkprxnnybw");
		$obj->affiliateTo($dalazlulhq);
		$this->assertSame([$dalazlulhq], $obj->getAffiliatedOrganizations());
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Person(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			firstName: "ywqtqoxzeh",
			lastName: "shmdpywjqk",
			localizations: $ugcvzsfwec,
			organizations: $ohsreakwtr
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
