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
                .'|/(fr|en)(?'
                    .'|/(?'
                        .'|actors(?'
                            .'|(*:193)'
                            .'|/([^/]++)(*:210)'
                        .')'
                        .'|c(?'
                            .'|ategories(?'
                                .'|(*:235)'
                                .'|/(?'
                                    .'|new(*:250)'
                                    .'|([^/]++)(*:266)'
                                .')'
                            .')'
                            .'|omment(?'
                                .'|(*:285)'
                                .'|/(?'
                                    .'|new(*:300)'
                                    .'|([^/]++)(?'
                                        .'|(*:319)'
                                        .'|/edit(*:332)'
                                        .'|(*:340)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|episode(?'
                            .'|(*:362)'
                            .'|/(?'
                                .'|new(*:377)'
                                .'|([^/]++)(?'
                                    .'|(*:396)'
                                    .'|/edit(*:409)'
                                    .'|(*:417)'
                                .')'
                            .')'
                        .')'
                        .'|programs(?'
                            .'|/(?'
                                .'|index(*:448)'
                                .'|new(*:459)'
                                .'|show/([^/]++)(*:480)'
                                .'|([^/]++)(?'
                                    .'|/(?'
                                        .'|seasons/([^/]++)(?'
                                            .'|(*:522)'
                                            .'|/episode/([^/]++)(*:547)'
                                        .')'
                                        .'|edit(*:560)'
                                        .'|watchlist(*:577)'
                                    .')'
                                    .'|(*:586)'
                                .')'
                            .')'
                            .'|(*:596)'
                        .')'
                        .'|season(?'
                            .'|(*:614)'
                            .'|/(?'
                                .'|new(*:629)'
                                .'|([^/]++)(?'
                                    .'|(*:648)'
                                    .'|/edit(*:661)'
                                    .'|(*:669)'
                                .')'
                            .')'
                        .')'
                        .'|login(*:685)'
                        .'|register(*:701)'
                        .'|user(?'
                            .'|(*:716)'
                            .'|/(?'
                                .'|new(*:731)'
                                .'|([^/]++)(?'
                                    .'|(*:750)'
                                    .'|/edit(*:763)'
                                    .'|(*:771)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|(*:783)'
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
        193 => [[['_route' => 'actor_index', '_controller' => 'App\\Controller\\ActorController::index'], ['_locale'], null, null, true, false, null]],
        210 => [[['_route' => 'actor_show', '_controller' => 'App\\Controller\\ActorController::show'], ['_locale', 'actor'], null, null, false, true, null]],
        235 => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], ['_locale'], null, null, true, false, null]],
        250 => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], ['_locale'], null, null, false, false, null]],
        266 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['_locale', 'categoryName'], null, null, false, true, null]],
        285 => [[['_route' => 'comment_index', '_controller' => 'App\\Controller\\CommentController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        300 => [[['_route' => 'comment_new', '_controller' => 'App\\Controller\\CommentController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        319 => [[['_route' => 'comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        332 => [[['_route' => 'comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        340 => [[['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['_locale', 'id'], ['DELETE' => 0], null, false, true, null]],
        362 => [[['_route' => 'episode_index', '_controller' => 'App\\Controller\\EpisodeController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        377 => [[['_route' => 'episode_new', '_controller' => 'App\\Controller\\EpisodeController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        396 => [[['_route' => 'episode_show', '_controller' => 'App\\Controller\\EpisodeController::show'], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        409 => [[['_route' => 'episode_edit', '_controller' => 'App\\Controller\\EpisodeController::edit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        417 => [[['_route' => 'episode_delete', '_controller' => 'App\\Controller\\EpisodeController::delete'], ['_locale', 'slug'], ['DELETE' => 0], null, false, true, null]],
        448 => [[['_route' => 'program_indexAdmin', '_controller' => 'App\\Controller\\ProgramController::indexAdmin'], ['_locale'], null, null, false, false, null]],
        459 => [[['_route' => 'program_new', '_controller' => 'App\\Controller\\ProgramController::new'], ['_locale'], null, null, false, false, null]],
        480 => [[['_route' => 'program_show', '_controller' => 'App\\Controller\\ProgramController::show'], ['_locale', 'slug'], null, null, false, true, null]],
        522 => [[['_route' => 'program_season_show', '_controller' => 'App\\Controller\\ProgramController::showSeason'], ['_locale', 'slug', 'season'], null, null, false, true, null]],
        547 => [[['_route' => 'program_episode_show', '_controller' => 'App\\Controller\\ProgramController::showEpisode'], ['_locale', 'programSlug', 'season', 'episodeSlug'], null, null, false, true, null]],
        560 => [[['_route' => 'program_edit', '_controller' => 'App\\Controller\\ProgramController::edit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        577 => [[['_route' => 'program_watchlist', '_controller' => 'App\\Controller\\ProgramController::addToWatchlist'], ['_locale', 'id'], null, null, false, false, null]],
        586 => [[['_route' => 'program_delete', '_controller' => 'App\\Controller\\ProgramController::delete'], ['_locale', 'program'], ['DELETE' => 0], null, false, true, null]],
        596 => [[['_route' => 'program_index', '_controller' => 'App\\Controller\\ProgramController::index'], ['_locale'], null, null, true, false, null]],
        614 => [[['_route' => 'season_index', '_controller' => 'App\\Controller\\SeasonController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        629 => [[['_route' => 'season_new', '_controller' => 'App\\Controller\\SeasonController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        648 => [[['_route' => 'season_show', '_controller' => 'App\\Controller\\SeasonController::show'], ['_locale', 'season'], ['GET' => 0], null, false, true, null]],
        661 => [[['_route' => 'season_edit', '_controller' => 'App\\Controller\\SeasonController::edit'], ['_locale', 'season'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        669 => [[['_route' => 'season_delete', '_controller' => 'App\\Controller\\SeasonController::delete'], ['_locale', 'season'], ['DELETE' => 0], null, false, true, null]],
        685 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], ['_locale'], null, null, false, false, null]],
        701 => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], ['_locale'], null, null, false, false, null]],
        716 => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        731 => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        750 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['_locale', 'user'], ['GET' => 0], null, false, true, null]],
        763 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['_locale', 'user'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        771 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['_locale', 'id'], ['DELETE' => 0], null, false, true, null]],
        783 => [
            [['_route' => 'app_index', '_controller' => 'App\\Controller\\DefaultController::index'], ['_locale'], null, null, true, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
