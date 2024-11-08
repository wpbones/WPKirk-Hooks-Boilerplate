<?php

if (!defined('ABSPATH')) {
  exit();
}

/*
|--------------------------------------------------------------------------
| Plugin Menus routes
|--------------------------------------------------------------------------
|
| Here is where you can register all the menu routes for a plugin.
| In this context, the route are the menu link.
|
*/

return [
  'wp_kirk_slug_menu' => [
    "page_title" => "WP Kirk Hooks",
    "menu_title" => "WP Kirk Hooks",
    'capability' => 'read',
    'icon' => 'wpbones-logo-menu.png',
    'items' => [
      [
        "page_title" => "Hooks",
        "menu_title" => "Hooks",
        'capability' => 'read',
        'route' => [
          'get' => 'Examples\ExampleController@hooks'
        ],
      ],
      [
        "page_title" => "Modules",
        "menu_title" => "Modules",
        'capability' => 'read',
        'route' => [
          'get' => 'Examples\ExampleController@modules'
        ],
      ],
    ]
  ]
];
