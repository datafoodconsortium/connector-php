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

use \VirtualAssembly\Semantizer\SemanticObject;
use \VirtualAssembly\Semantizer\Semanticable;

class SKOSConcept extends SemanticObject implements ISKOSConcept {
	
	protected IConnector $connector;

	public function __construct(IConnector $connector, string $semanticId = null, \EasyRdf\Resource $resource = null, string $semanticType = null, Semanticable $other = null, bool $doNotStore = false) {
		$type = "skos:Concept";
		
		if ($other) {
			parent::__construct(semantizer: $connector->getSemantizer(), semanticId: $semanticId, resource: $resource, other: $other, doNotStore: $doNotStore);
			if (!$other->isSemanticTypeOf($type))
				throw new Error("Can't create the semantic object of type " . $type . " from a copy: the copy is of type " . $other->getSemanticType() . ".");
		}
		else { parent::__construct(semantizer: $connector->getSemantizer(), semanticId: $semanticId, resource: $resource, semanticType: $type, doNotStore: $doNotStore); }
		
		$this->connector = $connector;
		
		
	}

	public function addScheme(ISKOSConceptScheme $scheme): void {
		$this->addSemanticPropertyReference("skos:inScheme", $scheme);
	}
	

	public function addNarrower(ISKOSConcept $narrower): void {
		$this->addSemanticPropertyReference("skos:narrower", $narrower);
	}
	

	public function addPrefLabel(ISKOSLabel $prefLabel): void {
		$this->addSemanticPropertyReference("skos:prefLabel", $prefLabel);
	}
	

	public function removeScheme(ISKOSConceptScheme $scheme): void {
		throw new Error("Not yet implemented.");
	}
	

	public function removePrefLabel(ISKOSLabel $prefLabel): void {
		throw new Error("Not yet implemented.");
	}
	

	public function removeNarrower(ISKOSConcept $narrower): void {
		throw new Error("Not yet implemented.");
	}
	

	public function getNarrower(): Array
	 {
		return $this->getSemanticPropertyAll("skos:narrower");
		
	}
	

	public function getPrefLabel(): Array
	 {
		return $this->getSemanticPropertyAll("skos:prefLabel");
		
	}
	

	public function getBroader(): Array
	 {
		return $this->getSemanticPropertyAll("skos:broader");
		
	}
	

	public function getScheme(): Array
	 {
		return $this->getSemanticPropertyAll("skos:inScheme");
		
	}
	

	public function removeBroader(ISKOSConcept $broader): void {
		throw new Error("Not yet implemented.");
	}
	

	public function addBroader(ISKOSConcept $broader): void {
		$this->addSemanticPropertyReference("skos:broader", $broader);
	}
	

}
