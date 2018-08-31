<?php

namespace tests;

require './bootstrap.php';

use Json2php\Generator;

class GeneratorTest extends \PHPUnit\Framework\TestCase
{
    public function testGen()
    {
        $g = new Generator('Demo', __DIR__ . '/json/example_1.json', "jay");
        $result = $g->genFile();
        $output = __DIR__ . '/json/result/Demo.php';
        file_put_contents($output, $result);
    }
}
