<?php
require_once "Demo.php";
class DemoTest extends \PHPUnit\Framework\TestCase {
    public function testDemo(){

        $demo = new Demo(2,2);
        $result = $demo->add();
        $this->assertEquals(4, $result);

    }

}