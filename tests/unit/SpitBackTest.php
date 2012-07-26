<?php

class OtherCodeIsHereTest extends PHPUnit_Framework_TestCase {

    public function spitBackTest() {
        $message = 'Hello';
        $returnMessage = spitBack($message);

        $this->assertEquals('Hello', $returnMessage);
    }


}












?>