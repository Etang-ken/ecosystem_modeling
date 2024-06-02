<?php

require_once 'Entity.php';

class Plant extends Entity {
    private $height;

    public function __construct($name, $height) {
        parent::__construct($name, 'Plant');
        $this->height = $height;
    }

    public function grow() {
        return "{$this->name} is growing to a height of {$this->height} meters.";
    }

    public function interact() {
        return $this->grow();
    }
}

