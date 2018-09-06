<?php

namespace tests;

use Json2php\GeneratorPhpFile;

require __DIR__ . '/bootstrap.php';

class GeneratorPhpFileTest extends \PHPUnit\Framework\TestCase
{
    public function testGenByJsonStr()
    {
        $namespace = 'tests\\output\\general';
        $output = TEST_ROOT . '/output/general/';
        if (!is_dir($output)) {
            mkdir($output);
        }

        $g = new GeneratorPhpFile();
        $jsonPath = TEST_ROOT . '/json/normal.json';
        $g->genByJsonStr(file_get_contents($jsonPath), 'Normal', $namespace, $output);

        $jsonPath = TEST_ROOT . '/json/contain_array.json';
        $g->genByJsonStr(file_get_contents($jsonPath), 'ContainArray', $namespace, $output);

        $jsonPath = TEST_ROOT . '/json/sub_object.json';
        $g->genByJsonStr(file_get_contents($jsonPath), 'SubObject', $namespace, $output);

        $jsonPath = TEST_ROOT . '/json/all_type.json';
        $g->genByJsonStr(file_get_contents($jsonPath), 'AllType', $namespace, $output);

        $this->assertTrue(true);
    }
}
