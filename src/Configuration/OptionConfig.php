<?php

namespace BinaryCabin\Options\Configuration;

class OptionConfig
{
    private $optionAppDirectory = '/Options';

    public function getOptionAppDirectory()
    {
        return $this->optionAppDirectory;
    }
}
