<?php

require_once 'Animal.php';
require_once 'Plant.php';
require_once 'Insect.php';
require_once 'Ecosystem.php';

// Creating entities
$dog = new Animal('Dog', 'bark');
$tree = new Plant('Oak Tree', 15);
$bee = new Insect('Bee', 5);

// Creating the ecosystem and adding entities to it
$ecosystem = new Ecosystem();
$ecosystem->addEntity($dog);
$ecosystem->addEntity($tree);
$ecosystem->addEntity($bee);

// Interacting with entities in the ecosystem
$ecosystem->interactWithEntities();

