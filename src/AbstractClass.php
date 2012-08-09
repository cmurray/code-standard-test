<?php

abstract class AbstractClass {
    // Force Extending class to define this method
    abstract protected function _getValue();
    private function _prefixValue($prefix);
    protected function _protectedPass();

    // Common method
    public function printOut() {
        print $this->_getValue() . "\n";
    }
}
