<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/smartboater.ca/httpdocs/grav-skeleton-protean-site/user/data/gantry5/themes/rt_protean/config/features_-_block_variations/layout.yaml',
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
                    0 => 'simplecontent-3247'
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
                                0 => 'system-content-1120'
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
                
            ],
            '/extension/' => [
                
            ],
            '/bottom/' => [
                0 => [
                    0 => 'custom-6582'
                ],
                1 => [
                    0 => 'infolist-1100'
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
                        0 => 'attributes',
                        1 => 'children'
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
            'simplecontent-3247' => [
                'title' => 'Block Variations - Header',
                'attributes' => [
                    'class' => '',
                    'title' => '',
                    'items' => [
                        0 => [
                            'layout' => 'header',
                            'created_date' => '',
                            'content_title' => 'Block Variations',
                            'author' => '',
                            'leading_content' => '',
                            'main_content' => '',
                            'readmore_label' => '',
                            'readmore_link' => '',
                            'readmore_class' => '',
                            'readmore_target' => '_self',
                            'title' => 'Block Variations'
                        ]
                    ]
                ],
                'block' => [
                    'class' => 'title-white'
                ]
            ],
            'custom-6582' => [
                'title' => 'Block Variations - Additional Classes Header',
                'attributes' => [
                    'html' => '<h3 class="g-title">Additional Effects & Classes</h3>
<p>A collection of additional variations for structural and subtle stylistic adjustments.
Effects and classes should be applied to the block within the Layout Manager, rather than in the module parameters, to ensure the desired effect is achieved.</p>'
                ],
                'block' => [
                    'variations' => 'center'
                ]
            ],
            'infolist-1100' => [
                'title' => 'Block Variations - Additional Classes List',
                'attributes' => [
                    'class' => 'center',
                    'title' => '',
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
                            'desc' => 'Add low opacity to a block',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Disabled'
                        ],
                        1 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Center the block content',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Center'
                        ],
                        2 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Apply background to the whole block',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Outer Box'
                        ],
                        3 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Remove outer margin/padding',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Flush'
                        ],
                        4 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Align block content to the left',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Align Left'
                        ],
                        5 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Align block content to the right',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Align Right'
                        ],
                        6 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Remove outer margin',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'No Margin'
                        ],
                        7 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Remove outer padding',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'No Padding'
                        ],
                        8 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Add squared corners to a block',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Square'
                        ],
                        9 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Add rounded corners to a block',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Rounded'
                        ],
                        10 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Add a shadow effect to a block',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Shadow 1'
                        ],
                        11 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Add a shadow effect to a block',
                            'tag' => '',
                            'subtag' => '',
                            'label' => '',
                            'link' => '',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Shadow 2'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
