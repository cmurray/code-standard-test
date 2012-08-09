
<?php

class Class {

    public function publicPass() {};
    public function PublicCamelFail() {};
    public function _publicUnderscoreFail() {};
    public function _PublicUnderscoreCamelFail() {};

    abstract private function privateUnderscoreFail();
    abstract private function PrivateUnderscoreCamelFail();
    abstract private function _privatePass();
    abstract private function _PrivateCamelFail();

    abstract protected function protectedUnderscoreFail();
    abstract protected function ProtectedUnderscoreCamelFail();
    abstract protected function _protectedPass();
    abstract protected function _ProtectedCamelFail();

    
}