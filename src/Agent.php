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

abstract class Agent extends SemanticObject implements IAgent {
	
	protected IConnector $connector;

	protected function __construct(IConnector $connector, string $semanticId = null, \EasyRdf\Resource $resource = null, string $semanticType = null, Semanticable $other = null, Array $localizations = null, Array $phoneNumbers = null, string $emails = null, string $websites = null, Array $socialMedias = null, string $logo = null, bool $doNotStore = false) {
		if ($other) { parent::__construct(semantizer: $connector->getSemantizer(), semanticId: $semanticId, resource: $resource, other: $other, doNotStore: $doNotStore); }
		else { parent::__construct(semantizer: $connector->getSemantizer(), semanticId: $semanticId, resource: $resource, semanticType: $semanticType, doNotStore: $doNotStore); }
		
		$this->connector = $connector;
		
		if ($localizations) { foreach ($localizations as $e) { $this->addLocalization($e); } }
		if ($phoneNumbers) { foreach ($phoneNumbers as $e) { $this->addPhoneNumber($e); } }
		if ($emails) { foreach ($emails as $e) { $this->addEmailAddress($e); } }
		if ($websites) { foreach ($websites as $e) { $this->addWebsite($e); } }
		if ($socialMedias) { foreach ($socialMedias as $e) { $this->addSocialMedia($e); } }
		if ($logo) { $this->setLogo($logo); }
	}

	public function setLogo(string $logo): void {
		$this->setSemanticProperty("dfc-b:logo", $logo);
	}
	

	public function getLogo(): string 
	 {
		return $this->getSemanticProperty("dfc-b:logo");
		
	}
	
	public function getLocalizations(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:hasAddress");
		
	}
	
	public function getWebsites(): Array 
	 {
		return $this->getSemanticPropertyAll("dfc-b:websitePage");
		
	}
	
	public function removeSocialMedia(ISocialMedia $socialMedia): void {
		throw new Error("Not yet implemented.");
	}
	

	public function addSocialMedia(ISocialMedia $socialMedia): void {
		$this->addSemanticPropertyReference("dfc-b:hasSocialMedia", $socialMedia);
	}
	
	public function removeWebsite(string $website): void {
		throw new Error("Not yet implemented.");
	}
	

	public function addWebsite(string $website): void {
		$this->addSemanticPropertyLiteral("dfc-b:websitePage", $website);
	}
	
	public function addEmailAddress(string $emailAddress): void {
		$this->addSemanticPropertyLiteral("dfc-b:email", $emailAddress);
	}
	

	public function removeEmailAddress(string $emailAddress): void {
		throw new Error("Not yet implemented.");
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
	
	public function removeLocalization(IAddress $localization): void {
		throw new Error("Not yet implemented.");
	}
	

	public function addLocalization(IAddress $localization): void {
		$this->addSemanticPropertyReference("dfc-b:hasAddress", $localization);
	}
	
	public function removePhoneNumber(IPhoneNumber $phoneNumber): void {
		throw new Error("Not yet implemented.");
	}
	

	public function addPhoneNumber(IPhoneNumber $phoneNumber): void {
		$this->addSemanticPropertyReference("dfc-b:hasPhoneNumber", $phoneNumber);
	}
	

}
