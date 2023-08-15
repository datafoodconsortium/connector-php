<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class SKOSConceptTest extends TestCase {



	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new SKOSConcept(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		
		$zospmoxgsg = new SKOSConcept(connector: $connector, semanticId: "http://base.com/hdhpwbwhwc");
		$obj->addNarrower($zospmoxgsg);
		$this->assertSame([$zospmoxgsg], $obj->getNarrower());
		
		
		$onsfdodpll = new SKOSConcept(connector: $connector, semanticId: "http://base.com/mxvieadnuo");
		$obj->addBroader($onsfdodpll);
		$this->assertSame([$onsfdodpll], $obj->getBroader());
		
		
		$vkbzbnjjgv = new invalid(connector: $connector, semanticId: "http://base.com/trhfzsldzq");
		$obj->addScheme($vkbzbnjjgv);
		$this->assertSame([$vkbzbnjjgv], $obj->getScheme());
		
		
		$qvcaaqimre = new invalid(connector: $connector, semanticId: "http://base.com/zgdzzmjfim");
		$obj->addPrefLabel($qvcaaqimre);
		$this->assertSame([$qvcaaqimre], $obj->getPrefLabel());
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new SKOSConcept(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
