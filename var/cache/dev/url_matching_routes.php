<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/list_movies' => [[['_route' => 'list_movies', '_controller' => 'App\\Controller\\MoviesController::listMovies'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/get_movie' => [[['_route' => 'get_movie', '_controller' => 'App\\Controller\\MoviesController::getMovie'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/add_movie' => [[['_route' => 'add_movie', '_controller' => 'App\\Controller\\MoviesController::addMovie'], null, ['POST' => 0], null, false, false, null]],
        '/api/list_movies' => [[['_route' => 'app_api_movies_get', '_controller' => 'App\\Controller\\Api\\MoviesController::getAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/movies' => [[['_route' => 'app_api_movies_post', '_controller' => 'App\\Controller\\Api\\MoviesController::postAction'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
