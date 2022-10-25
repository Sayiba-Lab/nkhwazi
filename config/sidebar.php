<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'menu' => [[
      'text' => 'Overview',
      'is_header' => true
    ],[
      'url' => '/',
      'icon' => 'bi bi-cpu',
      'text' => 'Dashboard'
    ],
    [
        'is_divider' => true
      ], [
        'text' => 'Registry & Settings',
        'is_header' => true
      ], [
      'url' => '/files',
      'icon' => 'fas fa-folder-open',
      'text' => 'Surveilance Files'
    ], [
      'icon' => 'fas fa-fw me-2 fa-users',
      'text' => 'Accounts',
      'children' => [[
          'url' => '/users',
          'action' => 'List',
          'text' => 'List All Accounts'
        ], [
          'url' => '/users/create',
          'action' => 'Create',
          'text' => 'Create Account'
        ]]
    ], [
      'is_divider' => true
    ], [
      'text' => 'Operational Panel',
      'is_header' => true
    ], [
      'url' => '/calls',
      'icon' => 'fas  fa-fw me-2 fa-phone',
      'text' => 'Calls'
    ],  [
        'url' => '/messages',
        'icon' => 'fas fa-fw me-2 fa-envelope-open',
        'text' => 'Messages'
      ],
      [
        'url' => '/media',
        'icon' => 'fas  fa-fw me-2 fa-image',
        'text' => 'Media'
      ],
      [
        'url' => '/locations',
        'icon' => 'fas fa-fw me-2 fa-map-marker-alt',
        'text' => 'Locations'
      ],
      [
        'url' => '/contacts',
        'icon' => 'fas fa-fw me-2 fa-address-book',
        'text' => 'Contacts'
      ],
      [
        'url' => '/apps',
        'icon' => 'fab fa-fw me-2 fa-app-store',
        'text' => 'Apps'
      ],
      [
        'url' => '/websites',
        'icon' => 'fas fa-fw me-2 fa-globe',
        'text' => 'Websites'
      ],
      [
        'url' => '/calendars',
        'icon' => 'fas fa-fw me-2 fa-calendar-alt',
        'text' => 'Calendars'
      ]
    ]
];
