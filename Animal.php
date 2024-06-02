<?php

require_once 'Entity.php';

class Animal extends Entity {
    private $sound;

    public function __construct($name, $sound) {
        parent::__construct($name, 'Animal');
        $this->sound = $sound;
    }

    public function makeSound() {
        return "{$this->name} makes a {$this->sound} sound.";
    }

    public function interact() {
        return $this->makeSound();
    }
}

