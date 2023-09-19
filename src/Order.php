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

class Order extends SemanticObject implements IOrder {
	
	protected IConnector $connector;

	public function __construct(IConnector $connector, string $semanticId = null, \EasyRdf\Resource $resource = null, string $semanticType = null, Semanticable $other = null, string $number = null, string $date = null, ISaleSession $saleSession = null, IAgent $client = null, Array $lines = null, bool $doNotStore = false) {
		$type = "dfc-b:Order";
		
		if ($other) {
			parent::__construct(semantizer: $connector->getSemantizer(), semanticId: $semanticId, resource: $resource, other: $other, doNotStore: $doNotStore);
			if (!$other->isSemanticTypeOf($type))
				throw new Error("Can't create the semantic object of type " . $type . " from a copy: the copy is of type " . $other->getSemanticType() . ".");
		}
		else { parent::__construct(semantizer: $connector->getSemantizer(), semanticId: $semanticId, resource: $resource, semanticType: $type, doNotStore: $doNotStore); }
		
		$this->connector = $connector;
		
		if ($number) { $this->setNumber($number); }
		if ($date) { $this->setDate($date); }
		if ($saleSession) { $this->setSaleSession($saleSession); }
		if ($client) { $this->setClient($client); }
		if ($lines) { foreach ($lines as $e) { $this->addLine($e); } }
	}

	public function setClient(IAgent $client): void {
		$this->setSemanticProperty("dfc-b:orderedBy", $client);
	}
	

	public function getDate(): string 
	 {
		return $this->getSemanticProperty("dfc-b:date");
		
	}
	

	public function setSaleSession(ISaleSession $saleSession): void {
		$this->setSemanticProperty("dfc-b:belongsTo", $saleSession);
	}
	

	public function getLines(): Array
	 {
		return $this->getSemanticPropertyAll("dfc-b:hasPart");
		
	}
	

	public function getSaleSession(): ISaleSession
	 {
		return $this->getSemanticProperty("dfc-b:belongsTo");
		
	}
	

	public function addLine(IOrderLine $line): void {
		$this->addSemanticPropertyReference("dfc-b:hasPart", $line);
	}
	

	public function getNumber(): string 
	 {
		return $this->getSemanticProperty("dfc-b:orderNumber");
		
	}
	

	public function setDate(string $date): void {
		$this->setSemanticProperty("dfc-b:date", $date);
	}
	

	public function getClient(): IAgent
	 {
		return $this->getSemanticProperty("dfc-b:orderedBy");
		
	}
	

	public function setNumber(string $number): void {
		$this->setSemanticProperty("dfc-b:orderNumber", $number);
	}
	

}
