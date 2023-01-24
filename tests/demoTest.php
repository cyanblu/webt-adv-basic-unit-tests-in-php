<?php

class demoTest extends \PHPUnit\Framework\TestCase {
    public function testDemo(){

        $demo = new demo();
        $result = $demo->add(2, 2);
        $this->assertEquals(4, $result);

    }

}