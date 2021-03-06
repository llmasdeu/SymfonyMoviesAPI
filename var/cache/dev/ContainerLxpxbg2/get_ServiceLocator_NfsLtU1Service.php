<?php

namespace ContainerLxpxbg2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NfsLtU1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NfsLtU1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NfsLtU1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Api\\MoviesController::getAction' => ['privates', '.service_locator.i_4ZzWf', 'get_ServiceLocator_I4ZzWfService', true],
            'App\\Controller\\Api\\MoviesController::postAction' => ['privates', '.service_locator.Om4dtJv', 'get_ServiceLocator_Om4dtJvService', true],
            'App\\Controller\\Api\\MoviesController::setViewHandler' => ['privates', '.service_locator.srPvxhL', 'get_ServiceLocator_SrPvxhLService', true],
            'App\\Controller\\MoviesController::addMovie' => ['privates', '.service_locator.Om4dtJv', 'get_ServiceLocator_Om4dtJvService', true],
            'App\\Controller\\MoviesController::getMovie' => ['privates', '.service_locator.i_4ZzWf', 'get_ServiceLocator_I4ZzWfService', true],
            'App\\Controller\\MoviesController::listMovies' => ['privates', '.service_locator.i_4ZzWf', 'get_ServiceLocator_I4ZzWfService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\Api\\MoviesController:getAction' => ['privates', '.service_locator.i_4ZzWf', 'get_ServiceLocator_I4ZzWfService', true],
            'App\\Controller\\Api\\MoviesController:postAction' => ['privates', '.service_locator.Om4dtJv', 'get_ServiceLocator_Om4dtJvService', true],
            'App\\Controller\\Api\\MoviesController:setViewHandler' => ['privates', '.service_locator.srPvxhL', 'get_ServiceLocator_SrPvxhLService', true],
            'App\\Controller\\MoviesController:addMovie' => ['privates', '.service_locator.Om4dtJv', 'get_ServiceLocator_Om4dtJvService', true],
            'App\\Controller\\MoviesController:getMovie' => ['privates', '.service_locator.i_4ZzWf', 'get_ServiceLocator_I4ZzWfService', true],
            'App\\Controller\\MoviesController:listMovies' => ['privates', '.service_locator.i_4ZzWf', 'get_ServiceLocator_I4ZzWfService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\Api\\MoviesController::getAction' => '?',
            'App\\Controller\\Api\\MoviesController::postAction' => '?',
            'App\\Controller\\Api\\MoviesController::setViewHandler' => '?',
            'App\\Controller\\MoviesController::addMovie' => '?',
            'App\\Controller\\MoviesController::getMovie' => '?',
            'App\\Controller\\MoviesController::listMovies' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Api\\MoviesController:getAction' => '?',
            'App\\Controller\\Api\\MoviesController:postAction' => '?',
            'App\\Controller\\Api\\MoviesController:setViewHandler' => '?',
            'App\\Controller\\MoviesController:addMovie' => '?',
            'App\\Controller\\MoviesController:getMovie' => '?',
            'App\\Controller\\MoviesController:listMovies' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
