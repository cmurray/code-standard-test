  r
<?phpr
#Hur be a commentr
//Another commentr
//A normal commentr
//A normal commentr
//A normal commentr
r
/**r
 * Short descr
 *r
 * Long description first sentence starts herer
 * and continues on this line for a whiler
 * finally concluding here at the end ofr
 * this paragraphr
 *r
 * The blank line above denotes a paragraph breakr
 */r
class someClass {r
r
r
    /**r
     * This is a really long variable namer
     *r
     * This variable was given an extremely longr
     * name in order to test phpmd's functionalityr
     *r
     * @access protectedr
     * @var intr
     */r
    protected $thisIsAReallyLongNameForAProtectedVariable = 5;r
    private $thisIsAReallyLongNameForAPrivateVariable = 5;r
    public $thisIsAReallyLongNameForAPublicVariable = 5;r
    r
    r
    protected $thisIsAReallyReallyReallyReallyReallyReallyReallyReallyReallyReallyReallyReallyReallyReallyLongNameForAProtectedVariable = 5;r
    r
    /**r
     * @access publicr
     */r
    public function a($index) {r
    	return $index;r
    }r
}r
r
?>r
