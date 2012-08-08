<?php

class TestClass {

    public $publicPass;
    public $PublicCamelFail;
    public $_publicUnderscoreFail;
    public $_PublicUnderscoreCamelFail;
	
    private $privateUnderscoreFail;
    private $PrivateUnderscoreCamelFail;
    private $_privatePass;
    private $_PrivateCamelFail;
	
    protected $protectedUnderscoreFail;
    protected $ProtectedUnderscoreCamelFail;
    protected $_protectedPass;
    protected $_ProtectedCamelFail;
	

    public function publicPass() {}
    
}