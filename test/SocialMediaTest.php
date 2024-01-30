<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class SocialMediaTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		
		

        $obj = new SocialMedia(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	name: "klxsgemvbr",
        	url: "emlcuanndd"
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame("klxsgemvbr", $obj->getName());
		$this->assertSame("emlcuanndd", $obj->getUrl());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new SocialMedia(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$obj->setName("nvgslxyopo");
		$this->assertSame("nvgslxyopo", $obj->getName());
		
		
		
		$obj->setUrl("fhgwvygaek");
		$this->assertSame("fhgwvygaek", $obj->getUrl());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new SocialMedia(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			name: "klxsgemvbr",
			url: "emlcuanndd"
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
