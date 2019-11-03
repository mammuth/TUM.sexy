<?php

class MainTest extends \PHPUnit\Framework\TestCase {

    public function testRouteResolving() {
        $router = new Route();

        // Normal redirect
        $this->assertEquals('https://tum.sexy/hunger', $router->getTargetOfSub('hunger.tum.sexy'));

        // Not found redirect
        $this->assertEquals('https://tum.sexy/', $router->getTargetOfSub('kjhdsfjkdfsgkjldsfgkjl.tum.sexy'));

        // SiteType redirect to moodle
        $this->assertStringContainsString('https://www.moodle.tum.de/course/view.php?id=49592', $router->getTargetOfSub('mgbs.tum.sexy'));

        // Normal redirect still works, even if it has moodle type assigned
        $this->assertStringContainsString('https://db.in.tum.de/teaching/ws1920/grundlagen/?lang=de', $router->getTargetOfSub('db.tum.sexy'));
    }

    public function testJsonOutput() {
        $router = new Route();
        $this->assertNotEmpty($router->getResolvedArrays());
    }
}
