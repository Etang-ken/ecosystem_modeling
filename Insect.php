<?php

require_once 'Entity.php';

class Insect extends Entity {
    private $wingspan;

    public function __construct($name, $wingspan) {
        parent::__construct($name, 'Insect');
        $this->wingspan = $wingspan;
    }

    public function fly() {
        return "{$this->name} is flying with a wingspan of {$this->wingspan} cm.";
    }

    public function interact() {
        return $this->fly();
    }
}
