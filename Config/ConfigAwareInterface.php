<?php

namespace Application\Config;

interface ConfigAwareInterface
{
    public function setConfig($config);

    public function getConfig();
}