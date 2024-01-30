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

		
		$dvbikyuhwm = new SKOSConcept(connector: $connector, semanticId: "http://base.com/vgbiwsuwnv");
		$obj->addBroader($dvbikyuhwm);
		$this->assertSame([$dvbikyuhwm], $obj->getBroader());
		
		
		$eaqdzepnri = new invalid(connector: $connector, semanticId: "http://base.com/uqdowokzan");
		$obj->addScheme($eaqdzepnri);
		$this->assertSame([$eaqdzepnri], $obj->getScheme());
		
		
		$qhhwagkfcx = new invalid(connector: $connector, semanticId: "http://base.com/gugpzskhbz");
		$obj->addPrefLabel($qhhwagkfcx);
		$this->assertSame([$qhhwagkfcx], $obj->getPrefLabel());
		
		
		$yivvcposrl = new SKOSConcept(connector: $connector, semanticId: "http://base.com/lpwylwnndh");
		$obj->addNarrower($yivvcposrl);
		$this->assertSame([$yivvcposrl], $obj->getNarrower());
		
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
