<?php
/**
 * Band.php
 * File for use only in Heavy Catalog
 */

class Band {
    private $_name;

    public function __construct() {
        $this->_name = $_name;
    }
    
    public function getName():string {
        return $this->_name;
    }

    public function setName($name) {
        $this->_name = $name;
    }

}