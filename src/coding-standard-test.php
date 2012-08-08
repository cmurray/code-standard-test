  
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


    /**
     * This is a really long variable name
     *
     * This variable was given an extremely long
     * name in order to test phpmd's functionality
     *
     * @access protected
     * @var int
     */
    protected $ThisISAReallyLongNameForAProtectedVariable = 5;
    private $thisIsAReallyLongNameForAPrivateVariable = 5;
    public $thisIsAReallyLongNameForAPublicVariable = 5;
    
    
    protected $thisIsAReallyReallyReallyReallyReallyReallyReallyReallyReallyReallyReallyReallyReallyReallyLongNameForAProtectedVariable = 5;
    
    /**
     * @access public
     */
    public function rawrRawrRawr($index) {
    	return $index;
    }
    
    private function _rawrRawr() {}
    protected function _rawrRawrRawr() {}
    
}

?>
