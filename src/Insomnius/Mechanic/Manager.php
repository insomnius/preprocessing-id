<?php

namespace Insomnius\Mechanic;

use ReflectionClass;
use Insomnius\Cleaning\CleaningCasefolding;

Class Manager
{
    protected $dir;

    public function __construct()
    {
        $this->dir  = dirname(__DIR__);
    }

    protected function listCleaning()
    {
        $path = $this->dir . "\Cleaning";
        
        $clasess    = $this->scandir($path, '\Insomnius\Cleaning\\');
        return $clasess;
    }

    protected function listRegex()
    {
        $path = $this->dir . "\Regex";
        
        $clasess    = $this->scandir($path, '\Insomnius\Regex\\');
        return $clasess;
    }

    public function list($case)
    {
        switch ($case)
        {
            case 'cleaning':
                return $this->listCleaning();
            case 'regex':
                return $this->listRegex();
            default:
                throw new Exception("Process cannot be found.");
        }
    }

    protected function scandir($path, $namespace = "")
    {
        $files  = array_values(array_diff(scandir($path), ['.', '..']));
        
        foreach($files as $key => $value)
        {
            $files[$key]    = $namespace . preg_replace('/.php$/', '', $value);

            $reflector  = new ReflectionClass($files[$key]);
            if($reflector->isInterface())
            {
                unset($files[$key]);    
            }
        }

        return array_values($files);
    }

}