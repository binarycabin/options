<?php

namespace BinaryCabin\Options\Creator;

class OptionCreator
{
    protected $interface;
    protected $className;
    protected $config;

    public function __construct()
    {
        $this->config = new \BinaryCabin\Options\Configuration\OptionConfig();
    }

    public function setInterface($interface)
    {
        $this->interface = $interface;
    }

    public function setClassName($className)
    {
        $this->className = $className;
    }

    public function createOptionsFile()
    {
        $this->interface->info('Creating Options File');
        $putFilePath = app_path().$this->config->getOptionAppDirectory().'/'.$this->className.'.php';
        if (file_exists($putFilePath)) {
            $this->interface->error('File Already Exists: '.$putFilePath);
        } else {
            $templateFilePath = __DIR__.'/Templates/OptionClass.php.txt';
            $templateFile = file_get_contents($templateFilePath);
            $fileContents = str_replace('[CLASSNAME]', $this->className, $templateFile);
            $this->prepareOptionDirectory();
            \File::put($putFilePath, $fileContents);
        }
    }

    public function prepareOptionDirectory()
    {
        $directory = $this->config->getOptionAppDirectory();
        if (! is_dir(app_path().$directory)) {
            mkdir(app_path().$directory, 0777, true);
        }
    }

    public function create()
    {
        $this->createOptionsFile();
        $this->interface->info('Done!');
    }
}
