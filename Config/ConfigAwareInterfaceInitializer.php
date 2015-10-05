<?php

namespace Application\Config;

use Zend\ServiceManager\InitializerInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ConfigAwareInterfaceInitializer implements InitializerInterface
{
    /**
     * Initialize
     *
     * @param $instance
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function initialize($instance, ServiceLocatorInterface $serviceLocator)
    {

        if (get_class($serviceLocator) === 'Zend\Mvc\Controller\ControllerManager') {
            $serviceLocator = $serviceLocator->getServiceLocator();
        }

        if ($instance instanceof ConfigAwareInterface) {
            $instance->setConfig($serviceLocator->get('Config'));
        }
    }
}