<?php

require_once 'Entity.php';

class Ecosystem {
    private $entities = [];

    public function addEntity(Entity $entity) {
        $this->entities[] = $entity;
    }

    public function interactWithEntities() {
        foreach ($this->entities as $entity) {
            echo $entity->interact() . PHP_EOL;
        }
    }
}

