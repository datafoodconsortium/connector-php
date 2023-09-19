<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class PersonTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		
		$vossdsghma = array(new Address(connector: $connector, semanticId: "http://base.com/nvzffatmox"));
		$totrttazhr = array(new Enterprise(connector: $connector, semanticId: "http://base.com/wfwoolswgi"));

        $obj = new Person(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	firstName: "drfcjejasa",
        	lastName: "qcgyhecggo",
        	localizations: $vossdsghma,
        	organizations: $totrttazhr
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame("drfcjejasa", $obj->getFirstName());
		$this->assertSame("qcgyhecggo", $obj->getLastName());
		$this->assertSame($vossdsghma, $obj->getLocalizations());
		$this->assertSame($totrttazhr, $obj->getAffiliatedOrganizations());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Person(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$obj->setLastName("oqylsxojfp");
		$this->assertSame("oqylsxojfp", $obj->getLastName());
		
		
		
		$obj->setFirstName("bnoirputvh");
		$this->assertSame("bnoirputvh", $obj->getFirstName());
		
		
		
		$tdzjudegvf = new Address(connector: $connector, semanticId: "http://base.com/fqjizhuayr");
		$obj->addLocalization($tdzjudegvf);
		$this->assertSame([$tdzjudegvf], $obj->getLocalizations());
		
		
		$bvgoncrhga = new Enterprise(connector: $connector, semanticId: "http://base.com/nzmltjciui");
		$obj->affiliateTo($bvgoncrhga);
		$this->assertSame([$bvgoncrhga], $obj->getAffiliatedOrganizations());
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Person(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			firstName: "drfcjejasa",
			lastName: "qcgyhecggo",
			localizations: $vossdsghma,
			organizations: $totrttazhr
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
