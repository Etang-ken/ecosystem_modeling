<?php

abstract class Entity {
    protected $name;
    protected $type;

    public function __construct($name, $type) {
        $this->name = $name;
        $this->type = $type;
    }

    abstract public function interact();
}

