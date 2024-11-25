<?php

namespace DataStructures;

class Queue {
	private $items = [];

	public function enqueue($item)
	{
		 array_push($this->items, $item);
	}

	public function dequeue()
	{
		array_shift($this->items);
	}

	public function getItems()
	{
		return $this->items;
	}
}
$instance = new Queue();

$payload = ['name' => 'Gustavo'];
$payload_two = ['name' => 'Henrique'];
$payload_three = ['name' => 'de Moraes'];

$instance->enqueue($payload);
$instance->enqueue($payload_two);
$instance->enqueue($payload_three);

echo print_r($instance->getItems());

$instance->dequeue();

echo print_r($instance->getItems());