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

class TechnicalProduct extends DefinedProduct implements ITechnicalProduct {
	

	public function __construct(IConnector $connector, string $semanticId = null, \EasyRdf\Resource $resource = null, string $semanticType = null, Semanticable $other = null, string $name = null, string $description = null, ISKOSConcept $productType = null, IQuantity $quantity = null, float $alcoholPercentage = null, string $lifetime = null, Array $claims = null, string $usageOrStorageConditions = null, Array $allergenCharacteristics = null, Array $nutrientCharacteristics = null, Array $physicalCharacteristics = null, ISKOSConcept $geographicalOrigin = null, Array $catalogItems = null, Array $certifications = null, Array $natureOrigin = null, Array $partOrigin = null, bool $doNotStore = false) {
		$type = "dfc-b:TechnicalProduct";
		
		if ($other) {
			parent::__construct(connector: $connector, semanticId: $semanticId, resource: $resource, other: $other, doNotStore: $doNotStore);
			if (!$other->isSemanticTypeOf($type))
				throw new Error("Can't create the semantic object of type " . $type . " from a copy: the copy is of type " . $other->getSemanticType() . ".");
		}
		else { parent::__construct(connector: $connector, semanticId: $semanticId, resource: $resource, semanticType: $type, name: $name, description: $description, productType: $productType, quantity: $quantity, alcoholPercentage: $alcoholPercentage, lifetime: $lifetime, claims: $claims, usageOrStorageConditions: $usageOrStorageConditions, allergenCharacteristics: $allergenCharacteristics, nutrientCharacteristics: $nutrientCharacteristics, physicalCharacteristics: $physicalCharacteristics, geographicalOrigin: $geographicalOrigin, catalogItems: $catalogItems, certifications: $certifications, natureOrigin: $natureOrigin, partOrigin: $partOrigin, doNotStore: $doNotStore); }
		
		
		
		
	}

	public function setDescription(string $description): void {
		$this->setSemanticProperty("dfc-b:description", $description);
	}
	

	public function getDescription(): string 
	 {
		return $this->getSemanticProperty("dfc-b:description");
		
	}
	
	public function addCatalogItem(ICatalogItem $catalogItem): void {
		$this->addSemanticPropertyReference("dfc-b:referencedBy", $catalogItem);
	}
	

	public function getCatalogItems(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:referencedBy");
		
	}
	
	public function addCertification(ISKOSConcept $certification): void {
		$this->addSemanticPropertyReference("dfc-b:hasCertification", $certification);
	}
	

	public function getCertifications(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:hasCertification");
		
	}
	

	public function removeCertification(ISKOSConcept $certification): void {
		throw new Error("Not yet implemented.");
	}
	
	public function getNutrientCharacteristics(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:hasNutrientCharacteristic");
		
	}
	

	public function setGeographicalOrigin(ISKOSConcept $geographicalOrigin): void {
		$this->setSemanticProperty("dfc-b:hasGeographicalOrigin", $geographicalOrigin);
	}
	

	public function getAlcoholPercentage(): float 
	 {
		return $this->getSemanticProperty("dfc-b:alcoholPercentage");
		
	}
	

	public function getLifetime(): string 
	 {
		return $this->getSemanticProperty("dfc-b:lifetime");
		
	}
	

	public function setLifetime(string $lifetime): void {
		$this->setSemanticProperty("dfc-b:lifetime", $lifetime);
	}
	

	public function addPhysicalCharacteristic(IPhysicalCharacteristic $physicalCharacteristic): void {
		$this->addSemanticPropertyReference("dfc-b:hasPhysicalCharacteristic", $physicalCharacteristic);
	}
	

	public function removePartOrigin(ISKOSConcept $partOrigin): void {
		throw new Error("Not yet implemented.");
	}
	

	public function addNatureOrigin(ISKOSConcept $natureOrigin): void {
		$this->addSemanticPropertyReference("dfc-b:hasNatureOrigin", $natureOrigin);
	}
	

	public function removeNutrientCharacteristic(INutrientCharacteristic $nutrientCharacteristic): void {
		throw new Error("Not yet implemented.");
	}
	

	public function getPartOrigin(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:hasPartOrigin");
		
	}
	

	public function setAlcoholPercentage(float $alcoholPercentage): void {
		$this->setSemanticProperty("dfc-b:alcoholPercentage", $alcoholPercentage);
	}
	

	public function removePhysicalCharacteristic(IPhysicalCharacteristic $physicalCharacteristic): void {
		throw new Error("Not yet implemented.");
	}
	

	public function getAllergenCharacteristics(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:hasAllergenCharacteristic");
		
	}
	

	public function setUsageOrStorageConditions(string $usageOrStorageConditions): void {
		$this->setSemanticProperty("dfc-b:usageOrStorageCondition", $usageOrStorageConditions);
	}
	

	public function addAllergenCharacteristic(IAllergenCharacteristic $allergenCharacteristic): void {
		$this->addSemanticPropertyReference("dfc-b:hasAllergenCharacteristic", $allergenCharacteristic);
	}
	

	public function removeNatureOrigin(ISKOSConcept $natureOrigin): void {
		throw new Error("Not yet implemented.");
	}
	

	public function removeAllergenCharacteristic(IAllergenCharacteristic $allergenCharacteristic): void {
		throw new Error("Not yet implemented.");
	}
	

	public function getPhysicalCharacteristics(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:hasPhysicalCharacteristic");
		
	}
	

	public function addNutrientCharacteristic(INutrientCharacteristic $nutrientCharacteristic): void {
		$this->addSemanticPropertyReference("dfc-b:hasNutrientCharacteristic", $nutrientCharacteristic);
	}
	

	public function addPartOrigin(ISKOSConcept $partOrigin): void {
		$this->addSemanticPropertyReference("dfc-b:hasPartOrigin", $partOrigin);
	}
	

	public function getGeographicalOrigin(): ISKOSConcept
	 {
		return $this->getSemanticProperty("dfc-b:hasGeographicalOrigin");
		
	}
	

	public function getNatureOrigin(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:hasNatureOrigin");
		
	}
	

	public function getUsageOrStorageConditions(): string 
	 {
		return $this->getSemanticProperty("dfc-b:usageOrStorageCondition");
		
	}
	
	public function getName(): string 
	 {
		return $this->getSemanticProperty("dfc-b:name");
		
	}
	

	public function setName(string $name): void {
		$this->setSemanticProperty("dfc-b:name", $name);
	}
	

}
