<?php

namespace ContainerEYOm4x2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMoviesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Api\MoviesController' shared autowired service.
     *
     * @return \App\Controller\Api\MoviesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Controller/AbstractFOSRestController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Api/MoviesController.php';

        $container->services['App\\Controller\\Api\\MoviesController'] = $instance = new \App\Controller\Api\MoviesController();

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'form.factory' => ['services', 'form.factory', 'getForm_FactoryService', true],
            'fos_rest.view_handler' => ['services', 'fos_rest.view_handler', 'getFosRest_ViewHandlerService', true],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', true],
            'session' => ['services', 'session', 'getSessionService', true],
            'twig' => ['services', 'twig', 'getTwigService', true],
        ], [
            'doctrine' => '?',
            'form.factory' => '?',
            'fos_rest.view_handler' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'serializer' => '?',
            'session' => '?',
            'twig' => '?',
        ]))->withContext('App\\Controller\\Api\\MoviesController', $container));

        return $instance;
    }
}
