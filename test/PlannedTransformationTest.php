<?php declare(strict_types=1);

namespace DataFoodConsortium\Connector;
use PHPUnit\Framework\TestCase;

require_once("./vendor/autoload.php");

final class PlannedTransformationTest extends TestCase {

	public function testConstructor(): void {
        $connector = new Connector();

		$zbdfecqjsz = new SKOSConcept(connector: $connector, semanticId: "http://base.com/pdcglmdhrl");
		$hwrkkixarv = new PlannedConsumptionFlow(connector: $connector, semanticId: "http://base.com/eqkzxjdpem");
		$xeenzcuovq = new PlannedProductionFlow(connector: $connector, semanticId: "http://base.com/kghiilfton");

        $obj = new PlannedTransformation(
            connector: $connector,
        	semanticId: "http://example.org/obj",
        	transformationType: $zbdfecqjsz,
        	consumptionFlow: $hwrkkixarv,
        	productionFlow: $xeenzcuovq
        );

        $this->assertSame("http://example.org/obj", $obj->getSemanticId());
		$this->assertSame($zbdfecqjsz, $obj->getTransformationType());
		$this->assertSame($hwrkkixarv, $obj->getPlannedConsumptionFlow());
		$this->assertSame($xeenzcuovq, $obj->getPlannedProductionFlow());
    }

	public function testGetSet(): void {
        $connector = new Connector();

        $obj = new PlannedTransformation(
            connector: $connector, 
			semanticId: "http://example.org/obj"
        );

		$mondwhfdpf = new SKOSConcept(connector: $connector, semanticId: "http://base.com/wokjooijea");
		$obj->setTransformationType($mondwhfdpf);
		$this->assertSame($mondwhfdpf, $obj->getTransformationType());
		
		
		$hyoiiciocm = new PlannedProductionFlow(connector: $connector, semanticId: "http://base.com/ytlwrienqe");
		$obj->setPlannedProductionFlow($hyoiiciocm);
		$this->assertSame($hyoiiciocm, $obj->getPlannedProductionFlow());
		
		
		$kudomwuoex = new PlannedConsumptionFlow(connector: $connector, semanticId: "http://base.com/wzoowsicih");
		$obj->setPlannedConsumptionFlow($kudomwuoex);
		$this->assertSame($kudomwuoex, $obj->getPlannedConsumptionFlow());
		
		
    }

	/*public function testImportExport(): void {
		$connector = new Connector();

		$obj = new PlannedTransformation(
		    connector: $connector,
			semanticId: "http://example.org/obj",
			transformationType: $zbdfecqjsz,
			consumptionFlow: $hwrkkixarv,
			productionFlow: $xeenzcuovq
		);

		$export = $connector->export([$obj]);
		$import = $connector->import($export);
		$this->assertSame(true, $import[0]->equals($obj));
	}*/
}
