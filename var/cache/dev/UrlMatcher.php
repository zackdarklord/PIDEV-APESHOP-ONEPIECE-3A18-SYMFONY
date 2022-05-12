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
        '/commandes' => [[['_route' => 'app_commandes_index', '_controller' => 'App\\Controller\\CommandesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commandes/front' => [[['_route' => 'front', '_controller' => 'App\\Controller\\CommandesController::frontend'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dislike' => [[['_route' => 'app_dislike', '_controller' => 'App\\Controller\\DislikeController::index'], null, null, null, false, false, null]],
        '/likes' => [[['_route' => 'app_likes_index', '_controller' => 'App\\Controller\\LikesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/likes/aa' => [[['_route' => 'app_likes_index2', '_controller' => 'App\\Controller\\LikesController::index2'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/likes/dislike' => [[['_route' => 'app_likes_index3', '_controller' => 'App\\Controller\\LikesController::index3'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/likes/new' => [[['_route' => 'app_likes_new', '_controller' => 'App\\Controller\\LikesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produits' => [[['_route' => 'app_produits_index', '_controller' => 'App\\Controller\\ProduitsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produits/front' => [[['_route' => 'app_produits_front', '_controller' => 'App\\Controller\\ProduitsController::indexfront'], null, ['GET' => 0], null, false, false, null]],
        '/produits/new' => [[['_route' => 'app_produits_new', '_controller' => 'App\\Controller\\ProduitsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateurs' => [[['_route' => 'app_utilisateurs_index', '_controller' => 'App\\Controller\\UtilisateursController::index'], null, ['GET' => 0], null, true, false, null]],
        '/utilisateurs/new' => [[['_route' => 'app_utilisateurs_new', '_controller' => 'App\\Controller\\UtilisateursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/commandes(?'
                    .'|/(?'
                        .'|([^/]++)(*:194)'
                        .'|front/([^/]++)(*:216)'
                        .'|([^/]++)(?'
                            .'|/edit(*:240)'
                            .'|(*:248)'
                        .')'
                    .')'
                    .'|front/([^/]++)(*:272)'
                .')'
                .'|/likes/([^/]++)(?'
                    .'|(*:299)'
                    .'|/edit(*:312)'
                    .'|(*:320)'
                .')'
                .'|/produits/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|mail(*:361)'
                            .'|edit(*:373)'
                        .')'
                        .'|(*:382)'
                    .')'
                    .'|front/([^/]++)(*:405)'
                .')'
                .'|/utilisateurs/([^/]++)(?'
                    .'|(*:439)'
                    .'|/edit(*:452)'
                    .'|(*:460)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'app_commandes_show', '_controller' => 'App\\Controller\\CommandesController::show'], ['numerocommande'], ['GET' => 0], null, false, true, null]],
        216 => [[['_route' => 'app_commandes_show_front', '_controller' => 'App\\Controller\\CommandesController::showfront'], ['numerocommande'], ['GET' => 0], null, false, true, null]],
        240 => [[['_route' => 'app_commandes_edit', '_controller' => 'App\\Controller\\CommandesController::edit'], ['numerocommande'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        248 => [[['_route' => 'app_commandes_delete', '_controller' => 'App\\Controller\\CommandesController::delete'], ['numerocommande'], ['POST' => 0], null, false, true, null]],
        272 => [[['_route' => 'app_commandes_delete_front', '_controller' => 'App\\Controller\\CommandesController::deletefront'], ['numerocommande'], ['POST' => 0], null, false, true, null]],
        299 => [[['_route' => 'app_likes_show', '_controller' => 'App\\Controller\\LikesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        312 => [[['_route' => 'app_likes_edit', '_controller' => 'App\\Controller\\LikesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        320 => [[['_route' => 'app_likes_delete', '_controller' => 'App\\Controller\\LikesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        361 => [[['_route' => 'app_produits_sendEmail', '_controller' => 'App\\Controller\\ProduitsController::sendEmail'], ['numeroproduit'], ['GET' => 0], null, false, false, null]],
        373 => [[['_route' => 'app_produits_edit', '_controller' => 'App\\Controller\\ProduitsController::edit'], ['numeroproduit'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        382 => [
            [['_route' => 'app_produits_show', '_controller' => 'App\\Controller\\ProduitsController::show'], ['numeroproduit'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_produits_delete', '_controller' => 'App\\Controller\\ProduitsController::delete'], ['numeroproduit'], ['POST' => 0], null, false, true, null],
        ],
        405 => [[['_route' => 'app_commandes_new', '_controller' => 'App\\Controller\\ProduitsController::newCommande'], ['numeroproduit'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        439 => [[['_route' => 'app_utilisateurs_show', '_controller' => 'App\\Controller\\UtilisateursController::show'], ['numeroutilisateurs'], ['GET' => 0], null, false, true, null]],
        452 => [[['_route' => 'app_utilisateurs_edit', '_controller' => 'App\\Controller\\UtilisateursController::edit'], ['numeroutilisateurs'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        460 => [
            [['_route' => 'app_utilisateurs_delete', '_controller' => 'App\\Controller\\UtilisateursController::delete'], ['numeroutilisateurs'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
