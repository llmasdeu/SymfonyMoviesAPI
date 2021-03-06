<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'list_movies' => [[], ['_controller' => 'App\\Controller\\MoviesController::listMovies'], [], [['text', '/list_movies']], [], []],
    'add_movie' => [[], ['_controller' => 'App\\Controller\\MoviesController::addMovie'], [], [['text', '/add_movie']], [], []],
    'app_api_movies_get' => [[], ['_controller' => 'App\\Controller\\Api\\MoviesController::getAction'], [], [['text', '/api/list_movies']], [], []],
    'app_api_movies_post' => [[], ['_controller' => 'App\\Controller\\Api\\MoviesController::postAction'], [], [['text', '/api/movies']], [], []],
];
