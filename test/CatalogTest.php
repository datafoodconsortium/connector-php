<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class CatalogTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$lulpmoaphs = array(new Enterprise(connector: $connector, semanticId: "http://base.com/uqzrnbgopw"));
		$cqzcuowobm = array(new CatalogItem(connector: $connector, semanticId: "http://base.com/zddqnvkmuc"));

        $obj = new Catalog(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	maintainers: $lulpmoaphs,
        	items: $cqzcuowobm
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame($lulpmoaphs, $obj->getMaintainers());
		$this->assertSame($cqzcuowobm, $obj->getItems());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Catalog(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$mhxjaqtvnx = new CatalogItem(connector: $connector, semanticId: "http://base.com/qxorqrfqot");
		$obj->addItem($mhxjaqtvnx);
		$this->assertSame([$mhxjaqtvnx], $obj->getItems());
		
		
		$ybtierkreo = new Enterprise(connector: $connector, semanticId: "http://base.com/glkosbmrov");
		$obj->addMaintainer($ybtierkreo);
		$this->assertSame([$ybtierkreo], $obj->getMaintainers());
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Catalog(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			maintainers: $lulpmoaphs,
			items: $cqzcuowobm
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
