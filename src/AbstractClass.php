<?php

abstract class AbstractClass {
    // Force Extending class to define this method
    abstract protected function _getValue();
    abstract protected function _prefixValue($prefix);

    // Common method
    public function printOut() {
        print $this->_getValue() . "\n";
    }
}
