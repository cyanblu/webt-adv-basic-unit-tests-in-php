<?php
require_once "./demo/Demo.php";
use PHPUnit\Framework\TestCase;

class DemoTest extends TestCase {
    public function testDemo(){

        $demo = new Demo(2,2);
        $result = $demo->add();
        $this->assertEquals(4, $result);

    }

}