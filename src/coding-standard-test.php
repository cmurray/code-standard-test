<?php

class TestClass {

    public function publicPass() {}    
    private function privateUnderscoreFail() {}
    protected function protectedUnderscoreFail() {}

    public function PublicCamelFail() {}    
    private function PrivateUnderscoreCamelFail() {}
    protected function ProtectedUnderscoreCamelFail() {}


    public function _publicUnderscoreFail() {}    
    private function _privatePass() {}
    protected function _protectedPass() {}
    
    public function _PublicUnderscoreCamelFail() {}
    private function _PrivateCamelFail() {}
    protected function _ProtectedCamelFail() {}

    
}