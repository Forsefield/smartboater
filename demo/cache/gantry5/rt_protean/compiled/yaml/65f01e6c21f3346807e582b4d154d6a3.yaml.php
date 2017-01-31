<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/smartboater.ca/httpdocs/grav-skeleton-protean-site/user/themes/rt_protean/gantry/theme.yaml',
    'modified' => 1483473108,
    'data' => [
        'details' => [
            'name' => 'Protean',
            'version' => '1.1.0',
            'icon' => 'paper-plane',
            'date' => 'January  3, 2017',
            'author' => [
                'name' => 'RocketTheme, LLC',
                'email' => 'support@rockettheme.com',
                'link' => 'http://www.rockettheme.com'
            ],
            'documentation' => [
                'link' => 'http://docs.gantry.org/gantry5'
            ],
            'support' => [
                'link' => 'https://gitter.im/gantry/gantry5'
            ],
            'updates' => [
                'link' => 'http://updates.rockettheme.com/themes/protean.yaml'
            ],
            'news' => [
                'link' => 'http://news.rockettheme.com/prime/themes.yaml'
            ],
            'copyright' => '(C) 2007 - 2016 RocketTheme, LLC. All rights reserved.',
            'license' => 'GPLv2',
            'description' => 'Protean Theme',
            'images' => [
                'thumbnail' => 'admin/images/preset1.png',
                'preview' => 'admin/images/preset1.png'
            ]
        ],
        'configuration' => [
            'gantry' => [
                'platform' => 'grav',
                'engine' => 'nucleus'
            ],
            'theme' => [
                'parent' => 'rt_protean',
                'base' => 'gantry-theme://common',
                'file' => 'gantry-theme://include/theme.php',
                'class' => '\\Gantry\\Framework\\Theme'
            ],
            'fonts' => [
                'rubik' => [
                    900 => 'gantry-theme://fonts/rubik/rubik-black/rubik-black-webfont',
                    '900italic' => 'gantry-theme://fonts/rubik/rubik-blackitalic/rubik-blackitalic-webfont',
                    700 => 'gantry-theme://fonts/rubik/rubik-bold/rubik-bold-webfont',
                    '700italic' => 'gantry-theme://fonts/rubik/rubik-bolditalic/rubik-bolditalic-webfont',
                    500 => 'gantry-theme://fonts/rubik/rubik-medium/rubik-medium-webfont',
                    '500italic' => 'gantry-theme://fonts/rubik/rubik-mediumitalic/rubik-mediumitalic-webfont',
                    '400italic' => 'gantry-theme://fonts/rubik/rubik-italic/rubik-italic-webfont',
                    400 => 'gantry-theme://fonts/rubik/rubik-regular/rubik-regular-webfont',
                    300 => 'gantry-theme://fonts/rubik/rubik-light/rubik-light-webfont',
                    '300italic' => 'gantry-theme://fonts/rubik/rubik-lightitalic/rubik-lightitalic-webfont'
                ],
                'weather' => [
                    400 => 'gantry-theme://fonts/weather/artill_clean_icons-webfont'
                ]
            ],
            'css' => [
                'compiler' => '\\Gantry\\Component\\Stylesheet\\ScssCompiler',
                'target' => 'gantry-theme://css-compiled',
                'paths' => [
                    0 => 'gantry-theme://scss',
                    1 => 'gantry-engine://scss'
                ],
                'files' => [
                    0 => 'protean',
                    1 => 'protean-grav',
                    2 => 'custom'
                ],
                'persistent' => [
                    0 => 'protean'
                ],
                'overrides' => [
                    0 => 'protean-grav',
                    1 => 'custom'
                ]
            ],
            'dependencies' => [
                'gantry' => '5.3.*'
            ],
            'block-variations' => [
                'Title Variations' => [
                    'title1' => 'Title 1',
                    'title2' => 'Title 2',
                    'title3' => 'Title 3',
                    'title4' => 'Title 4',
                    'title5' => 'Title 5',
                    'title6' => 'Title 6',
                    'title-grey' => 'Title Grey',
                    'title-pink' => 'Title Pink',
                    'title-red' => 'Title Red',
                    'title-purple' => 'Title Purple',
                    'title-orange' => 'Title Orange',
                    'title-blue' => 'Title Blue',
                    'title-underline' => 'Title Underline',
                    'title-rounded' => 'Title Rounded'
                ],
                'Box Variations' => [
                    'box1' => 'Box 1',
                    'box2' => 'Box 2',
                    'box3' => 'Box 3',
                    'box4' => 'Box 4',
                    'box5' => 'Box 5',
                    'box6' => 'Box 6',
                    'box-white' => 'Box White',
                    'box-grey' => 'Box Grey',
                    'box-pink' => 'Box Pink',
                    'box-red' => 'Box Red',
                    'box-purple' => 'Box Purple',
                    'box-orange' => 'Box Orange',
                    'box-blue' => 'Box Blue'
                ],
                'Effects' => [
                    'spaced' => 'Spaced',
                    'bordered' => 'Bordered',
                    'shadow' => 'Shadow 1',
                    'shadow2' => 'Shadow 2',
                    'rounded' => 'Rounded',
                    'square' => 'Square'
                ],
                'Utility' => [
                    'equal-height' => 'Equal Height',
                    'g-outer-box' => 'Outer Box',
                    'disabled' => 'Disabled',
                    'align-right' => 'Align Right',
                    'align-left' => 'Align Left',
                    'title-center' => 'Centered Title',
                    'center' => 'Center',
                    'nomarginall' => 'No Margin',
                    'nopaddingall' => 'No Padding'
                ]
            ]
        ],
        'admin' => [
            'styles' => [
                'core' => [
                    0 => 'base',
                    1 => 'accent',
                    2 => 'font'
                ],
                'section' => [
                    0 => 'top',
                    1 => 'navigation',
                    2 => 'header',
                    3 => 'above',
                    4 => 'main',
                    5 => 'showcase',
                    6 => 'slideshow',
                    7 => 'utility',
                    8 => 'feature',
                    9 => 'expanded',
                    10 => 'extension',
                    11 => 'bottom',
                    12 => 'footer',
                    13 => 'copyright',
                    14 => 'offcanvas'
                ],
                'configuration' => [
                    0 => 'breakpoints'
                ]
            ]
        ]
    ]
];
