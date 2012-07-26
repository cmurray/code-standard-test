<?php

class SomeClassTest extends PHPUnit_Framework_TestCase {

    public function testA() {

        $message = 'Hello';

        $object = new someClass();

        $returnMessage = $object->a($message);

        $this->assertEquals('Hello', $returnMessage);
    }

}



?>