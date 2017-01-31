<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/smartboater.ca/httpdocs/grav-skeleton-protean-site/user/data/gantry5/themes/rt_protean/config/features_-_typography/layout.yaml',
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
                    0 => 'simplecontent-2327'
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
                        1 => 'children',
                        2 => 'block'
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
            'simplecontent-2327' => [
                'title' => 'Typography - Header',
                'attributes' => [
                    'class' => '',
                    'title' => '',
                    'items' => [
                        0 => [
                            'layout' => 'header',
                            'created_date' => '',
                            'content_title' => 'Typography',
                            'author' => '',
                            'leading_content' => '',
                            'main_content' => '',
                            'readmore_label' => '',
                            'readmore_link' => '',
                            'readmore_class' => '',
                            'readmore_target' => '_self',
                            'title' => 'Typography'
                        ]
                    ]
                ],
                'block' => [
                    'class' => 'title-white'
                ]
            ]
        ]
    ]
];
