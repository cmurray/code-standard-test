
<?php

class AbstractClass {

    public function publicPass() {}
    public function PublicCamelFail() {}
    public function _publicUnderscoreFail() {}
    public function _PublicUnderscoreCamelFail() {}

    private function privateUnderscoreFail() {};
    private function PrivateUnderscoreCamelFail() {};
    private function _privatePass() {};
    private function _PrivateCamelFail() {};

    abstract protected function protectedUnderscoreFail();
    abstract protected function ProtectedUnderscoreCamelFail();
    abstract protected function _protectedPass();
    abstract protected function _ProtectedCamelFail();

    
}