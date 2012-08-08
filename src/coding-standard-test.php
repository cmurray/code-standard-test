<?php

class TestClass {

    public function publicPass() {}    
    private function privateUnderscoreFail() {}
    protected function protectedUnderscoreFail() {}

    public function PublicCamelFail() {}    
/*    private function PrivateUnderscoreFail() {}
    protected function ProtectedUnderscoreFail() {}


    public function _publicUnderscoreFail() {}    
    private function _privatePass() {}
    protected function _protectedPass() {}
    
    private function _PrivateCamelFail() {}
    protected function _ProtectedCamelFail() {}

*/    
}