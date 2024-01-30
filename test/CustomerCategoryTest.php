<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class CustomerCategoryTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		

        $obj = new CustomerCategory(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	description: "qacctgqehd"
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame("qacctgqehd", $obj->getDescription());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new CustomerCategory(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$obj->setDescription("hqkpyvygsq");
		$this->assertSame("hqkpyvygsq", $obj->getDescription());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new CustomerCategory(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			description: "qacctgqehd"
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
