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

use \VirtualAssembly\Semantizer\SemanticObjectAnonymous;
use \VirtualAssembly\Semantizer\Semanticable;

class QuantitativeValue extends SemanticObjectAnonymous implements Quantifiable {
	
	protected IConnector $connector;

	public function __construct(IConnector $connector, \EasyRdf\Resource $resource = null, string $semanticType = null, Semanticable $other = null, ISKOSConcept $unit = null, float $value = null) {
		$type = $semanticType? $semanticType: "dfc-b:QuantitativeValue";
		
		if ($other) {
			parent::__construct(semantizer: $connector->getSemantizer(), resource: $resource, other: $other);
			if (!$other->isSemanticTypeOf($type))
				throw new Error("Can't create the semantic object of type " . $type . " from a copy: the copy is of type " . $other->getSemanticType() . ".");
		}
		else { parent::__construct(semantizer: $connector->getSemantizer(), resource: $resource, semanticType: $type); }
		
		$this->connector = $connector;
		
		if ($unit) { $this->setQuantityUnit($unit); }
		if ($value || $value === 0) { $this->setQuantityValue($value); }
	}

	public function getQuantityValue(): float 
	 {
		return $this->getSemanticProperty("dfc-b:value");
		
	}
	

	public function getQuantityUnit(): ISKOSConcept
	 {
		return $this->getSemanticProperty("dfc-b:hasUnit");
		
	}
	

	public function setQuantityValue(float $quantityValue): void {
		$this->setSemanticProperty("dfc-b:value", $quantityValue);
	}
	

	public function setQuantityUnit(ISKOSConcept $quantityUnit): void {
		$this->setSemanticProperty("dfc-b:hasUnit", $quantityUnit);
	}
	

}
