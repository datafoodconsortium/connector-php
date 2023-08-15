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

abstract class DefinedProduct extends SemanticObject implements IDefinedProduct {
	
	protected IConnector $connector;

	protected function __construct(IConnector $connector, string $semanticId = null, \EasyRdf\Resource $resource = null, string $semanticType = null, Semanticable $other = null, string $name = null, string $description = null, ISKOSConcept $productType = null, IQuantity $quantity = null, float $alcoholPercentage = null, string $lifetime = null, Array $claims = null, string $usageOrStorageConditions = null, Array $allergenCharacteristics = null, Array $nutrientCharacteristics = null, Array $physicalCharacteristics = null, ISKOSConcept $geographicalOrigin = null, Array $catalogItems = null, Array $certifications = null, Array $natureOrigin = null, Array $partOrigin = null, bool $doNotStore = false) {
		if ($other) { parent::__construct(semantizer: $connector->getSemantizer(), semanticId: $semanticId, resource: $resource, other: $other, doNotStore: $doNotStore); }
		else { parent::__construct(semantizer: $connector->getSemantizer(), semanticId: $semanticId, resource: $resource, semanticType: $semanticType, doNotStore: $doNotStore); }
		
		$this->connector = $connector;
		
		if ($name) { $this->setName($name); }
		if ($description) { $this->setDescription($description); }
		if ($productType) { $this->setProductType($productType); }
		if ($quantity) { $this->setQuantity($quantity); }
		if ($alcoholPercentage || $alcoholPercentage === 0) { $this->setAlcoholPercentage($alcoholPercentage); }
		if ($lifetime) { $this->setLifetime($lifetime); }
		if ($claims) { foreach ($claims as $e) { $this->addClaim($e); } }
		if ($usageOrStorageConditions) { $this->setUsageOrStorageConditions($usageOrStorageConditions); }
		if ($allergenCharacteristics) { foreach ($allergenCharacteristics as $e) { $this->addAllergenCharacteristic($e); } }
		if ($nutrientCharacteristics) { foreach ($nutrientCharacteristics as $e) { $this->addNutrientCharacteristic($e); } }
		if ($physicalCharacteristics) { foreach ($physicalCharacteristics as $e) { $this->addPhysicalCharacteristic($e); } }
		if ($geographicalOrigin) { $this->setGeographicalOrigin($geographicalOrigin); }
		if ($catalogItems) { foreach ($catalogItems as $e) { $this->addCatalogItem($e); } }
		if ($certifications) { foreach ($certifications as $e) { $this->addCertification($e); } }
		if ($natureOrigin) { foreach ($natureOrigin as $e) { $this->addNatureOrigin($e); } }
		if ($partOrigin) { foreach ($partOrigin as $e) { $this->addPartOrigin($e); } }
	}

	public function addCertification(ISKOSConcept $certification): void {
		$this->addSemanticPropertyReference("dfc:hasCertification", $certification);
	}
	

	public function getCertifications(): Array
	 {
		return $this->getSemanticPropertyAll("dfc:hasCertification");
		
	}
	

	public function removeCertification(ISKOSConcept $certification): void {
		throw new Error("Not yet implemented.");
	}
	
	public function getCatalogItems(): Array
	 {
		return $this->getSemanticPropertyAll("dfc:referencedBy");
		
	}
	

	public function addCatalogItem(ICatalogItem $catalogItem): void {
		$this->addSemanticPropertyReference("dfc:referencedBy", $catalogItem);
	}
	
	public function setName(string $name): void {
		$this->setSemanticProperty("dfc:name", $name);
	}
	

	public function getName(): string 
	 {
		return $this->getSemanticProperty("dfc:name");
		
	}
	
	public function getAllergenCharacteristics(): Array
	 {
		return $this->getSemanticPropertyAll("dfc:hasAllergenCharacteristic");
		
	}
	

	public function addAllergenCharacteristic(IAllergenCharacteristic $allergenCharacteristic): void {
		$this->addSemanticPropertyReference("dfc:hasAllergenCharacteristic", $allergenCharacteristic);
	}
	

	public function addPartOrigin(ISKOSConcept $partOrigin): void {
		$this->addSemanticPropertyReference("dfc:hasPartOrigin", $partOrigin);
	}
	

	public function setAlcoholPercentage(float $alcoholPercentage): void {
		$this->setSemanticProperty("dfc:alcoholPercentage", $alcoholPercentage);
	}
	

