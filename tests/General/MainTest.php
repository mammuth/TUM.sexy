<?php

class MainTest extends \PHPUnit\Framework\TestCase {

    public function testRouteResolving() {
        $router = new Route();

        // Normal redirect
        $this->assertEquals('https://tum.sexy/hunger', $router->getTargetOfSub('hunger.tum.sexy'));

        // Not found redirect
        $this->assertEquals('https://tum.sexy/', $router->getTargetOfSub('kjhdsfjkdfsgkjldsfgkjl.tum.sexy'));

        // SiteType redirect to moodle
        $this->assertContains('https://www.moodle.tum.de/course/view.php?id=43628', $router->getTargetOfSub('m.anal.tum.sexy'));

        // Normal redirect still works, even if it has moodle type assigned
        $this->assertContains('https://www-m5.ma.tum.de/Allgemeines/MA0902_2017W', $router->getTargetOfSub('anal.tum.sexy'));
    }

    public function testJsonOutput() {
        $router = new Route();
        $this->assertNotEmpty($router->getResolvedArrays());
    }
}