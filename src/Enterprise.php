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

class Enterprise extends Agent implements IEnterprise, ProductSupplier, Onboardable {
	

	public function __construct(IConnector $connector, string $semanticId = null, \EasyRdf\Resource $resource = null, string $semanticType = null, Semanticable $other = null, Array $localizations = null, string $description = null, string $vatNumber = null, Array $customerCategories = null, Array $catalogs = null, Array $catalogItems = null, Array $suppliedProducts = null, Array $technicalProducts = null, bool $doNotStore = false) {
		$type = "dfc:Enterprise";
		
		if ($other) {
			parent::__construct(connector: $connector, semanticId: $semanticId, resource: $resource, other: $other, doNotStore: $doNotStore);
			if (!$other->isSemanticTypeOf($type))
				throw new Error("Can't create the semantic object of type " . $type . " from a copy: the copy is of type " . $other->getSemanticType() . ".");
		}
		else { parent::__construct(connector: $connector, semanticId: $semanticId, resource: $resource, semanticType: $type, localizations: $localizations, doNotStore: $doNotStore); }
		
		
		
		if ($description) { $this->setDescription($description); }
		if ($vatNumber) { $this->setVatNumber($vatNumber); }
		if ($customerCategories) { foreach ($customerCategories as $e) { $this->addCustomerCategory($e); } }
		if ($catalogs) { foreach ($catalogs as $e) { $this->maintainCatalog($e); } }
		if ($catalogItems) { foreach ($catalogItems as $e) { $this->manageCatalogItem($e); } }
		if ($suppliedProducts) { foreach ($suppliedProducts as $e) { $this->supplyProduct($e); } }
		if ($technicalProducts) { foreach ($technicalProducts as $e) { $this->proposeTechnicalProducts($e); } }
	}

	public function getManagedCatalogItems(): Array
	 {
		return $this->getSemanticPropertyAll("dfc:manages");
		
	}
	

	public function unmanageCatalogItem(ICatalogItem $catalogItem): void {
		throw new Error("Not yet implemented.");
	}
	

	public function manageCatalogItem(ICatalogItem $catalogItem): void {
		$this->addSemanticPropertyReference("dfc:manages", $catalogItem);
	}
	
	public function maintainCatalog(ICatalog $catalog): void {
		$this->addSemanticPropertyReference("dfc:maintains", $catalog);
	}
	

	public function getMaintainedCatalogs(): Array
	 {
		return $this->getSemanticPropertyAll("dfc:maintains");
		
	}
	

	public function unmaintainCatalog(ICatalog $catalog): void {
		throw new Error("Not yet implemented.");
	}
	
	public function addCustomerCategory(ICustomerCategory $customerCategory): void {
		$this->addSemanticPropertyReference("dfc:defines", $customerCategory);
	}
	

	public function getCustomerCategories(): Array
	 {
		return $this->getSemanticPropertyAll("dfc:defines");
		
	}
	
	public function setVatNumber(string $vatNumber): void {
		$this->setSemanticProperty("dfc:VATnumber", $vatNumber);
	}
	

	public function getVatNumber(): string 
	 {
		return $this->getSemanticProperty("dfc:VATnumber");
		
	}
	
	public function getDescription(): string 
	 {
		return $this->getSemanticProperty("dfc:hasDescription");
		
	}
	

	public function setDescription(string $description): void {
		$this->setSemanticProperty("dfc:hasDescription", $description);
	}
	
	public function unproposeTechnicalProducts(ITechnicalProduct $technicalProducts): void {
		throw new Error("Not yet implemented.");
	}
	

	public function proposeTechnicalProducts(ITechnicalProduct $technicalProducts): void {
		$this->addSemanticPropertyReference("dfc:proposes", $technicalProducts);
	}
	

	public function getProposedTechnicalProducts(): Array
	 {
		return $this->getSemanticPropertyAll("dfc:proposes");
		
	}
	
	public function supplyProduct(ISuppliedProduct $suppliedProduct): void {
		$this->addSemanticPropertyReference("dfc:supplies", $suppliedProduct);
	}
	

	public function getSuppliedProducts(): Array
	 {
		return $this->getSemanticPropertyAll("dfc:supplies");
		
	}
	

	public function unsupplyProduct(ISuppliedProduct $suppliedProduct): void {
		throw new Error("Not yet implemented.");
	}
	

}
