<?php

namespace Json2php;

use Nette\PhpGenerator\PhpFile;
use Screw\Str;

class Generator
{
    private $_className;
    private $_namespace;
    private $_properties = [];
    private $_json = '';
    private $_output = '';

    public function __construct($className, $jsonPath, $namespace = null, $output = null)
    {
        if (!file_exists($jsonPath)) {
            throw new \Exception('file not exist, file path: ' . $jsonPath, 1);
        }
        if (!is_dir($output) && !is_null($output)) {
            mkdir($output);
        }
        $this->_className = $className;
        $this->_namespace = $namespace;
        $this->_json = file_get_contents($jsonPath);
        $this->_output = $output ?: './';
        $arr = json_decode($this->_json, true);
        $this->_properties = array_keys($arr);
    }

    public function genFile()
    {
        $file = new PhpFile();
        $class = $file->addNamespace($this->_namespace)
            ->addClass($this->_className);

        foreach ($this->_properties as $property) {
            $lower = Str::toLowerCamelCase($property);
            $upper = Str::toUpperCamelCase($property);
            $getter = 'get' . $upper;
            $setter = 'set' . $upper;

            $class->addProperty($lower)
                ->setVisibility('private')
                ->addComment('@var string');
            $class->addMethod($getter)
                ->addBody("return \$this->{$lower};")
                ->addComment("@return string");
            $class->addMethod($setter)
                ->setBody("\$this->{$lower} = \${$lower};")
                ->addComment("@param \${$lower} string")
                ->addParameter($lower);
        }

        return $file;
    }
}