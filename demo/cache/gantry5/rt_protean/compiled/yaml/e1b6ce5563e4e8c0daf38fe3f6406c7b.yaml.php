<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/smartboater.ca/httpdocs/grav-skeleton-protean-site/user/data/gantry5/themes/rt_protean/config/pages_-_about_us/layout.yaml',
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
                    0 => 'simplecontent-3643'
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
                                0 => 'blockcontent-8404'
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
                    0 => 'blockcontent-8131'
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
                        0 => 'children',
                        1 => 'attributes'
                    ]
                ]
            ]
        ],
        'content' => [
            'simplecontent-3643' => [
                'title' => 'Header - About Us',
                'attributes' => [
                    'class' => '',
                    'title' => '',
                    'items' => [
                        0 => [
                            'layout' => 'header',
                            'created_date' => '',
                            'content_title' => 'About Us',
                            'author' => '',
                            'leading_content' => '',
                            'main_content' => '',
                            'readmore_label' => '',
                            'readmore_link' => '',
                            'readmore_class' => '',
                            'readmore_target' => '_self',
                            'title' => 'About Us'
                        ]
                    ]
                ],
                'block' => [
                    'class' => 'title-white'
                ]
            ],
            'blockcontent-8404' => [
                'title' => 'About Us - Who we are',
                'attributes' => [
                    'class' => 'center',
                    'title' => 'This is who we are',
                    'icon' => '',
                    'image' => '',
                    'headline' => '',
                    'description' => '',
                    'linktext' => '',
                    'link' => '',
                    'linkclass' => '',
                    'linktarget' => '_self',
                    'subcontents' => [
                        0 => [
                            'name' => 'Rick Grimes',
                            'icon' => '',
                            'img' => 'gantry-media://rocketlauncher/pages/about-us/showcase/img-01.jpg',
                            'rokboximage' => '',
                            'rokboxcaption' => '',
                            'subtitle' => 'CEO',
                            'description' => 'Protean\'s RocketLauncher comes complete with several preset pages that enable you to hit the ground running with a complete, feature-rich website in a fraction of the time.<br />
<i class="fa fa-twitter-square"></i> <i class="fa fa-facebook-square"></i> <i class="fa fa-linkedin-square"></i>',
                            'class' => '',
                            'button' => '',
                            'buttonlink' => '',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'title' => 'Rick Grimes'
                        ],
                        1 => [
                            'name' => 'Maggie Greene',
                            'icon' => '',
                            'img' => 'gantry-media://rocketlauncher/pages/about-us/showcase/img-02.jpg',
                            'rokboximage' => '',
                            'rokboxcaption' => '',
                            'subtitle' => 'HR',
                            'description' => 'Protean features a number of uniquely-designed particles that make adding content to your website easy. These particles are a great way to display your content.<br />
<i class="fa fa-twitter-square"></i> <i class="fa fa-facebook-square"></i> <i class="fa fa-linkedin-square"></i>',
                            'class' => '',
                            'button' => '',
                            'buttonlink' => '',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'title' => 'Maggie Greene'
                        ],
                        2 => [
                            'name' => 'Daryl Dixon',
                            'icon' => '',
                            'img' => 'gantry-media://rocketlauncher/pages/about-us/showcase/img-03.jpg',
                            'rokboximage' => '',
                            'rokboxcaption' => '',
                            'subtitle' => 'Designer',
                            'description' => 'The Gantry 5 framework is packed with features that empower you to create a website that perfectly matches your vision and branding - no scripting experience necessary.<br />
<i class="fa fa-twitter-square"></i> <i class="fa fa-facebook-square"></i> <i class="fa fa-linkedin-square"></i>',
                            'class' => '',
                            'button' => '',
                            'buttonlink' => '',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'title' => 'Daryl Dixon'
                        ]
                    ]
                ],
                'block' => [
                    'variations' => 'title6 title-center'
                ]
            ],
            'blockcontent-8131' => [
                'title' => 'About Us - What we do',
                'attributes' => [
                    'class' => 'center g-blockcontent-spacing',
                    'title' => 'This is what we do',
                    'icon' => '',
                    'image' => '',
                    'headline' => '',
                    'description' => '',
                    'linktext' => '',
                    'link' => '',
                    'linkclass' => '',
                    'linktarget' => '_self',
                    'subcontents' => [
                        0 => [
                            'name' => 'Introduction',
                            'icon' => '',
                            'img' => 'gantry-media://rocketlauncher/pages/about-us/mainbar/img-01.jpg',
                            'rokboximage' => '',
                            'rokboxcaption' => '',
                            'subtitle' => '',
                            'description' => '',
                            'class' => 'nopaddingall',
                            'button' => '',
                            'buttonlink' => '',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'title' => 'Introduction'
                        ],
                        1 => [
                            'name' => 'Mission',
                            'icon' => '',
                            'img' => 'gantry-media://rocketlauncher/pages/about-us/mainbar/img-02.jpg',
                            'rokboximage' => '',
                            'rokboxcaption' => '',
                            'subtitle' => '',
                            'description' => '',
                            'class' => 'nopaddingall',
                            'button' => '',
                            'buttonlink' => '',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'title' => 'Mission'
                        ],
                        2 => [
                            'name' => 'Business',
                            'icon' => '',
                            'img' => 'gantry-media://rocketlauncher/pages/about-us/mainbar/img-03.jpg',
                            'rokboximage' => '',
                            'rokboxcaption' => '',
                            'subtitle' => '',
                            'description' => '',
                            'class' => 'nopaddingall',
                            'button' => '',
                            'buttonlink' => '',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'title' => 'Business'
                        ]
                    ]
                ],
                'block' => [
                    'variations' => 'title6 center'
                ]
            ]
        ]
    ]
];
