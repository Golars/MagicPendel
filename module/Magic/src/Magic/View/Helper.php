<?php

namespace Magic\View;

use Zend\View\Helper\AbstractHelper;

class Helper extends AbstractHelper {

    protected $route;

    public function __construct($route)
    {
        $this->route = $route;
    }

    public function getAction()
    {
        $action = $this->route->getParam('action', 'index');
        return $action;
    }
    
}
