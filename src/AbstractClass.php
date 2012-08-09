<?php

abstract class AbstractClass {
    // Force Extending class to define this method
    abstract protected function getValue();
    private function prefixValue($prefix) {}
    protected function protectedPass() {}

    // Common method
    public function printOut() {
        print $this->_getValue() . "\n";
    }
}