	public function removePartOrigin(ISKOSConcept $partOrigin): void {
		throw new Error("Not yet implemented.");
	}
	

	public function getUsageOrStorageConditions(): string 
	 {
		return $this->getSemanticProperty("dfc:usageOrStorageCondition");
		
	}
	

	public function removePhysicalCharacteristic(IPhysicalCharacteristic $physicalCharacteristic): void {
		throw new Error("Not yet implemented.");
	}
	

	public function addNutrientCharacteristic(INutrientCharacteristic $nutrientCharacteristic): void {
		$this->addSemanticPropertyReference("dfc:hasNutrientCharacteristic", $nutrientCharacteristic);
	}
	

	public function setGeographicalOrigin(ISKOSConcept $geographicalOrigin): void {
		$this->setSemanticProperty("dfc:hasGeographicalOrigin", $geographicalOrigin);
	}
	

	public function getLifetime(): string 
	 {
		return $this->getSemanticProperty("dfc:lifetime");
		
	}
	

	public function setUsageOrStorageConditions(string $usageOrStorageConditions): void {
		$this->setSemanticProperty("dfc:usageOrStorageCondition", $usageOrStorageConditions);
	}
	

	public function getPartOrigin(): Array
	 {
		return $this->getSemanticPropertyAll("dfc:hasPartOrigin");
		
	}
	

	public function setLifetime(string $lifetime): void {
		$this->setSemanticProperty("dfc:lifetime", $lifetime);
	}
	

	public function removeNatureOrigin(ISKOSConcept $natureOrigin): void {
		throw new Error("Not yet implemented.");
	}
	

	public function getGeographicalOrigin(): ISKOSConcept
	 {
		return $this->getSemanticProperty("dfc:hasGeographicalOrigin");
		
	}
	

	public function addPhysicalCharacteristic(IPhysicalCharacteristic $physicalCharacteristic): void {
		$this->addSemanticPropertyReference("dfc:hasPhysicalCharacteristic", $physicalCharacteristic);
	}
	

	public function getAlcoholPercentage(): float 
	 {
		return $this->getSemanticProperty("dfc:alcoholPercentage");
		
	}
	

	public function getPhysicalCharacteristics(): Array
	 {
		return $this->getSemanticPropertyAll("dfc:hasPhysicalCharacteristic");
		
	}
	

	public function removeNutrientCharacteristic(INutrientCharacteristic $nutrientCharacteristic): void {
		throw new Error("Not yet implemented.");
	}
	

	public function getNutrientCharacteristics(): Array
	 {
		return $this->getSemanticPropertyAll("dfc:hasNutrientCharacteristic");
		
	}
	

	public function removeAllergenCharacteristic(IAllergenCharacteristic $allergenCharacteristic): void {
		throw new Error("Not yet implemented.");
	}
	

	public function getNatureOrigin(): Array
	 {
		return $this->getSemanticPropertyAll("dfc:hasNatureOrigin");
		
	}
	

	public function addNatureOrigin(ISKOSConcept $natureOrigin): void {
		$this->addSemanticPropertyReference("dfc:hasNatureOrigin", $natureOrigin);
	}
	
	public function addClaim(ISKOSConcept $claim): void {
		$this->addSemanticPropertyReference("dfc:hasClaim", $claim);
	}
	

	public function removeClaim(ISKOSConcept $claim): void {
		throw new Error("Not yet implemented.");
	}
	

	public function setProductType(ISKOSConcept $productType): void {
		$this->setSemanticProperty("dfc:hasType", $productType);
	}
	

	public function getProductType(): ISKOSConcept
	 {
		return $this->getSemanticProperty("dfc:hasType");
		
	}
	

	public function getQuantity(): IQuantity
	 {
		return $this->getSemanticProperty("dfc:hasQuantity");
		
	}
	

	public function setQuantity(IQuantity $quantity): void {
		$this->setSemanticProperty("dfc:hasQuantity", $quantity);
	}
	

	public function getClaims(): Array
	 {
		return $this->getSemanticPropertyAll("dfc:hasClaim");
		
	}
	
	public function getDescription(): string 
	 {
		return $this->getSemanticProperty("dfc:description");
		
	}
	

	public function setDescription(string $description): void {
		$this->setSemanticProperty("dfc:description", $description);
	}
	

}
