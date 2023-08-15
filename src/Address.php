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

class Address extends SemanticObject implements IAddress {
	
	protected IConnector $connector;

	public function __construct(IConnector $connector, string $semanticId = null, \EasyRdf\Resource $resource = null, string $semanticType = null, Semanticable $other = null, string $street = null, string $postalCode = null, string $city = null, string $country = null, bool $doNotStore = false) {
		$type = "dfc:Address";
		
		if ($other) {
			parent::__construct(semantizer: $connector->getSemantizer(), semanticId: $semanticId, resource: $resource, other: $other, doNotStore: $doNotStore);
			if (!$other->isSemanticTypeOf($type))
				throw new Error("Can't create the semantic object of type " . $type . " from a copy: the copy is of type " . $other->getSemanticType() . ".");
		}
		else { parent::__construct(semantizer: $connector->getSemantizer(), semanticId: $semanticId, resource: $resource, semanticType: $type, doNotStore: $doNotStore); }
		
		$this->connector = $connector;
		
		if ($street) { $this->setStreet($street); }
		if ($postalCode) { $this->setPostalCode($postalCode); }
		if ($city) { $this->setCity($city); }
		if ($country) { $this->setCountry($country); }
	}

	public function getPostalCode(): string 
	 {
		return $this->getSemanticProperty("dfc:hasPostalCode");
		
	}
	

	public function setStreet(string $street): void {
		$this->setSemanticProperty("dfc:hasStreet", $street);
	}
	

	public function setCountry(string $country): void {
		$this->setSemanticProperty("dfc:hasCountry", $country);
	}
	

	public function getCountry(): string 
	 {
		return $this->getSemanticProperty("dfc:hasCountry");
		
	}
	

	public function setPostalCode(string $postalCode): void {
		$this->setSemanticProperty("dfc:hasPostalCode", $postalCode);
	}
	

	public function getCity(): string 
	 {
		return $this->getSemanticProperty("dfc:hasCity");
		
	}
	

	public function setCity(string $city): void {
		$this->setSemanticProperty("dfc:hasCity", $city);
	}
	

	public function getStreet(): string 
	 {
		return $this->getSemanticProperty("dfc:hasStreet");
		
	}
	

}
