<?php

class MainTest extends \PHPUnit\Framework\TestCase {

    public function testRouteResolving() {
        $router = new Route();
        // Normal redirect
        $this->assertEquals('http://tum.sexy/hunger', $router->getTargetOfSub('hunger', null));
        // Subsubdomain redirect to moodle
        $this->assertContains('moodle.tum.de', $router->getTargetOfSub('anal', 'm'));
    }

    public function testJsonOutput() {
        $router = new Route();
        $this->assertNotEmpty($router->getResolvedArrays());
    }
}