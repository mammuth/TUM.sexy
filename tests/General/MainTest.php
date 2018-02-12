<?php

class MainTest extends \PHPUnit\Framework\TestCase {

    public function testRouteResolving() {
        $router = new Route();
        // Normal redirect
        $this->assertEquals('http://tum.sexy/hunger', $router->getTargetOfSub('hunger'));
        // Subsubdomain redirect to moodle
        $this->assertContains('https://www.moodle.tum.de/course/view.php?id=36704', $router->getTargetOfSub('anal', 'm'));
    }

    public function testJsonOutput() {
        $router = new Route();
        $this->assertNotEmpty($router->getResolvedArrays());
    }
}