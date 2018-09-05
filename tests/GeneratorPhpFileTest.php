<?php

namespace tests;

use Json2php\GeneratorPhpFile;

require './bootstrap.php';

class GeneratorPhpFileTest extends \PHPUnit\Framework\TestCase
{
    public function testGenByJsonStr()
    {
        $className = 'Demo1';
        $jsonPath = TEST_ROOT . '/json/normal.json';
        $namespace = 'jay';
        $output = TEST_ROOT . '/output/';

        $g = new GeneratorPhpFile();
        $g->genByJsonStr(file_get_contents($jsonPath), $className, $namespace, $output);

        $jsonPath = TEST_ROOT . '/json/contain_array.json';
        $g->genByJsonStr(file_get_contents($jsonPath), 'ContainArray', $namespace, $output);

        $jsonPath = TEST_ROOT . '/json/sub_object.json';
        $g->genByJsonStr(file_get_contents($jsonPath), 'SubObject', $namespace, $output);

        $jsonPath = TEST_ROOT . '/json/all_type.json';
        $g->genByJsonStr(file_get_contents($jsonPath), 'AllType', $namespace, $output);

        $this->assertTrue(true);
    }
}
