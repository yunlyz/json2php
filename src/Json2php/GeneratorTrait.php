<?php

namespace Json2php;

use Nette\PhpGenerator\ClassType;
use Screw\Str;

trait GeneratorTrait
{
    public static function formatClassName($className): string
    {
        return $className ? Str::toUpperCamelCase($className) : 'Generator' . time();
    }

    public static function createFile($fileName, $content): bool
    {
        file_put_contents($fileName, $content);
        return true;
    }

    public static function getOrSetMethod(ClassType $class, $property, $type): ClassType
    {
        $lower = Str::toLowerCamelCase($property);
        $upper = Str::toUpperCamelCase($property);
        $getter = 'get' . $upper;
        $setter = 'set' . $upper;

        $class->addProperty($lower)->setVisibility('private')->addComment("@var {$type}");
        $class->addMethod($getter)->addBody("return \$this->{$lower};")->addComment("@return {$type}");
        $class->addMethod($setter)->setBody("\$this->{$lower} = \${$lower};")
            ->addComment("@param \${$lower} {$type}")->addParameter($lower);

        return $class;
    }
}