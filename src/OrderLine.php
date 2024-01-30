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

class OrderLine extends SemanticObject implements IOrderLine {
	
	protected IConnector $connector;

	public function __construct(IConnector $connector, string $semanticId = null, \EasyRdf\Resource $resource = null, string $semanticType = null, Semanticable $other = null, float $quantity = null, IPrice $price = null, IOffer $offer = null, IOrder $order = null, bool $doNotStore = false) {
		$type = "dfc-b:OrderLine";
		
		if ($other) {
			parent::__construct(semantizer: $connector->getSemantizer(), semanticId: $semanticId, resource: $resource, other: $other, doNotStore: $doNotStore);
			if (!$other->isSemanticTypeOf($type))
				throw new Error("Can't create the semantic object of type " . $type . " from a copy: the copy is of type " . $other->getSemanticType() . ".");
		}
		else { parent::__construct(semantizer: $connector->getSemantizer(), semanticId: $semanticId, resource: $resource, semanticType: $type, doNotStore: $doNotStore); }
		
		$this->connector = $connector;
		
		if ($quantity || $quantity === 0) { $this->setQuantity($quantity); }
		if ($price) { $this->setPrice($price); }
		if ($offer) { $this->setOffer($offer); }
		if ($order) { $this->setOrder($order); }
	}

	public function getDescription(): string 
	 {
		return $this->getSemanticProperty("dfc-b:description");
		
	}
	

	public function setDescription(string $description): void {
		$this->setSemanticProperty("dfc-b:description", $description);
	}
	
	public function setQuantity(float $quantity): void {
		$this->setSemanticProperty("dfc-b:quantity", $quantity);
	}
	

	public function setPrice(IPrice $price): void {
		$this->setSemanticProperty("dfc-b:hasPrice", $price);
	}
	

	public function setOrder(IOrder $order): void {
		$this->setSemanticProperty("dfc-b:partOf", $order);
	}
	

	public function setOffer(IOffer $offer): void {
		$this->setSemanticProperty("dfc-b:concerns", $offer);
	}
	

	public function getPrice(): IPrice
	 {
		return $this->getSemanticProperty("dfc-b:hasPrice");
		
	}
	

	public function getOrder(): IOrder
	 {
		return $this->getSemanticProperty("dfc-b:partOf");
		
	}
	

	public function getOffer(): IOffer
	 {
		return $this->getSemanticProperty("dfc-b:concerns");
		
	}
	

	public function getQuantity(): float 
	 {
		return $this->getSemanticProperty("dfc-b:quantity");
		
	}
	

}
