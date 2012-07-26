<?php

require_once('../../src/coding-standard-test.php');

class OtherCodeIsHereTest extends PHPUnit_Framework_TestCase {

    public function testSpitBack() {
        $message = 'Hello';
        $returnMessage = spitBack($message);

        $this->assertEquals('Hello', $returnMessage);
    }


}












?>