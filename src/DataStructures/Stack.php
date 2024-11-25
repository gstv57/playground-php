<?php

namespace DataStructures;

class Stack {
	
	private array $items = [];

	public function push($item)
	{
		array_push($this->items, $item);
	}

	public function pop()
	{
		return array_pop($this->items);
	}

	public function getItems()
	{
		return $this->items;
	}
}

$instance = new Stack();

$payload = ['name' => 'Gustavo'];
$instance->push($payload);

$payload_two = ['name' => 'de Moraes'];
$instance->push($payload_two);

echo print_r($instance->getItems(), true);

$instance->pop();
echo print_r($instance->getItems(), true);