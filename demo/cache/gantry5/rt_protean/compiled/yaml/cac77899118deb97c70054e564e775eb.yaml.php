<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/smartboater.ca/httpdocs/grav-skeleton-protean-site/user/data/gantry5/themes/rt_protean/config/pages_-_pricing/layout.yaml',
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
                    0 => 'simplecontent-8990'
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
                                0 => 'pricingtable-3755'
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
            'simplecontent-8990' => [
                'title' => 'Header - Pricing',
                'attributes' => [
                    'class' => '',
                    'title' => '',
                    'items' => [
                        0 => [
                            'layout' => 'header',
                            'created_date' => '',
                            'content_title' => 'Pricing Overview',
                            'author' => '',
                            'leading_content' => '',
                            'main_content' => '',
                            'readmore_label' => '',
                            'readmore_link' => '',
                            'readmore_class' => '',
                            'readmore_target' => '_self',
                            'title' => 'Pricing Overview'
                        ]
                    ]
                ],
                'block' => [
                    'class' => 'title-white'
                ]
            ],
            'pricingtable-3755' => [
                'title' => 'Pricing - Pricing Table',
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
                            'price' => '$75',
                            'period' => '',
                            'desc' => '',
                            'buttontext' => 'Choose',
                            'buttonlink' => '#',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'items' => [
                                0 => [
                                    'text' => '5 web pages',
                                    'class' => 'g-bold',
                                    'title' => 'Item 1'
                                ],
                                1 => [
                                    'text' => '5 mb upload',
                                    'class' => 'g-bold',
                                    'title' => 'Item 2'
                                ],
                                2 => [
                                    'text' => ' Blog Plugin',
                                    'class' => 'g-linethrough',
                                    'title' => 'Item 3'
                                ],
                                3 => [
                                    'text' => 'Shop Plugin',
                                    'class' => 'g-linethrough',
                                    'title' => 'Item 4'
                                ],
                                4 => [
                                    'text' => 'Premium Themes',
                                    'class' => 'g-linethrough',
                                    'title' => 'Item 5'
                                ],
                                5 => [
                                    'text' => 'Phone Support',
                                    'class' => 'g-linethrough',
                                    'title' => 'Item 6'
                                ]
                            ],
                            'plan' => 'Bronze'
                        ],
                        1 => [
                            'accent' => 'accent2',
                            'customcolor' => '',
                            'class' => '',
                            'ribbon' => 'Popular',
                            'icon' => '',
                            'price' => '$125',
                            'period' => '',
                            'desc' => '',
                            'buttontext' => 'Choose',
                            'buttonlink' => '#',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'items' => [
                                0 => [
                                    'text' => '15 web pages',
                                    'class' => 'g-bold',
                                    'title' => 'Item 1'
                                ],
                                1 => [
                                    'text' => '15 mb upload',
                                    'class' => 'g-bold',
                                    'title' => 'Item 2'
                                ],
                                2 => [
                                    'text' => 'Blog Plugin',
                                    'class' => 'g-bold',
                                    'title' => 'Item 3'
                                ],
                                3 => [
                                    'text' => 'Shop Plugin',
                                    'class' => 'g-bold',
                                    'title' => 'Item 4'
                                ],
                                4 => [
                                    'text' => 'Premium Themes',
                                    'class' => 'g-linethrough',
                                    'title' => 'Item 5'
                                ],
                                5 => [
                                    'text' => 'Phone Support',
                                    'class' => 'g-linethrough',
                                    'title' => 'Item 6'
                                ]
                            ],
                            'plan' => 'Silver'
                        ],
                        2 => [
                            'accent' => 'accent1',
                            'customcolor' => '',
                            'class' => '',
                            'ribbon' => '',
                            'icon' => '',
                            'price' => '$200',
                            'period' => '',
                            'desc' => '',
                            'buttontext' => 'Choose',
                            'buttonlink' => '#',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'items' => [
                                0 => [
                                    'text' => '25 web pages',
                                    'class' => 'g-bold',
                                    'title' => 'Item 1'
                                ],
                                1 => [
                                    'text' => ' 25 mb upload',
                                    'class' => 'g-bold',
                                    'title' => 'Item 2'
                                ],
                                2 => [
                                    'text' => 'Blog Plugin',
                                    'class' => 'g-bold',
                                    'title' => 'Item 3'
                                ],
                                3 => [
                                    'text' => 'Shop Plugin',
                                    'class' => 'g-bold',
                                    'title' => 'Item 4'
                                ],
                                4 => [
                                    'text' => 'Premium Themes',
                                    'class' => 'g-bold',
                                    'title' => 'Item 5'
                                ],
                                5 => [
                                    'text' => ' Phone Support',
                                    'class' => 'g-bold',
                                    'title' => 'Item 6'
                                ]
                            ],
                            'plan' => 'Gold'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
