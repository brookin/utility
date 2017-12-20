<?php

namespace Brookin\UtilityTest;

use Brookin\Utility\First;

class FirstTest extends \PHPUnit_Framework_TestCase {
    public function testSay() {
        $o = new First();
        $o->say();
    }
}
