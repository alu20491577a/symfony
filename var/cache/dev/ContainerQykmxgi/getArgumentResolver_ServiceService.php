<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->services['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\sesionController:login' => function () {
    return ${($_ = isset($this->services['service_locator.7ajeadl']) ? $this->services['service_locator.7ajeadl'] : $this->load(__DIR__.'/getServiceLocator_7ajeadlService.php')) && false ?: '_'};
}, 'App\\Controller\\sesionController:login_usu' => function () {
    return ${($_ = isset($this->services['service_locator.7ajeadl']) ? $this->services['service_locator.7ajeadl'] : $this->load(__DIR__.'/getServiceLocator_7ajeadlService.php')) && false ?: '_'};
}, 'App\\Controller\\sesionController:register' => function () {
    return ${($_ = isset($this->services['service_locator.7ajeadl']) ? $this->services['service_locator.7ajeadl'] : $this->load(__DIR__.'/getServiceLocator_7ajeadlService.php')) && false ?: '_'};
}, 'App\\Controller\\sesionController::login' => function () {
    return ${($_ = isset($this->services['service_locator.7ajeadl']) ? $this->services['service_locator.7ajeadl'] : $this->load(__DIR__.'/getServiceLocator_7ajeadlService.php')) && false ?: '_'};
}, 'App\\Controller\\sesionController::login_usu' => function () {
    return ${($_ = isset($this->services['service_locator.7ajeadl']) ? $this->services['service_locator.7ajeadl'] : $this->load(__DIR__.'/getServiceLocator_7ajeadlService.php')) && false ?: '_'};
}, 'App\\Controller\\sesionController::register' => function () {
    return ${($_ = isset($this->services['service_locator.7ajeadl']) ? $this->services['service_locator.7ajeadl'] : $this->load(__DIR__.'/getServiceLocator_7ajeadlService.php')) && false ?: '_'};
})));