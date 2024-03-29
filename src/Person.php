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

class Person extends Agent implements IPerson {
	

	public function __construct(IConnector $connector, string $semanticId = null, \EasyRdf\Resource $resource = null, string $semanticType = null, Semanticable $other = null, string $firstName = null, string $lastName = null, Array $localizations = null, Array $organizations = null, string $logo = null, bool $doNotStore = false) {
		$type = "dfc-b:Person";
		
		if ($other) {
			parent::__construct(connector: $connector, semanticId: $semanticId, resource: $resource, other: $other, doNotStore: $doNotStore);
			if (!$other->isSemanticTypeOf($type))
				throw new Error("Can't create the semantic object of type " . $type . " from a copy: the copy is of type " . $other->getSemanticType() . ".");
		}
		else { parent::__construct(connector: $connector, semanticId: $semanticId, resource: $resource, semanticType: $type, localizations: $localizations, logo: $logo, doNotStore: $doNotStore); }
		
		
		
		if ($firstName) { $this->setFirstName($firstName); }
		if ($lastName) { $this->setLastName($lastName); }
		if ($organizations) { foreach ($organizations as $e) { $this->affiliateTo($e); } }
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
	
	public function getPhoneNumbers(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:hasPhoneNumber");
		
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
	
	public function getAffiliatedOrganizations(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:affiliates");
		
	}
	

	public function affiliateTo(IEnterprise $organization): void {
		$this->addSemanticPropertyReference("dfc-b:affiliates", $organization);
	}
	

	public function leaveAffiliatedOrganization(IEnterprise $organization): void {
		throw new Error("Not yet implemented.");
	}
	
	public function addEmailAddress(string $emailAddress): void {
		$this->addSemanticPropertyLiteral("dfc-b:email", $emailAddress);
	}
	

	public function removeEmailAddress(string $emailAddress): void {
		throw new Error("Not yet implemented.");
	}
	
	public function getLastName(): string 
	 {
		return $this->getSemanticProperty("dfc-b:familyName");
		
	}
	

	public function setLastName(string $lastName): void {
		$this->setSemanticProperty("dfc-b:familyName", $lastName);
	}
	

	public function getFirstName(): string 
	 {
		return $this->getSemanticProperty("dfc-b:firstName");
		
	}
	

	public function setFirstName(string $firstName): void {
		$this->setSemanticProperty("dfc-b:firstName", $firstName);
	}
	
	public function removeLocalization(IAddress $localization): void {
		throw new Error("Not yet implemented.");
	}
	

	public function addLocalization(IAddress $localization): void {
		$this->addSemanticPropertyReference("dfc-b:hasAddress", $localization);
	}
	

}
