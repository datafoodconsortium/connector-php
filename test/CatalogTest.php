<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class CatalogTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$ihmdorjvbm = array(new Enterprise(connector: $connector, semanticId: "http://base.com/jnslvxybji"));
		$bnrwtaxmqw = array(new CatalogItem(connector: $connector, semanticId: "http://base.com/pkhganikiv"));

        $obj = new Catalog(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	maintainers: $ihmdorjvbm,
        	items: $bnrwtaxmqw
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame($ihmdorjvbm, $obj->getMaintainers());
		$this->assertSame($bnrwtaxmqw, $obj->getItems());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new Catalog(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$vsthlhyqiy = new Enterprise(connector: $connector, semanticId: "http://base.com/oayofjgygf");
		$obj->addMaintainer($vsthlhyqiy);
		$this->assertSame([$vsthlhyqiy], $obj->getMaintainers());
		
		
		$yhwondrrri = new CatalogItem(connector: $connector, semanticId: "http://base.com/xuzfjdrnhb");
		$obj->addItem($yhwondrrri);
		$this->assertSame([$yhwondrrri], $obj->getItems());
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new Catalog(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			maintainers: $ihmdorjvbm,
			items: $bnrwtaxmqw
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
