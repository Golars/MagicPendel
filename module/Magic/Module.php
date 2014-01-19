<?php

namespace Magic;

use Magic\View\Helper as ViewHelper;

class Module {

    public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
    }
    
    public function onBootstrap($e)
    {
        $app = $e->getApplication();
        $serviceManager = $app->getServiceManager();

        $serviceManager->get('viewhelpermanager')->setFactory('paramsView', function($sm) use ($e) {
            return new ViewHelper($e->getRouteMatch());
        });
    }
    
    public function getServiceConfig() {
        return array(
            'factories' => array(
            ),
        );
    }


}