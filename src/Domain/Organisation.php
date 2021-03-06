<?php

namespace Projet_LO07\Domain;

class Organisation {
    
    /**
    * Organisation id
    *
    * @var integer
    */
    private $id;
    
    /**
    * Organisation nom
    * 
    * @var string
    */
    private $nom;
    
    /**
    * Organisation label
    *
    * @var string
    */
    private $label;
    
    
    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id = $id;
    }
    
    public function getName() {
        return $this->nom;
    }
    
    public function setName($name) {
        $this->nom = $name;
    }
    
    public function getLabel() {
        return $this->label;
    }
    
    public function setLabel($label) {
        $this->label = $label;
    }
}