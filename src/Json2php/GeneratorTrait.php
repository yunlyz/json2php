<?php

namespace Json2php;

use Screw\Str;

trait GeneratorTrait
{
    public static function formatClassName($className): string
    {
        return $className ? Str::toUpperCamelCase($className) : 'Generator' . time();
    }

    public static function createFile($fileName, $content)
    {
        file_put_contents($fileName, $content);
        return true;
    }
}