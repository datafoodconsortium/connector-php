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

class Enterprise extends Agent implements ProductSupplier, IEnterprise, Onboardable {
	

	public function __construct(IConnector $connector, string $semanticId = null, \EasyRdf\Resource $resource = null, string $semanticType = null, Semanticable $other = null, Array $localizations = null, string $description = null, string $vatNumber = null, Array $customerCategories = null, Array $catalogs = null, Array $catalogItems = null, Array $suppliedProducts = null, Array $technicalProducts = null, bool $doNotStore = false) {
		$type = "dfc-b:Enterprise";
		
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

	public function getVatNumber(): string 
	 {
		return $this->getSemanticProperty("dfc-b:VATnumber");
		
	}
	

	public function setVatNumber(string $vatNumber): void {
		$this->setSemanticProperty("dfc-b:VATnumber", $vatNumber);
	}
	
	public function maintainCatalog(ICatalog $catalog): void {
		$this->addSemanticPropertyReference("dfc-b:maintains", $catalog);
	}
	

	public function getMaintainedCatalogs(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:maintains");
		
	}
	

	public function unmaintainCatalog(ICatalog $catalog): void {
		throw new Error("Not yet implemented.");
	}
	
	public function setDescription(string $description): void {
		$this->setSemanticProperty("dfc-b:hasDescription", $description);
	}
	

	public function getDescription(): string 
	 {
		return $this->getSemanticProperty("dfc-b:hasDescription");
		
	}
	
	public function getCustomerCategories(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:defines");
		
	}
	

	public function addCustomerCategory(ICustomerCategory $customerCategory): void {
		$this->addSemanticPropertyReference("dfc-b:defines", $customerCategory);
	}
	
	public function getSuppliedProducts(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:supplies");
		
	}
	

	public function supplyProduct(ISuppliedProduct $suppliedProduct): void {
		$this->addSemanticPropertyReference("dfc-b:supplies", $suppliedProduct);
	}
	

	public function unsupplyProduct(ISuppliedProduct $suppliedProduct): void {
		throw new Error("Not yet implemented.");
	}
	
	public function unproposeTechnicalProducts(ITechnicalProduct $technicalProducts): void {
		throw new Error("Not yet implemented.");
	}
	

	public function getProposedTechnicalProducts(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:proposes");
		
	}
	

	public function proposeTechnicalProducts(ITechnicalProduct $technicalProducts): void {
		$this->addSemanticPropertyReference("dfc-b:proposes", $technicalProducts);
	}
	
	public function manageCatalogItem(ICatalogItem $catalogItem): void {
		$this->addSemanticPropertyReference("dfc-b:manages", $catalogItem);
	}
	

	public function unmanageCatalogItem(ICatalogItem $catalogItem): void {
		throw new Error("Not yet implemented.");
	}
	

	public function getManagedCatalogItems(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:manages");
		
	}
	

}
