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

class Enterprise extends Agent implements IEnterprise, ProductSupplier, Onboardable, ManagedByMainContact {
	

	public function __construct(IConnector $connector, string $semanticId = null, \EasyRdf\Resource $resource = null, string $semanticType = null, Semanticable $other = null, string $name = null, Array $localizations = null, string $description = null, string $vatNumber = null, Array $customerCategories = null, Array $catalogs = null, Array $catalogItems = null, Array $suppliedProducts = null, Array $technicalProducts = null, IPerson $mainContact = null, string $logo = null, bool $doNotStore = false) {
		$type = "dfc-b:Enterprise";
		
		if ($other) {
			parent::__construct(connector: $connector, semanticId: $semanticId, resource: $resource, other: $other, doNotStore: $doNotStore);
			if (!$other->isSemanticTypeOf($type))
				throw new Error("Can't create the semantic object of type " . $type . " from a copy: the copy is of type " . $other->getSemanticType() . ".");
		}
		else { parent::__construct(connector: $connector, semanticId: $semanticId, resource: $resource, semanticType: $type, localizations: $localizations, logo: $logo, doNotStore: $doNotStore); }
		
		
		
		if ($name) { $this->setName($name); }
		if ($description) { $this->setDescription($description); }
		if ($vatNumber) { $this->setVatNumber($vatNumber); }
		if ($customerCategories) { foreach ($customerCategories as $e) { $this->addCustomerCategory($e); } }
		if ($catalogs) { foreach ($catalogs as $e) { $this->maintainCatalog($e); } }
		if ($catalogItems) { foreach ($catalogItems as $e) { $this->manageCatalogItem($e); } }
		if ($suppliedProducts) { foreach ($suppliedProducts as $e) { $this->supplyProduct($e); } }
		if ($technicalProducts) { foreach ($technicalProducts as $e) { $this->proposeTechnicalProducts($e); } }
		if ($mainContact) { $this->setMainContact($mainContact); }
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
	
	public function addCustomerCategory(ICustomerCategory $customerCategory): void {
		$this->addSemanticPropertyReference("dfc-b:defines", $customerCategory);
	}
	

	public function getCustomerCategories(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:defines");
		
	}
	
	public function getMainContact(): IPerson
	 {
		return $this->getSemanticProperty("dfc-b:hasMainContact");
		
	}
	
	public function removeSocialMedia(ISocialMedia $socialMedia): void {
		throw new Error("Not yet implemented.");
	}
	

	public function addSocialMedia(ISocialMedia $socialMedia): void {
		$this->addSemanticPropertyReference("dfc-b:hasSocialMedia", $socialMedia);
	}
	
	public function getEmails(): Array 
	 {
		return $this->getSemanticPropertyAll("dfc-b:email");
		
	}
	
	public function getSocialMedias(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:hasSocialMedia");
		
	}
	
	public function getSuppliedProducts(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:supplies");
		
	}
	

	public function unsupplyProduct(ISuppliedProduct $suppliedProduct): void {
		throw new Error("Not yet implemented.");
	}
	

	public function supplyProduct(ISuppliedProduct $suppliedProduct): void {
		$this->addSemanticPropertyReference("dfc-b:supplies", $suppliedProduct);
	}
	
	public function getProposedTechnicalProducts(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:proposes");
		
	}
	

	public function proposeTechnicalProducts(ITechnicalProduct $technicalProducts): void {
		$this->addSemanticPropertyReference("dfc-b:proposes", $technicalProducts);
	}
	

	public function unproposeTechnicalProducts(ITechnicalProduct $technicalProducts): void {
		throw new Error("Not yet implemented.");
	}
	
	public function getPhoneNumbers(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:hasPhoneNumber");
		
	}
	
	public function manageCatalogItem(ICatalogItem $catalogItem): void {
		$this->addSemanticPropertyReference("dfc-b:manages", $catalogItem);
	}
	

	public function getManagedCatalogItems(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:manages");
		
	}
	

	public function unmanageCatalogItem(ICatalogItem $catalogItem): void {
		throw new Error("Not yet implemented.");
	}
	
	public function getName(): string 
	 {
		return $this->getSemanticProperty("dfc-b:name");
		
	}
	

	public function setName(string $name): void {
		$this->setSemanticProperty("dfc-b:name", $name);
	}
	
	public function removePhoneNumber(IPhoneNumber $phoneNumber): void {
		throw new Error("Not yet implemented.");
	}
	

	public function addPhoneNumber(IPhoneNumber $phoneNumber): void {
		$this->addSemanticPropertyReference("dfc-b:hasPhoneNumber", $phoneNumber);
	}
	
	public function getLocalizations(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:hasAddress");
		
	}
	
	public function getWebsites(): Array 
	 {
		return $this->getSemanticPropertyAll("dfc-b:websitePage");
		
	}
	
	public function removeWebsite(string $website): void {
		throw new Error("Not yet implemented.");
	}
	

	public function addWebsite(string $website): void {
		$this->addSemanticPropertyLiteral("dfc-b:websitePage", $website);
	}
	
	public function getDescription(): string 
	 {
		return $this->getSemanticProperty("dfc-b:hasDescription");
		
	}
	

	public function setDescription(string $description): void {
		$this->setSemanticProperty("dfc-b:hasDescription", $description);
	}
	
	public function addEmailAddress(string $emailAddress): void {
		$this->addSemanticPropertyLiteral("dfc-b:email", $emailAddress);
	}
	

	public function removeEmailAddress(string $emailAddress): void {
		throw new Error("Not yet implemented.");
	}
	
	public function setVatNumber(string $vatNumber): void {
		$this->setSemanticProperty("dfc-b:VATnumber", $vatNumber);
	}
	

	public function getVatNumber(): string 
	 {
		return $this->getSemanticProperty("dfc-b:VATnumber");
		
	}
	
	public function setMainContact(IPerson $mainContact): void {
		$this->setSemanticProperty("dfc-b:hasMainContact", $mainContact);
	}
	
	public function removeLocalization(IAddress $localization): void {
		throw new Error("Not yet implemented.");
	}
	

	public function addLocalization(IAddress $localization): void {
		$this->addSemanticPropertyReference("dfc-b:hasAddress", $localization);
	}
	

}
