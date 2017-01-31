<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/smartboater.ca/httpdocs/grav-skeleton-protean-site/user/data/gantry5/themes/rt_protean/config/pages_-_portfolio/layout.yaml',
    'modified' => 1483473130,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'default',
            'timestamp' => 1475002332
        ],
        'layout' => [
            'top' => [
                
            ],
            'navigation' => [
                
            ],
            '/slideshow/' => [
                0 => [
                    0 => 'simplecontent-8572'
                ]
            ],
            '/header/' => [
                
            ],
            '/above/' => [
                0 => [
                    0 => 'infolist-7957'
                ]
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
                    0 => 'infolist-8412'
                ]
            ],
            '/extension/' => [
                
            ],
            '/bottom/' => [
                0 => [
                    0 => 'imagegrid-9270'
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
                        0 => 'children',
                        1 => 'attributes'
                    ]
                ]
            ],
            'navigation' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'children',
                        1 => 'attributes'
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
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
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
                        0 => 'block',
                        1 => 'attributes',
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
                    'class' => 'fp-expanded'
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
            'simplecontent-8572' => [
                'title' => 'Portfolio - Header',
                'attributes' => [
                    'class' => '',
                    'title' => '',
                    'items' => [
                        0 => [
                            'layout' => 'header',
                            'created_date' => '',
                            'content_title' => 'Portfolio',
                            'author' => '',
                            'leading_content' => '',
                            'main_content' => '',
                            'readmore_label' => '',
                            'readmore_link' => '',
                            'readmore_class' => '',
                            'readmore_target' => '_self',
                            'title' => 'Portfolio'
                        ]
                    ]
                ],
                'block' => [
                    'class' => 'title-white'
                ]
            ],
            'infolist-7957' => [
                'title' => 'Portfolio Info List',
                'attributes' => [
                    'class' => '',
                    'title' => '',
                    'intro' => '',
                    'cols' => 'g-3cols',
                    'infolists' => [
                        0 => [
                            'icon' => 'fa fa-align-justify',
                            'iconloc' => 'center',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet nibh. Vivamus non arcu.',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Social Media'
                        ],
                        1 => [
                            'icon' => 'fa fa-bar-chart-o',
                            'iconloc' => 'center',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet nibh. Vivamus non arcu.',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Web Development'
                        ],
                        2 => [
                            'icon' => 'fa fa-building-o',
                            'iconloc' => 'center',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet nibh. Vivamus non arcu.',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Graphic Design'
                        ],
                        3 => [
                            'icon' => 'fa fa-codepen',
                            'iconloc' => 'center',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet nibh. Vivamus non arcu.',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Customer Relations'
                        ],
                        4 => [
                            'icon' => 'fa fa-file-movie-o',
                            'iconloc' => 'center',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet nibh. Vivamus non arcu.',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Reliable Resources'
                        ],
                        5 => [
                            'icon' => 'fa fa-industry',
                            'iconloc' => 'center',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet nibh. Vivamus non arcu.',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Music Composition'
                        ]
                    ]
                ]
            ],
            'infolist-8412' => [
                'title' => 'Portfolio Info List',
                'attributes' => [
                    'class' => 'noborder spaced',
                    'title' => '',
                    'intro' => '',
                    'cols' => 'g-2cols',
                    'infolists' => [
                        0 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => 'gantry-media://rocketlauncher/pages/portfolio/expanded/img-01.jpg',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'large',
                            'desc' => 'Cuaqum ante augue. Nullam dignissim, felis eu imperdiet feugiat, libero ipsum gravida arcu.',
                            'tag' => '',
                            'subtag' => '',
                            'label' => 'Learn More',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Project 1'
                        ],
                        1 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => 'gantry-media://rocketlauncher/pages/portfolio/expanded/img-02.jpg',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'large',
                            'desc' => 'Cuaqum ante augue. Nullam dignissim, felis eu imperdiet feugiat, libero ipsum gravida arcu.',
                            'tag' => '',
                            'subtag' => '',
                            'label' => 'Learn More',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Project 2'
                        ],
                        2 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => 'gantry-media://rocketlauncher/pages/portfolio/expanded/img-03.jpg',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'large',
                            'desc' => 'Cuaqum ante augue. Nullam dignissim, felis eu imperdiet feugiat, libero ipsum gravida arcu.',
                            'tag' => '',
                            'subtag' => '',
                            'label' => 'Learn More',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Project 3'
                        ],
                        3 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => 'gantry-media://rocketlauncher/pages/portfolio/expanded/img-04.jpg',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'large',
                            'desc' => 'Cuaqum ante augue. Nullam dignissim, felis eu imperdiet feugiat, libero ipsum gravida arcu.',
                            'tag' => '',
                            'subtag' => '',
                            'label' => 'Learn More',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Project 4'
                        ]
                    ]
                ]
            ],
            'imagegrid-9270' => [
                'title' => 'Portfolio Image Grid',
                'attributes' => [
                    'class' => '',
                    'title' => '',
                    'desc' => '',
                    'cols' => 'g-imagegrid-4cols',
                    'layout' => 'g-imagegrid-captions',
                    'album' => 'clients',
                    'imagegriditems' => [
                        0 => [
                            'image' => 'gantry-media://rocketlauncher/pages/portfolio/footer/img-01.jpg',
                            'caption' => 'Image 1',
                            'icon' => 'fa fa-search',
                            'title' => 'Image 1'
                        ],
                        1 => [
                            'image' => 'gantry-media://rocketlauncher/pages/portfolio/footer/img-02.jpg',
                            'caption' => 'Image 2',
                            'icon' => 'fa fa-search',
                            'title' => 'Image 2'
                        ],
                        2 => [
                            'image' => 'gantry-media://rocketlauncher/pages/portfolio/footer/img-03.jpg',
                            'caption' => 'Image 3',
                            'icon' => 'fa fa-search',
                            'title' => 'Image 3'
                        ],
                        3 => [
                            'image' => 'gantry-media://rocketlauncher/pages/portfolio/footer/img-04.jpg',
                            'caption' => 'Image 4',
                            'icon' => 'fa fa-search',
                            'title' => 'Image 4'
                        ],
                        4 => [
                            'image' => 'gantry-media://rocketlauncher/pages/portfolio/footer/img-05.jpg',
                            'caption' => 'Image 5',
                            'icon' => 'fa fa-search',
                            'title' => 'Image 5'
                        ],
                        5 => [
                            'image' => 'gantry-media://rocketlauncher/pages/portfolio/footer/img-06.jpg',
                            'caption' => 'Image 6',
                            'icon' => 'fa fa-search',
                            'title' => 'Image 6'
                        ],
                        6 => [
                            'image' => 'gantry-media://rocketlauncher/pages/portfolio/footer/img-07.jpg',
                            'caption' => 'Image 7',
                            'icon' => 'fa fa-search',
                            'title' => 'Image 7'
                        ],
                        7 => [
                            'image' => 'gantry-media://rocketlauncher/pages/portfolio/footer/img-08.jpg',
                            'caption' => 'Image 8',
                            'icon' => 'fa fa-search',
                            'title' => 'Image 8'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
