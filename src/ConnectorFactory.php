<?php

/*
 * MIT License
 * 
 * Copyright (c) 2023 Maxime Lecoq <maxime@lecoqlibre.fr>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
*/

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
		if ($type === "dfc:Price") return new Price(connector: $this->getConnector(), resource: $resource);
		if ($type === "skos:Concept") return new SKOSConcept(connector: $this->getConnector(), resource: $resource);
		if ($type === "dfc:OrderLine") return new OrderLine(connector: $this->getConnector(), resource: $resource);
		if ($type === "dfc:CustomerCategory") return new CustomerCategory(connector: $this->getConnector(), resource: $resource);
		if ($type === "dfc:Quantity") return new Quantity(connector: $this->getConnector(), resource: $resource);
		if ($type === "dfc:Enterprise") return new Enterprise(connector: $this->getConnector(), resource: $resource);
		if ($type === "dfc:Order") return new Order(connector: $this->getConnector(), resource: $resource);
		if ($type === "dfc:Catalog") return new Catalog(connector: $this->getConnector(), resource: $resource);
		if ($type === "dfc:SuppliedProduct") return new SuppliedProduct(connector: $this->getConnector(), resource: $resource);
		if ($type === "dfc:AllergenCharacteristic") return new AllergenCharacteristic(connector: $this->getConnector(), resource: $resource);
		if ($type === "dfc:CatalogItem") return new CatalogItem(connector: $this->getConnector(), resource: $resource);
		if ($type === "dfc:SaleSession") return new SaleSession(connector: $this->getConnector(), resource: $resource);
		if ($type === "dfc:Address") return new Address(connector: $this->getConnector(), resource: $resource);
		if ($type === "dfc:PhysicalCharacteristic") return new PhysicalCharacteristic(connector: $this->getConnector(), resource: $resource);
		if ($type === "dfc:Person") return new Person(connector: $this->getConnector(), resource: $resource);
		if ($type === "dfc:TechnicalProduct") return new TechnicalProduct(connector: $this->getConnector(), resource: $resource);
		if ($type === "dfc:Offer") return new Offer(connector: $this->getConnector(), resource: $resource);
		if ($type === "dfc:QuantitativeValue") return new QuantitativeValue(connector: $this->getConnector(), resource: $resource);
		if ($type === "dfc:NutrientCharacteristic") return new NutrientCharacteristic(connector: $this->getConnector(), resource: $resource);
        throw new \TypeError("Unrecognized type: " . $type, 505);
    }

}
