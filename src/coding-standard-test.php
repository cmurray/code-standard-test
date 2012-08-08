  
<?php
#Hur be a comment
//Another comment
//A normal comment
//A normal comment
//A normal comment

/**
 * Short desc
 *
 * Long description first sentence starts here
 * and continues on this line for a while
 * finally concluding here at the end of
 * this paragraph
 *
 * The blank line above denotes a paragraph break
 */
class someClass {

    public function publicPass() {}    
    private function privateUnderscoreFail() {}
    protected function protectedUnderscoreFail() {}

    public function PublicCamelFail() {}    
    private function PrivateUnderscoreFail() {}
    protected function ProtectedUnderscoreFail() {}


    public function _publicUnderscoreFail() {}    
    private function _privatePass() {}
    protected function _protectedPass() {}
    
    private function _PrivateCamelFail() {}
    protected function _ProtectedCamelFail() {}

    
}

?>
