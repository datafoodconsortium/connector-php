<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class PersonTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		
		$qmbexdddna = array(new Address(connector: $connector, semanticId: "http://base.com/jbrwedlpib"));
		$mjfjjexvuo = array(new Enterprise(connector: $connector, semanticId: "http://base.com/xjatanekbs"));
		

        $obj = new Person(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	firstName: "vqpizrpcqa",
        	lastName: "pourhlarmp",
        	localizations: $qmbexdddna,
        	organizations: $mjfjjexvuo,
        	logo: "jvbtjvmnmu"
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame("vqpizrpcqa", $obj->getFirstName());
		$this->assertSame("pourhlarmp", $obj->getLastName());
		$this->assertSame($qmbexdddna, $obj->getLocalizations());
		$this->assertSame($mjfjjexvuo, $obj->getAffiliatedOrganizations());
		$this->assertSame("jvbtjvmnmu", $obj->getLogo());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Person(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$pohontcgyc = new PhoneNumber(connector: $connector, semanticId: "http://base.com/mcsviiejdu");
		$obj->addPhoneNumber($pohontcgyc);
		$this->assertSame([$pohontcgyc], $obj->getPhoneNumbers());
		
		
		$obj->setLastName("hmohsftzla");
		$this->assertSame("hmohsftzla", $obj->getLastName());
		
		
		
		
		$obj->addWebsite("xrumjrnqyc");
		$this->assertSame(["xrumjrnqyc"], $obj->getWebsites());
		
		
		$obj->setFirstName("jurveomasi");
		$this->assertSame("jurveomasi", $obj->getFirstName());
		
		
		
		$rzilmheocp = new Address(connector: $connector, semanticId: "http://base.com/mpvpkjoswk");
		$obj->addLocalization($rzilmheocp);
		$this->assertSame([$rzilmheocp], $obj->getLocalizations());
		
		
		$ldbwlrdjfz = new SocialMedia(connector: $connector, semanticId: "http://base.com/eqljzpbgio");
		$obj->addSocialMedia($ldbwlrdjfz);
		$this->assertSame([$ldbwlrdjfz], $obj->getSocialMedias());
		
		
		
		$obj->addEmailAddress("vrureviual");
		$this->assertSame(["vrureviual"], $obj->getEmails());
		
		
		$rlsftqlanz = new Enterprise(connector: $connector, semanticId: "http://base.com/trbxfukljn");
		$obj->affiliateTo($rlsftqlanz);
		$this->assertSame([$rlsftqlanz], $obj->getAffiliatedOrganizations());
		
		
		$obj->setLogo("sdnztzfcvv");
		$this->assertSame("sdnztzfcvv", $obj->getLogo());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Person(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			firstName: "vqpizrpcqa",
			lastName: "pourhlarmp",
			localizations: $qmbexdddna,
			organizations: $mjfjjexvuo,
			logo: "jvbtjvmnmu"
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
