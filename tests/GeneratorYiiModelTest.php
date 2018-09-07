<?php

namespace tests;

require __DIR__ . '/bootstrap.php';

use Json2php\GeneratorYiiModel;

class GeneratorYiiModelTest extends \PHPUnit\Framework\TestCase
{
    public function testGenerator()
    {
        $namespace = 'tests\\output\\yii2';
        $output = __DIR__ . '/output/yii2/';
        if (!is_dir($output)) {
            if (!is_dir(dirname($output))) {
                mkdir(dirname($output));
            }
            mkdir($output);
        }
        $g = new GeneratorYiiModel();
        $jsonPath = __DIR__ . '/json/normal.json';
        $g::generator(file_get_contents($jsonPath), 'Normal', $namespace, $output);

        $jsonPath = __DIR__ . '/json/contain_array.json';
        $g::generator(file_get_contents($jsonPath), 'ContainArray', $namespace, $output);

        $jsonPath = __DIR__ . '/json/sub_object.json';
        $g::generator(file_get_contents($jsonPath), 'SubObject', $namespace, $output);

        $jsonPath = __DIR__ . '/json/all_type.json';
        $g::generator(file_get_contents($jsonPath), 'AllType', $namespace, $output);

        $jsonPath = __DIR__ . '/json/yii2_model.json';
        $g::generator(file_get_contents($jsonPath), 'OrderQueryModel', $namespace, $output);

        static::assertTrue(true);
    }

}
