<?php

namespace tests;

require __DIR__ . '/bootstrap.php';

use Json2php\GeneratorYiiModel;

class GeneratorYiiModelTest extends \PHPUnit\Framework\TestCase
{
    public function testGenerator()
    {
        $namespace = 'tests\\output\\yii2';
        $output = TEST_ROOT . '/output/yii2/';
        if (!is_dir($output)) {
            mkdir($output);
        }

        $g = new GeneratorYiiModel();
        $jsonPath = TEST_ROOT . '/json/normal.json';
        $g->generator(file_get_contents($jsonPath), 'Normal', $namespace, $output);

        $jsonPath = TEST_ROOT . '/json/contain_array.json';
        $g->generator(file_get_contents($jsonPath), 'ContainArray', $namespace, $output);

        $jsonPath = TEST_ROOT . '/json/sub_object.json';
        $g->generator(file_get_contents($jsonPath), 'SubObject', $namespace, $output);

        $jsonPath = TEST_ROOT . '/json/all_type.json';
        $g->generator(file_get_contents($jsonPath), 'AllType', $namespace, $output);

        $this->assertTrue(true);
    }

}
