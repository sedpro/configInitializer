<?php

namespace Application\Config;

trait ConfigAware
{
    protected $config = null;

    public function setConfig($config)
    {
        $this->config = $config;
    }

    public function getConfig()
    {
        return $this->config;
    }
}