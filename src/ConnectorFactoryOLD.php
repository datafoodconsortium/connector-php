<?php

namespace DataFoodConsortium\Connector;

use \VirtualAssembly\Semantizer\IFactory;
use \VirtualAssembly\Semantizer\Semanticable;

class ConnectorFactory implements IFactory {

    private Connector $connector;

    public function __construct(Connector $connector) {
        $this->connector = $connector;
    }

    public function getConnector(): Connector {
        return $this->connector;
    }

    public function makeFromResource($resource): Semanticable {
        $type = $resource->type();
        if ($type === "dfc-b:Price") return new Price(connector: $this->getConnector(), resource: $resource);
        if ($type === "dfc-b:AllergenCharacteristic") return new AllergenCharacteristic(connector: $this->getConnector(), resource: $resource);
        if ($type === "dfc-b:NutrientCharacteristic") return new NutrientCharacteristic(connector: $this->getConnector(), resource: $resource);
        if ($type === "dfc-b:PhysicalCharacteristic") return new PhysicalCharacteristic(connector: $this->getConnector(), resource: $resource);
        if ($type === "dfc-b:QuantitativeValue") return new QuantitativeValue(connector: $this->getConnector(), resource: $resource);
        if ($type === "dfc-b:Quantity") return new Quantity(connector: $this->getConnector(), resource: $resource);
        if ($type === "skos:Concept") return new SKOSConcept(connector: $this->getConnector(), resource: $resource);
        if ($type === "skos:ConceptScheme") return new SKOSConcept(connector: $this->getConnector(), resource: $resource);
        throw new \TypeError("Unrecognized type: " . $type, 505);
    }

}