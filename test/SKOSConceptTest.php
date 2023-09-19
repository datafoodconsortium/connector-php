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

		
		$xqnptznwrc = new invalid(connector: $connector, semanticId: "http://base.com/ngptoirpvh");
		$obj->addPrefLabel($xqnptznwrc);
		$this->assertSame([$xqnptznwrc], $obj->getPrefLabel());
		
		
		$olficzkmic = new SKOSConcept(connector: $connector, semanticId: "http://base.com/etnoqatygr");
		$obj->addBroader($olficzkmic);
		$this->assertSame([$olficzkmic], $obj->getBroader());
		
		
		$cdlbbksfme = new invalid(connector: $connector, semanticId: "http://base.com/kanyuwmkgd");
		$obj->addScheme($cdlbbksfme);
		$this->assertSame([$cdlbbksfme], $obj->getScheme());
		
		
		$rsxfwfqprk = new SKOSConcept(connector: $connector, semanticId: "http://base.com/oonlwkiddu");
		$obj->addNarrower($rsxfwfqprk);
		$this->assertSame([$rsxfwfqprk], $obj->getNarrower());
		
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
