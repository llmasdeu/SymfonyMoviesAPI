<?php

namespace ContainerLxpxbg2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I4ZzWfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.i_4ZzWf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.i_4ZzWf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repository' => ['privates', 'App\\Repository\\MovieRepository', 'getMovieRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\MovieRepository',
        ]);
    }
}
