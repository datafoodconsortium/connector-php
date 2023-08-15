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

class CatalogItem extends SemanticObject implements ICatalogItem {
	
	protected IConnector $connector;

	public function __construct(IConnector $connector, string $semanticId = null, \EasyRdf\Resource $resource = null, string $semanticType = null, Semanticable $other = null, IDefinedProduct $product = null, string $sku = null, float $stockLimitation = null, Array $offers = null, Array $catalogs = null, bool $doNotStore = false) {
		$type = "dfc:CatalogItem";
		
		if ($other) {
			parent::__construct(semantizer: $connector->getSemantizer(), semanticId: $semanticId, resource: $resource, other: $other, doNotStore: $doNotStore);
			if (!$other->isSemanticTypeOf($type))
				throw new Error("Can't create the semantic object of type " . $type . " from a copy: the copy is of type " . $other->getSemanticType() . ".");
		}
		else { parent::__construct(semantizer: $connector->getSemantizer(), semanticId: $semanticId, resource: $resource, semanticType: $type, doNotStore: $doNotStore); }
		
		$this->connector = $connector;
		
		if ($product) { $this->setOfferedProduct($product); }
		if ($sku) { $this->setSku($sku); }
		if ($stockLimitation || $stockLimitation === 0) { $this->setStockLimitation($stockLimitation); }
		if ($offers) { foreach ($offers as $e) { $this->addOffer($e); } }
		if ($catalogs) { foreach ($catalogs as $e) { $this->registerInCatalog($e); } }
	}

	public function getStockLimitation(): float 
	 {
		return $this->getSemanticProperty("dfc:stockLimitation");
		
	}
	

	public function setStockLimitation(float $stockLimitation): void {
		$this->setSemanticProperty("dfc:stockLimitation", $stockLimitation);
	}
	
	public function registerInCatalog(ICatalog $repository): void {
		$this->addSemanticPropertyReference("dfc:listedIn", $repository);
	}
	

	public function getCatalogs(): Array
	 {
		return $this->getSemanticPropertyAll("dfc:listedIn");
		
	}
	
	public function addOffer(IOffer $offer): void {
		$this->addSemanticPropertyReference("dfc:offeredThrough", $offer);
	}
	

	public function setOfferedProduct(IDefinedProduct $offeredProduct): void {
		$this->setSemanticProperty("dfc:references", $offeredProduct);
	}
	

	public function getOfferedProduct(): IDefinedProduct
	 {
		return $this->getSemanticProperty("dfc:references");
		
	}
	

	public function getOfferers(): Array
	 {
		return $this->getSemanticPropertyAll("dfc:offeredThrough");
		
	}
	
	public function getSku(): string 
	 {
		return $this->getSemanticProperty("dfc:sku");
		
	}
	

	public function setSku(string $sku): void {
		$this->setSemanticProperty("dfc:sku", $sku);
	}
	

}
