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

use \VirtualAssembly\Semantizer\Semanticable;

interface Manufacturable {

	public function getAlcoholPercentage(): float 
	;
	public function getLifetime(): string 
	;
	public function getUsageOrStorageConditions(): string 
	;
	public function getAllergenCharacteristics(): Array
	;
	public function getNutrientCharacteristics(): Array
	;
	public function getPhysicalCharacteristics(): Array
	;
	public function getGeographicalOrigin(): ISKOSConcept
	;
	public function getNatureOrigin(): Array
	;
	public function getPartOrigin(): Array
	;
	public function setGeographicalOrigin(ISKOSConcept $geographicalOrigin): void;
	public function setAlcoholPercentage(float $alcoholPercentage): void;
	public function setLifetime(string $lifetime): void;
	public function setUsageOrStorageConditions(string $usageOrStorageConditions): void;
	public function addAllergenCharacteristic(IAllergenCharacteristic $allergenCharacteristic): void;
	public function addNutrientCharacteristic(INutrientCharacteristic $nutrientCharacteristic): void;
	public function addPhysicalCharacteristic(IPhysicalCharacteristic $physicalCharacteristic): void;
	public function addNatureOrigin(ISKOSConcept $natureOrigin): void;
	public function addPartOrigin(ISKOSConcept $partOrigin): void;
	public function removeAllergenCharacteristic(IAllergenCharacteristic $allergenCharacteristic): void;
	public function removeNutrientCharacteristic(INutrientCharacteristic $nutrientCharacteristic): void;
	public function removePhysicalCharacteristic(IPhysicalCharacteristic $physicalCharacteristic): void;
	public function removeNatureOrigin(ISKOSConcept $natureOrigin): void;
	public function removePartOrigin(ISKOSConcept $partOrigin): void;

}
