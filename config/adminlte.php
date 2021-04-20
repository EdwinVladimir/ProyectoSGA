<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'Gestacademic',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>Gestacademic Ver. 1.0</b>',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'AdminLTE',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => '/admin',
    'logout_url' => 'logout',
    'login_url' => '/login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        [
            'text' => 'CONSULTA DE INFORMACIÓN',
            'search' => true,
            'topnav' => true,
        ],
        
        [
            
            'text'    => 'PERSONAL',
            'url'     => '#',
            'submenu' => [
                [
                    'text' => 'Estudiantes',
                    'url'  => 'admin/estudiantes',
                    'icon' => 'fas fa-fw fa-address-card',
                ],

                [        
                    'text' => 'Docentes',
                    'url'  => 'admin/docentes',
                    'icon' => 'fas fa-fw fa-chalkboard-teacher',
                ],

            ],
        ],
            [
            
                'text'    => 'ACADÉMICO',
                'url'     => '#',
                'submenu' => [

                [
                    'text' => 'Matriculación',
                    'url'  => 'admin/matricula',
                    'icon' => 'fas fa-fw fa-book',
                ],

                [
                    'text' => 'Actividades',
                    'url'  => 'admin/acitividades',
                    'icon' => 'fas fa-fw fa-book-open',
                ],

                [
                    'text' => 'Evaluaciones',
                    'url'  => 'admin/evaluaciones',
                    'icon' => 'fas fa-fw fa-book-reader',
                ],

                [
                    'text' => 'Estudiantes',
                    'url'  => 'admin/estudiantes',
                    'icon' => 'fas fa-fw fa-address-card',
                ],

                [        
                    'text' => 'Docentes',
                    'url'  => 'admin/docentes',
                    'icon' => 'fas fa-fw fa-chalkboard-teacher',
                ],
            ],
        ],

   
    [
        
            'text'    => 'GESTIÓN',
            'url'     => '#',
            'submenu' => [

            [
                'text' => 'Cursos',
                'url'  => 'admin/cursos',
                'icon' => 'fas fa-fw fa-bookmark',
            ],

            [
                'text' => 'Modulos',
                'url'  => 'admin/modulos',
                'icon' => 'fas fa-fw fa-map',
            ],

            [
                'text' => 'Materias',
                'url'  => 'admin/materias',
                'icon' => 'fas fa-fw fa-book-medical',
            ],

            [
                'text' => 'Periodos',
                'url'  => 'admin/periodos',
                'icon' => 'fas fa-fw fa-check-square',
            ],

            [
                'text' => 'Planes de Estudios',
                'url'  => 'admin/planes',
                'icon' => 'fas fa-fw fa-clipboard',
            ],

            [
                'text' => 'Horarios',
                'url'  => 'admin/horarios',
                'icon' => 'fas fa-fw fa-clock',
            ],

            [
                'text' => 'Modalidad',
                'url'  => 'admin/modalidad',
                'icon' => 'fas fa-fw fa-laptop-code',
            ],            
            
            [
                'text' => 'Aula',
                'url'  => 'admin/aula',
                'icon' => 'fas fa-fw fa-shapes',
            ],        
            
            [
                'text' => 'Sección',
                'url'  => 'admin/seccion',
                'icon' => 'fas fa-fw fa-microscope',
            ],
        ],
    ],
        
    [
            
        'text'    => 'REPORTES',
        'url'     => '#',
        'submenu' => [
            [
                'text' => 'General',
                'url'  => 'admin/general',
                'icon' => 'fas fa-fw fa-clipboard',
            ],

            [        
                'text' => 'Calificaciones',
                'url'  => 'admin/calificaciones',
                'icon' => 'fas fa-fw fa-columns',
            ],

            [        
                'text' => 'Analisis de Datos',
                'url'  => 'admin/analisisdatos',
                'icon' => 'fas fa-fw fa-diagnoses',
            ],

        ],
    ],

    [
        
        'text'    => 'MISCELANEOS',
        'url'     => '#',
        'submenu' => [

        [
            'text' => 'Reparto',
            'url'  => 'admin/reparto',
            'icon' => 'fas fa-fw fa-trophy',
        ],

        [
            'text' => 'Especialidad',
            'url'  => 'admin/mespecilidad',
            'icon' => 'fas fa-fw fa-images',
        ],

        [
            'text' => 'Tipo de Grado',
            'url'  => 'admin/tipogrado',
            'icon' => 'fas fa-fw fa-award',
        ],

        [
            'text' => 'Tipo Curso',
            'url'  => 'admin/tipocurso',
            'icon' => 'fas fa-fw fa-globe',
        ],

        [
            'text' => 'Tipo de Sangre',
            'url'  => 'admin/tiposangrr',
            'icon' => 'fas fa-fw fa-plus-circle',
        ],

    ],
],

[
        
            'text'    => 'SEGURIDAD',
            'url'     => '#',
            'submenu' => [
            
                [
                    'text' => 'Perfil',
                    'url'  => 'admin/perfil',
                    'icon' => 'fas fa-fw fa-user-shield',
                ],

                [
                    'text' => 'Cambiar Pasword',
                    'url'  => 'admin/clave',
                    'icon' => 'fas fa-fw fa-key',
                ],

                [
                    'text'    => 'Roles',
                    'url'     => 'admin/roles',
                    'icon'    => 'fas fa-fw fa-user-secret',
                ],   
            ],
        ],


        [
            'text'    => 'SALIR',
            'url'         => 'admin/salir',
            'icon'        => 'far fa-fw fa-times-circle',
            'label_color' => 'success',
        ],
    ],


    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    */

    'livewire' => false,
];
