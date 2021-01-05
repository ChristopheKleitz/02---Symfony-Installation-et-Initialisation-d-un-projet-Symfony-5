<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/actors' => [[['_route' => 'actor_index', '_controller' => 'App\\Controller\\ActorController::index'], null, null, null, true, false, null]],
        '/categories' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, true, false, null]],
        '/categories/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, null, null, false, false, null]],
        '/comment' => [[['_route' => 'comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/new' => [[['_route' => 'comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/episode' => [[['_route' => 'episode_index', '_controller' => 'App\\Controller\\EpisodeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/episode/new' => [[['_route' => 'episode_new', '_controller' => 'App\\Controller\\EpisodeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/programs' => [[['_route' => 'program_index', '_controller' => 'App\\Controller\\ProgramController::index'], null, null, null, true, false, null]],
        '/programs/new' => [[['_route' => 'program_new', '_controller' => 'App\\Controller\\ProgramController::new'], null, null, null, false, false, null]],
        '/season' => [[['_route' => 'season_index', '_controller' => 'App\\Controller\\SeasonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/season/new' => [[['_route' => 'season_new', '_controller' => 'App\\Controller\\SeasonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/actors/([^/]++)(*:185)'
                .'|/c(?'
                    .'|ategories/([^/]++)(*:216)'
                    .'|omment/([^/]++)(?'
                        .'|(*:242)'
                        .'|/edit(*:255)'
                        .'|(*:263)'
                    .')'
                .')'
                .'|/episode/([^/]++)(?'
                    .'|(*:293)'
                    .'|/edit(*:306)'
                    .'|(*:314)'
                .')'
                .'|/programs/(?'
                    .'|show/([^/]++)(*:349)'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|seasons/([^/]++)(?'
                                .'|(*:391)'
                                .'|/episode/([^/]++)(*:416)'
                            .')'
                            .'|edit(*:429)'
                        .')'
                        .'|(*:438)'
                    .')'
                .')'
                .'|/season/([^/]++)(?'
                    .'|(*:467)'
                    .'|/edit(*:480)'
                    .'|(*:488)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:514)'
                    .'|/edit(*:527)'
                    .'|(*:535)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        185 => [[['_route' => 'actor_show', '_controller' => 'App\\Controller\\ActorController::show'], ['actor'], null, null, false, true, null]],
        216 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['categoryName'], null, null, false, true, null]],
        242 => [[['_route' => 'comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        255 => [[['_route' => 'comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        293 => [[['_route' => 'episode_show', '_controller' => 'App\\Controller\\EpisodeController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        306 => [[['_route' => 'episode_edit', '_controller' => 'App\\Controller\\EpisodeController::edit'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        314 => [[['_route' => 'episode_delete', '_controller' => 'App\\Controller\\EpisodeController::delete'], ['slug'], ['DELETE' => 0], null, false, true, null]],
        349 => [[['_route' => 'program_show', '_controller' => 'App\\Controller\\ProgramController::show'], ['slug'], null, null, false, true, null]],
        391 => [[['_route' => 'program_season_show', '_controller' => 'App\\Controller\\ProgramController::showSeason'], ['slug', 'season'], null, null, false, true, null]],
        416 => [[['_route' => 'program_episode_show', '_controller' => 'App\\Controller\\ProgramController::showEpisode'], ['programSlug', 'season', 'episodeSlug'], null, null, false, true, null]],
        429 => [[['_route' => 'program_edit', '_controller' => 'App\\Controller\\ProgramController::edit'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        438 => [[['_route' => 'program_delete', '_controller' => 'App\\Controller\\ProgramController::delete'], ['program'], ['DELETE' => 0], null, false, true, null]],
        467 => [[['_route' => 'season_show', '_controller' => 'App\\Controller\\SeasonController::show'], ['season'], ['GET' => 0], null, false, true, null]],
        480 => [[['_route' => 'season_edit', '_controller' => 'App\\Controller\\SeasonController::edit'], ['season'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        488 => [[['_route' => 'season_delete', '_controller' => 'App\\Controller\\SeasonController::delete'], ['season'], ['DELETE' => 0], null, false, true, null]],
        514 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['user'], ['GET' => 0], null, false, true, null]],
        527 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['user'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        535 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
