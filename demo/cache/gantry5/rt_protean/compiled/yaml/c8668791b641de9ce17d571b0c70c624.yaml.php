<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/smartboater.ca/httpdocs/grav-skeleton-protean-site/user/data/gantry5/themes/rt_protean/config/features_-_overview/layout.yaml',
    'modified' => 1483473130,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'default',
            'timestamp' => 1474988321
        ],
        'layout' => [
            'top' => [
                
            ],
            'navigation' => [
                
            ],
            '/slideshow/' => [
                0 => [
                    0 => 'simplecontent-8113'
                ]
            ],
            '/header/' => [
                
            ],
            '/above/' => [
                
            ],
            '/showcase/' => [
                
            ],
            '/utility/' => [
                
            ],
            '/feature/' => [
                
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'sidebar 20' => [
                            
                        ]
                    ],
                    1 => [
                        'mainbar 60' => [
                            0 => [
                                0 => 'pricingtable-1697'
                            ]
                        ]
                    ],
                    2 => [
                        'aside 20' => [
                            
                        ]
                    ]
                ]
            ],
            '/expanded/' => [
                0 => [
                    0 => 'infolist-2127'
                ]
            ],
            '/extension/' => [
                
            ],
            '/bottom/' => [
                0 => [
                    0 => 'infolist-3456'
                ]
            ],
            '/footer/' => [
                
            ],
            'copyright' => [
                
            ],
            'offcanvas' => [
                
            ]
        ],
        'structure' => [
            'top' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'navigation' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'slideshow' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'header' => [
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'above' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'showcase' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'utility' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'feature' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'sidebar' => [
                'type' => 'section',
                'subtype' => 'aside',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'block',
                        1 => 'children',
                        2 => 'attributes'
                    ]
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'subtype' => 'main',
                'title' => 'Main',
                'attributes' => [
                    'class' => ''
                ]
            ],
            'aside' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => '3',
                    'class' => '',
                    'extra' => [
                        
                    ]
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'extension' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'bottom' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'footer' => [
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'copyright' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'children',
                        1 => 'attributes'
                    ]
                ]
            ],
            'offcanvas' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ]
        ],
        'content' => [
            'simplecontent-8113' => [
                'title' => 'Features - Overview',
                'attributes' => [
                    'class' => '',
                    'title' => '',
                    'items' => [
                        0 => [
                            'layout' => 'header',
                            'created_date' => '',
                            'content_title' => 'Features Overview',
                            'author' => '',
                            'leading_content' => '',
                            'main_content' => '',
                            'readmore_label' => '',
                            'readmore_link' => '',
                            'readmore_class' => '',
                            'readmore_target' => '_self',
                            'title' => 'Overview'
                        ]
                    ]
                ],
                'block' => [
                    'class' => 'title-white'
                ]
            ],
            'pricingtable-1697' => [
                'title' => 'Features List',
                'attributes' => [
                    'class' => '',
                    'title' => '',
                    'headertext' => '',
                    'footertext' => '',
                    'columns' => 'g-pricingtable-3-col',
                    'tables' => [
                        0 => [
                            'accent' => 'accent1',
                            'customcolor' => '',
                            'class' => '',
                            'ribbon' => '',
                            'icon' => '',
                            'price' => 'Dropdown',
                            'period' => '',
                            'desc' => '',
                            'buttontext' => 'Navigation',
                            'buttonlink' => '#',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'items' => [
                                0 => [
                                    'text' => 'A Dropdown Menu system, with inline icons, multiple columns and more.',
                                    'class' => 'g-bold',
                                    'title' => 'Item 1'
                                ]
                            ],
                            'plan' => 'Menu'
                        ],
                        1 => [
                            'accent' => 'accent2',
                            'customcolor' => '',
                            'class' => '',
                            'ribbon' => '',
                            'icon' => '',
                            'price' => 'Unlimited',
                            'period' => '',
                            'desc' => '',
                            'buttontext' => 'Layout',
                            'buttonlink' => '#',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'items' => [
                                0 => [
                                    'text' => 'Unlimited positions, drag and drop add, delete, move and resize.',
                                    'class' => 'g-bold',
                                    'title' => 'Item 1'
                                ]
                            ],
                            'plan' => 'Positions'
                        ],
                        2 => [
                            'accent' => 'accent1',
                            'customcolor' => '',
                            'class' => '',
                            'ribbon' => '',
                            'icon' => '',
                            'price' => 'Variations',
                            'period' => '',
                            'desc' => '',
                            'buttontext' => 'Style',
                            'buttonlink' => '#',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'items' => [
                                0 => [
                                    'text' => 'Enhance positions and particles with stylistic and structural block variations.',
                                    'class' => 'g-bold',
                                    'title' => 'Item 1'
                                ]
                            ],
                            'plan' => 'Blocks'
                        ],
                        3 => [
                            'accent' => 'accent2',
                            'customcolor' => '',
                            'class' => '',
                            'ribbon' => '',
                            'icon' => '',
                            'price' => 'Presets',
                            'period' => '',
                            'desc' => '',
                            'buttontext' => 'Style',
                            'buttonlink' => '#',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'items' => [
                                0 => [
                                    'text' => 'Choose from six preset style variations, easily customizable.',
                                    'class' => 'g-bold',
                                    'title' => 'Item 1'
                                ]
                            ],
                            'plan' => 'Multiple'
                        ],
                        4 => [
                            'accent' => 'accent1',
                            'customcolor' => '',
                            'class' => '',
                            'ribbon' => '',
                            'icon' => '',
                            'price' => 'Responsive',
                            'period' => '',
                            'desc' => '',
                            'buttontext' => 'Layout',
                            'buttonlink' => '#',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'items' => [
                                0 => [
                                    'text' => 'Responsive layout that adapts to the viewing device, such as laptop or mobile.',
                                    'class' => 'g-bold',
                                    'title' => 'Item 1'
                                ]
                            ],
                            'plan' => 'Layout'
                        ],
                        5 => [
                            'accent' => 'accent2',
                            'customcolor' => '',
                            'class' => '',
                            'ribbon' => '',
                            'icon' => '',
                            'price' => 'Typography',
                            'period' => '',
                            'desc' => '',
                            'buttontext' => 'Style',
                            'buttonlink' => '#',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'items' => [
                                0 => [
                                    'text' => 'Enhance site content with rich typography and FontAwesome icons.',
                                    'class' => 'g-bold',
                                    'title' => 'Item 1'
                                ]
                            ],
                            'plan' => 'Custom'
                        ],
                        6 => [
                            'accent' => 'accent1',
                            'customcolor' => '',
                            'class' => '',
                            'ribbon' => '',
                            'icon' => '',
                            'price' => 'Editor',
                            'period' => '',
                            'desc' => '',
                            'buttontext' => 'Menu',
                            'buttonlink' => '#',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'items' => [
                                0 => [
                                    'text' => 'Advanced Menu Editor with drag and drop, multiple columns and more.',
                                    'class' => 'g-bold',
                                    'title' => 'Item 1'
                                ]
                            ],
                            'plan' => 'Menu'
                        ],
                        7 => [
                            'accent' => 'accent2',
                            'customcolor' => '',
                            'class' => '',
                            'ribbon' => '',
                            'icon' => '',
                            'price' => 'Layout',
                            'period' => '',
                            'desc' => '',
                            'buttontext' => 'Layout',
                            'buttonlink' => '#',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'items' => [
                                0 => [
                                    'text' => 'The Layout Manager is an intuitive interface for managing blocks.',
                                    'class' => 'g-bold',
                                    'title' => 'Item 1'
                                ]
                            ],
                            'plan' => 'Manager'
                        ],
                        8 => [
                            'accent' => 'accent1',
                            'customcolor' => '',
                            'class' => '',
                            'ribbon' => '',
                            'icon' => '',
                            'price' => 'Settings',
                            'period' => '',
                            'desc' => '',
                            'buttontext' => 'Style',
                            'buttonlink' => '#',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'items' => [
                                0 => [
                                    'text' => 'Unique, and intuitive interface for colors and fonts, with live previews.',
                                    'class' => 'g-bold',
                                    'title' => 'New item'
                                ]
                            ],
                            'plan' => 'Settings'
                        ]
                    ]
                ]
            ],
            'infolist-2127' => [
                'title' => 'Core Features',
                'attributes' => [
                    'class' => '',
                    'title' => 'Gantry 5 Core Features',
                    'intro' => '',
                    'cols' => 'g-3cols',
                    'infolists' => [
                        0 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Particles are simple user interface blocks that hook into Gantry 5',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Powerful Particles System'
                        ],
                        1 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Configure and structure your menu hierarchy with our new Menu editor',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Visual Menu Editor'
                        ],
                        2 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Drag-n-drop layout manager makes layouts a breeze to create',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Layout Manager'
                        ],
                        3 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Made a mistake in the layout manager? No problem, you can easily undo it',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Unlimited Undo/Redo'
                        ],
                        4 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Icon Picker, Image Picker, Font Picker, Collections, and much, much more!',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Sophisticated Built-in Fields'
                        ],
                        5 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Dynamic compilation of multiple CSS preprocessors is supported in Gantry 5',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'SCSS LESS Support'
                        ],
                        6 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Easily add Gantry 5 particles to a location-configurable off-canvas panel',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Off-Canvas Panel'
                        ],
                        7 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Gantry 5 uses the super-powerful Twig templating system to build your themes',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Twig-based Templating'
                        ],
                        8 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Easily configure Gantry 5 with simple-to-use YAML syntax',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'YAML-based Configuration'
                        ]
                    ]
                ],
                'block' => [
                    'class' => 'title-white',
                    'variations' => 'title6 title-center'
                ]
            ],
            'infolist-3456' => [
                'title' => 'System Requirements',
                'attributes' => [
                    'title' => 'System Requirements',
                    'intro' => '',
                    'cols' => 'g-3cols',
                    'infolists' => [
                        0 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Google Chrome 41+, Firefox 36+, Safari 9+, Opera 28+, IE11+',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Browsers'
                        ],
                        1 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'PHP 5.4+ with Curl, OpenSSL Libraries and Multibyte String Support',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Server Requirements'
                        ],
                        2 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'WordPress 4.2+, Joomla 3.6+',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Platforms'
                        ]
                    ]
                ],
                'block' => [
                    'variations' => 'title6 title-center'
                ]
            ]
        ]
    ]
];
