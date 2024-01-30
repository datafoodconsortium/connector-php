<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class CatalogTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$rlfdqchaps = array(new Enterprise(connector: $connector, semanticId: "http://base.com/klpqbxkczi"));
		$erzihwgplz = array(new CatalogItem(connector: $connector, semanticId: "http://base.com/plgrtatwgs"));

        $obj = new Catalog(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	maintainers: $rlfdqchaps,
        	items: $erzihwgplz
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame($rlfdqchaps, $obj->getMaintainers());
		$this->assertSame($erzihwgplz, $obj->getItems());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Catalog(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$dkunjgnini = new Enterprise(connector: $connector, semanticId: "http://base.com/hptprslikk");
		$obj->addMaintainer($dkunjgnini);
		$this->assertSame([$dkunjgnini], $obj->getMaintainers());
		
		
		$mhveygjgat = new CatalogItem(connector: $connector, semanticId: "http://base.com/utjnljwgio");
		$obj->addItem($mhveygjgat);
		$this->assertSame([$mhveygjgat], $obj->getItems());
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Catalog(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			maintainers: $rlfdqchaps,
			items: $erzihwgplz
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
