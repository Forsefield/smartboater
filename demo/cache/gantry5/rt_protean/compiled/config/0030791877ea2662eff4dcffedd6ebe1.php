<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1484894108,
    'checksum' => '223484d8b65dc4ce9fc3a026d30b0ffb',
    'files' => [
        'user/data/gantry5/themes/rt_protean/config/default' => [
            'index' => [
                'file' => 'user/data/gantry5/themes/rt_protean/config/default/index.yaml',
                'modified' => 1483473130
            ],
            'layout' => [
                'file' => 'user/data/gantry5/themes/rt_protean/config/default/layout.yaml',
                'modified' => 1483473130
            ],
            'menu' => [
                'file' => 'user/data/gantry5/themes/rt_protean/config/default/menu.yaml',
                'modified' => 1483473130
            ],
            'page/assets' => [
                'file' => 'user/data/gantry5/themes/rt_protean/config/default/page/assets.yaml',
                'modified' => 1483473130
            ],
            'page/body' => [
                'file' => 'user/data/gantry5/themes/rt_protean/config/default/page/body.yaml',
                'modified' => 1483473130
            ],
            'page/head' => [
                'file' => 'user/data/gantry5/themes/rt_protean/config/default/page/head.yaml',
                'modified' => 1483473130
            ],
            'particles/branding' => [
                'file' => 'user/data/gantry5/themes/rt_protean/config/default/particles/branding.yaml',
                'modified' => 1483473130
            ],
            'particles/copyright' => [
                'file' => 'user/data/gantry5/themes/rt_protean/config/default/particles/copyright.yaml',
                'modified' => 1483473130
            ],
            'particles/logo' => [
                'file' => 'user/data/gantry5/themes/rt_protean/config/default/particles/logo.yaml',
                'modified' => 1483473130
            ],
            'particles/social' => [
                'file' => 'user/data/gantry5/themes/rt_protean/config/default/particles/social.yaml',
                'modified' => 1483473130
            ],
            'particles/totop' => [
                'file' => 'user/data/gantry5/themes/rt_protean/config/default/particles/totop.yaml',
                'modified' => 1483473130
            ],
            'styles' => [
                'file' => 'user/data/gantry5/themes/rt_protean/config/default/styles.yaml',
                'modified' => 1483473130
            ]
        ],
        'user/themes/rt_protean/config/default' => [
            'page/assets' => [
                'file' => 'user/themes/rt_protean/config/default/page/assets.yaml',
                'modified' => 1483473108
            ],
            'page/body' => [
                'file' => 'user/themes/rt_protean/config/default/page/body.yaml',
                'modified' => 1483473108
            ],
            'page/head' => [
                'file' => 'user/themes/rt_protean/config/default/page/head.yaml',
                'modified' => 1483473108
            ],
            'particles/branding' => [
                'file' => 'user/themes/rt_protean/config/default/particles/branding.yaml',
                'modified' => 1483473108
            ],
            'particles/copyright' => [
                'file' => 'user/themes/rt_protean/config/default/particles/copyright.yaml',
                'modified' => 1483473108
            ],
            'particles/logo' => [
                'file' => 'user/themes/rt_protean/config/default/particles/logo.yaml',
                'modified' => 1483473108
            ],
            'particles/social' => [
                'file' => 'user/themes/rt_protean/config/default/particles/social.yaml',
                'modified' => 1483473108
            ],
            'particles/totop' => [
                'file' => 'user/themes/rt_protean/config/default/particles/totop.yaml',
                'modified' => 1483473108
            ],
            'styles' => [
                'file' => 'user/themes/rt_protean/config/default/styles.yaml',
                'modified' => 1483473108
            ]
        ]
    ],
    'data' => [
        'page' => [
            'assets' => [
                'priority' => 0,
                'favicon' => '',
                'touchicon' => '',
                'css' => [
                    
                ],
                'javascript' => [
                    
                ]
            ],
            'body' => [
                'attribs' => [
                    'class' => 'gantry',
                    'id' => '',
                    'extra' => [
                        
                    ]
                ],
                'layout' => [
                    'sections' => '0'
                ],
                'doctype' => 'html',
                'body_top' => '',
                'body_bottom' => ''
            ],
            'head' => [
                'meta' => [
                    
                ],
                'head_bottom' => '',
                'atoms' => [
                    0 => [
                        'type' => 'assets',
                        'title' => 'Custom CSS / JS',
                        'attributes' => [
                            'enabled' => '1',
                            'css' => [
                                0 => [
                                    'location' => 'gantry-assets://css/animate.css',
                                    'inline' => '',
                                    'extra' => [
                                        
                                    ],
                                    'name' => 'Animate CSS'
                                ]
                            ],
                            'javascript' => [
                                
                            ]
                        ],
                        'id' => 'assets-5424'
                    ],
                    1 => [
                        'type' => 'frameworks',
                        'title' => 'JavaScript Frameworks',
                        'attributes' => [
                            'enabled' => '1',
                            'jquery' => [
                                'enabled' => '1',
                                'ui_core' => '1',
                                'ui_sortable' => '0'
                            ],
                            'bootstrap' => [
                                'enabled' => '0'
                            ],
                            'mootools' => [
                                'enabled' => '0',
                                'more' => '0'
                            ]
                        ],
                        'id' => 'frameworks-3048'
                    ]
                ]
            ]
        ],
        'pages' => [
            'blog_list' => [
                'header' => [
                    'child_type' => 'blog_item',
                    'content' => [
                        'items' => '@self.children',
                        'leading' => 0,
                        'columns' => 2,
                        'limit' => 5,
                        'order' => [
                            'by' => 'date',
                            'dir' => 'desc'
                        ],
                        'show_date' => 0,
                        'pagination' => 1,
                        'url_taxonomy_filters' => 1
                    ]
                ]
            ],
            'modular' => [
                'features' => [
                    'name' => 'modular/features',
                    'header' => [
                        'template' => 'modular/features'
                    ]
                ],
                'showcase' => [
                    'name' => 'modular/showcase',
                    'header' => [
                        'template' => 'modular/showcase',
                        'buttons' => [
                            'primary' => 1
                        ]
                    ]
                ],
                'text' => [
                    'name' => 'modular/text',
                    'header' => [
                        'template' => 'modular/text',
                        'image_align' => 'left'
                    ]
                ]
            ]
        ],
        'styles' => [
            'above' => [
                'background' => '#ffffff',
                'text-color' => '#151515'
            ],
            'accent' => [
                'color-1' => '#f9632d',
                'color-2' => '#21c2d4'
            ],
            'base' => [
                'background' => '#ffffff',
                'text-color' => '#151515'
            ],
            'bottom' => [
                'background' => '#ffffff',
                'text-color' => '#151515'
            ],
            'breakpoints' => [
                'large-desktop-container' => '75rem',
                'desktop-container' => '60rem',
                'tablet-container' => '48rem',
                'large-mobile-container' => '30rem',
                'mobile-menu-breakpoint' => '48rem'
            ],
            'copyright' => [
                'background' => '#2d2d2d',
                'text-color' => '#797979'
            ],
            'expanded' => [
                'background' => '#f9632d',
                'background-image' => 'gantry-media://backgrounds/expanded/img-01.jpg',
                'text-color' => '#ffffff'
            ],
            'extension' => [
                'background' => '#21c2d4',
                'text-color' => '#ffffff'
            ],
            'feature' => [
                'background' => '#ffffff',
                'text-color' => '#151515'
            ],
            'font' => [
                'family-default' => 'rubik, Helvetica, Tahoma, Geneva, Arial, sans-serif',
                'family-title' => 'rubik, Helvetica, Tahoma, Geneva, Arial, sans-serif',
                'family-promo' => 'rubik, Helvetica, Tahoma, Geneva, Arial, sans-serif',
                'family-subpromo' => 'rubik, Helvetica, Tahoma, Geneva, Arial, sans-serif'
            ],
            'footer' => [
                'background' => '#ffffff',
                'text-color' => '#151515'
            ],
            'header' => [
                'background' => '#21c2d4',
                'text-color' => '#ffffff'
            ],
            'main' => [
                'background' => '#ffffff',
                'text-color' => '#151515'
            ],
            'menu' => [
                'col-width' => '200px',
                'animation' => 'g-fade'
            ],
            'menustyle' => [
                'text-color' => '#151515',
                'text-color-active' => '#151515',
                'active-background' => '#f9632d',
                'sublevel-text-color' => 'rgba(255, 255, 255, 0.8)',
                'sublevel-text-color-active' => '#ffffff',
                'sublevel-background' => 'rgba(0, 0, 0, 0.5)'
            ],
            'navigation' => [
                'background' => '#ffffff',
                'text-color' => '#151515'
            ],
            'offcanvas' => [
                'background' => '#000000',
                'text-color' => '#87888e',
                'toggle-color' => '#87888e',
                'width' => '10rem',
                'toggle-visibility' => 1
            ],
            'showcase' => [
                'background' => '#f9632d',
                'text-color' => '#ffffff'
            ],
            'slideshow' => [
                'background' => '#ffffff',
                'background-image' => 'gantry-media://backgrounds/slideshow/img-01.jpg',
                'text-color' => '#151515'
            ],
            'top' => [
                'background' => '#21c2d4',
                'text-color' => '#ffffff'
            ],
            'utility' => [
                'background' => '#21c2d4',
                'text-color' => '#ffffff'
            ],
            'preset1' => [
                'image' => 'gantry-admin://images/preset1.png',
                'description' => 'Preset 1',
                'colors' => [
                    0 => '#f9632d',
                    1 => '#222222',
                    2 => '#21c2d4'
                ],
                'styles' => [
                    'base' => [
                        'background' => '#ffffff',
                        'text-color' => '#151515'
                    ],
                    'accent' => [
                        'color-1' => '#f9632d',
                        'color-2' => '#21c2d4'
                    ],
                    'menustyle' => [
                        'text-color' => '#151515',
                        'text-color-active' => '#151515',
                        'active-background' => '#f9632d',
                        'sublevel-text-color' => 'rgba(255, 255, 255, 0.8)',
                        'sublevel-text-color-active' => '#ffffff',
                        'sublevel-background' => 'rgba(0, 0, 0, 0.5)'
                    ],
                    'font' => [
                        'family-default' => 'rubik, Helvetica, Tahoma, Geneva, Arial, sans-serif',
                        'family-title' => 'rubik, Helvetica, Tahoma, Geneva, Arial, sans-serif',
                        'family-promo' => 'rubik, Helvetica, Tahoma, Geneva, Arial, sans-serif',
                        'family-subpromo' => 'rubik, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                    ],
                    'top' => [
                        'background' => '#21c2d4',
                        'text-color' => '#ffffff'
                    ],
                    'navigation' => [
                        'background' => '#ffffff',
                        'text-color' => '#151515'
                    ],
                    'slideshow' => [
                        'background' => '#ffffff',
                        'background-image' => 'gantry-media://backgrounds/slideshow/img-01.jpg',
                        'text-color' => '#151515'
                    ],
                    'header' => [
                        'background' => '#21c2d4',
                        'text-color' => '#ffffff'
                    ],
                    'above' => [
                        'background' => '#ffffff',
                        'text-color' => '#151515'
                    ],
                    'showcase' => [
                        'background' => '#f9632d',
                        'text-color' => '#ffffff'
                    ],
                    'utility' => [
                        'background' => '#21c2d4',
                        'text-color' => '#ffffff'
                    ],
                    'feature' => [
                        'background' => '#ffffff',
                        'text-color' => '#151515'
                    ],
                    'main' => [
                        'background' => '#ffffff',
                        'text-color' => '#151515'
                    ],
                    'expanded' => [
                        'background' => '#f9632d',
                        'background-image' => 'gantry-media://backgrounds/expanded/img-01.jpg',
                        'text-color' => '#ffffff'
                    ],
                    'extension' => [
                        'background' => '#21c2d4',
                        'text-color' => '#ffffff'
                    ],
                    'bottom' => [
                        'background' => '#ffffff',
                        'text-color' => '#151515'
                    ],
                    'footer' => [
                        'background' => '#ffffff',
                        'text-color' => '#151515'
                    ],
                    'copyright' => [
                        'background' => '#2d2d2d',
                        'text-color' => '#797979'
                    ],
                    'offcanvas' => [
                        'background' => '#000000',
                        'text-color' => '#87888e',
                        'toggle-color' => '#87888e'
                    ],
                    'breakpoints' => [
                        'large-desktop-container' => '75rem',
                        'desktop-container' => '60rem',
                        'tablet-container' => '48rem',
                        'large-mobile-container' => '30rem',
                        'mobile-menu-breakpoint' => '48rem'
                    ]
                ]
            ]
        ],
        'particles' => [
            'analytics' => [
                'enabled' => true,
                'ua' => [
                    'anonym' => false,
                    'ssl' => false,
                    'debug' => false
                ]
            ],
            'assets' => [
                'enabled' => true,
                'priority' => 0
            ],
            'branding' => [
                'enabled' => '1',
                'content' => '&copy; 2016 by <a href="http://www.rockettheme.com/" title="RocketTheme" class="g-powered-by">Rockettheme</a>. All rights reserved.',
                'css' => [
                    'class' => 'g-branding'
                ]
            ],
            'content' => [
                'enabled' => true
            ],
            'contentarray' => [
                'enabled' => true,
                'article' => [
                    'limit' => [
                        'total' => 2,
                        'columns' => 2,
                        'start' => 0
                    ],
                    'sort' => [
                        'orderby' => 'default',
                        'ordering' => 'asc'
                    ],
                    'display' => [
                        'image' => [
                            'enabled' => 'intro'
                        ],
                        'text' => [
                            'type' => 'intro',
                            'limit' => '',
                            'formatting' => 'text'
                        ],
                        'title' => [
                            'enabled' => 'show'
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'read_more' => [
                            'enabled' => 'show'
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'link'
                        ]
                    ]
                ]
            ],
            'copyright' => [
                'enabled' => '1',
                'date' => [
                    'start' => '2007',
                    'end' => 'now'
                ],
                'owner' => 'RocketTheme LLC',
                'link' => '',
                'target' => '_blank',
                'css' => [
                    'class' => ''
                ]
            ],
            'custom' => [
                'enabled' => true
            ],
            'date' => [
                'enabled' => true,
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l, F d, Y'
                ]
            ],
            'frameworks' => [
                'enabled' => true,
                'jquery' => [
                    'enabled' => 0,
                    'ui_core' => 0,
                    'ui_sortable' => 0
                ],
                'bootstrap2' => [
                    'enabled' => 0
                ],
                'bootstrap3' => [
                    'enabled' => 0
                ],
                'mootools' => [
                    'enabled' => 0,
                    'more' => 0
                ]
            ],
            'lightcase' => [
                'enabled' => true
            ],
            'login' => [
                'enabled' => true
            ],
            'logo' => [
                'enabled' => '1',
                'link' => true,
                'url' => '',
                'image' => '',
                'svg' => '<?xml version="1.0" encoding="UTF-8" standalone="no"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
<path id="logo" d="M14.502,7.567c-1.046,0 -1.891,0.844 -1.891,1.891c0,1.047 0.845,1.892 1.891,1.892c1.047,0 1.892,-0.845 1.892,-1.892c0,-1.047 -0.845,-1.891 -1.892,-1.891ZM14.502,12.61c-1.046,0 -1.891,0.846 -1.891,1.893c0,1.046 0.845,1.891 1.891,1.891c1.047,0 1.892,-0.845 1.892,-1.891c0,-1.047 -0.845,-1.893 -1.892,-1.893ZM9.458,18.286c-0.694,0 -1.261,0.567 -1.261,1.261c0,0.693 0.567,1.261 1.261,1.261c0.694,0 1.261,-0.568 1.261,-1.261c0,-0.694 -0.567,-1.261 -1.261,-1.261ZM9.458,7.567c-1.047,0 -1.892,0.844 -1.892,1.891c0,1.047 0.845,1.892 1.892,1.892c1.047,0 1.892,-0.845 1.892,-1.892c0,-1.047 -0.845,-1.891 -1.892,-1.891ZM14.502,22.7c-0.353,0 -0.63,0.277 -0.63,0.63c0,0.353 0.277,0.63 0.63,0.63c0.354,0 0.631,-0.277 0.631,-0.63c0,-0.353 -0.277,-0.63 -0.631,-0.63ZM14.502,18.286c-0.693,0 -1.261,0.567 -1.261,1.261c0,0.693 0.568,1.261 1.261,1.261c0.694,0 1.262,-0.568 1.262,-1.261c0,-0.694 -0.568,-1.261 -1.262,-1.261ZM23.33,13.872c-0.353,0 -0.63,0.277 -0.63,0.631c0,0.352 0.277,0.63 0.63,0.63c0.353,0 0.631,-0.278 0.631,-0.63c0,-0.354 -0.278,-0.631 -0.631,-0.631ZM19.547,3.153c-0.694,0 -1.261,0.567 -1.261,1.261c0,0.693 0.567,1.261 1.261,1.261c0.693,0 1.261,-0.568 1.261,-1.261c0,-0.694 -0.568,-1.261 -1.261,-1.261ZM19.547,8.197c-0.694,0 -1.261,0.567 -1.261,1.261c0,0.694 0.567,1.261 1.261,1.261c0.693,0 1.261,-0.567 1.261,-1.261c0,-0.694 -0.568,-1.261 -1.261,-1.261ZM19.547,18.286c-0.694,0 -1.261,0.567 -1.261,1.261c0,0.693 0.567,1.261 1.261,1.261c0.693,0 1.261,-0.568 1.261,-1.261c0,-0.694 -0.568,-1.261 -1.261,-1.261ZM19.547,13.241c-0.694,0 -1.261,0.568 -1.261,1.262c0,0.693 0.567,1.261 1.261,1.261c0.693,0 1.261,-0.568 1.261,-1.261c0,-0.694 -0.568,-1.262 -1.261,-1.262ZM9.458,12.61c-1.047,0 -1.892,0.846 -1.892,1.893c0,1.046 0.845,1.891 1.892,1.891c1.047,0 1.892,-0.845 1.892,-1.891c0,-1.047 -0.845,-1.893 -1.892,-1.893ZM9.458,5.675c0.694,0 1.261,-0.568 1.261,-1.261c0,-0.694 -0.567,-1.261 -1.261,-1.261c-0.694,0 -1.261,0.567 -1.261,1.261c0,0.693 0.567,1.261 1.261,1.261ZM9.458,1.261c0.353,0 0.631,-0.277 0.631,-0.63c0,-0.354 -0.278,-0.631 -0.631,-0.631c-0.353,0 -0.63,0.277 -0.63,0.631c0,0.353 0.277,0.63 0.63,0.63ZM9.458,22.7c-0.353,0 -0.63,0.277 -0.63,0.63c0,0.353 0.277,0.63 0.63,0.63c0.353,0 0.631,-0.277 0.631,-0.63c0,-0.353 -0.278,-0.63 -0.631,-0.63ZM0.631,13.872c-0.354,0 -0.631,0.277 -0.631,0.631c0,0.352 0.277,0.63 0.631,0.63c0.353,0 0.63,-0.278 0.63,-0.63c0,-0.354 -0.277,-0.631 -0.63,-0.631ZM14.502,1.261c0.354,0 0.631,-0.277 0.631,-0.63c0,-0.354 -0.277,-0.631 -0.631,-0.631c-0.353,0 -0.63,0.277 -0.63,0.631c0,0.353 0.277,0.63 0.63,0.63ZM14.502,5.675c0.694,0 1.262,-0.568 1.262,-1.261c0,-0.694 -0.568,-1.261 -1.262,-1.261c-0.693,0 -1.261,0.567 -1.261,1.261c0,0.693 0.568,1.261 1.261,1.261ZM23.33,10.089c0.353,0 0.631,-0.277 0.631,-0.631c0,-0.353 -0.278,-0.63 -0.631,-0.63c-0.353,0 -0.63,0.277 -0.63,0.63c0,0.354 0.277,0.631 0.63,0.631ZM4.414,3.153c-0.694,0 -1.261,0.567 -1.261,1.261c0,0.693 0.567,1.261 1.261,1.261c0.693,0 1.261,-0.568 1.261,-1.261c0,-0.694 -0.568,-1.261 -1.261,-1.261ZM0.631,8.828c-0.354,0 -0.631,0.277 -0.631,0.63c0,0.354 0.277,0.631 0.631,0.631c0.353,0 0.63,-0.277 0.63,-0.631c0,-0.353 -0.277,-0.63 -0.63,-0.63ZM4.414,8.197c-0.694,0 -1.261,0.567 -1.261,1.261c0,0.694 0.567,1.261 1.261,1.261c0.693,0 1.261,-0.567 1.261,-1.261c0,-0.694 -0.568,-1.261 -1.261,-1.261ZM4.414,18.286c-0.694,0 -1.261,0.567 -1.261,1.261c0,0.693 0.567,1.261 1.261,1.261c0.693,0 1.261,-0.568 1.261,-1.261c0,-0.694 -0.568,-1.261 -1.261,-1.261ZM4.414,13.241c-0.694,0 -1.261,0.568 -1.261,1.262c0,0.693 0.567,1.261 1.261,1.261c0.693,0 1.261,-0.568 1.261,-1.261c0,-0.694 -0.568,-1.262 -1.261,-1.262Z"/></svg>',
                'text' => 'Protean',
                'class' => 'g-logo'
            ],
            'menu' => [
                'enabled' => true,
                'menu' => '',
                'base' => '/',
                'startLevel' => 1,
                'maxLevels' => 0,
                'renderTitles' => 0,
                'hoverExpand' => 1,
                'mobileTarget' => 0
            ],
            'messages' => [
                'enabled' => true
            ],
            'mobile-menu' => [
                'enabled' => true
            ],
            'position' => [
                'enabled' => true
            ],
            'search' => [
                'enabled' => true
            ],
            'social' => [
                'enabled' => '1',
                'css' => [
                    'class' => ''
                ],
                'target' => '_blank',
                'display' => 'both',
                'title' => '',
                'items' => [
                    0 => [
                        'icon' => 'fa fa-facebook-square fa-fw',
                        'text' => '',
                        'link' => '#',
                        'name' => 'Facebook'
                    ],
                    1 => [
                        'icon' => 'fa fa-twitter-square fa-fw',
                        'text' => '',
                        'link' => 'http://www.twitter.com/rockettheme',
                        'name' => 'Twitter'
                    ]
                ]
            ],
            'spacer' => [
                'enabled' => true
            ],
            'totop' => [
                'enabled' => '1',
                'css' => [
                    'class' => 'g-totop'
                ],
                'icon' => 'fa fa-angle-double-up fa-fw',
                'content' => 'To Top'
            ],
            'accordion' => [
                'enabled' => true
            ],
            'blockcontent' => [
                'enabled' => true,
                'linktarget' => '_self'
            ],
            'contenttabs' => [
                'enabled' => true,
                'animation' => 'slide'
            ],
            'eventlist' => [
                'enabled' => true
            ],
            'flipster' => [
                'enabled' => true,
                'start' => 'center',
                'fadein' => 400,
                'loop' => 'disabled',
                'autoplay' => false,
                'pauseonhover' => 'enabled',
                'style' => 'coverflow',
                'spacing' => -0.59999999999999998,
                'click' => 'enabled',
                'keyboard' => 'enabled',
                'scrollwheel' => 'disabled',
                'touch' => 'enabled'
            ],
            'gridcontent' => [
                'enabled' => true,
                'readmoreclass' => 'button-3',
                'cols' => 'g-gridcontent-2cols'
            ],
            'gridstatistic' => [
                'enabled' => true,
                'readmoreclass' => 'button-3',
                'cols' => 'g-gridstatistic-2cols'
            ],
            'imagegrid' => [
                'enabled' => true,
                'cols' => 'g-imagegrid-2cols',
                'layout' => 'g-imagegrid-standard'
            ],
            'infolist' => [
                'enabled' => true,
                'cols' => 'g-1cols'
            ],
            'newsletter' => [
                'enabled' => true,
                'width' => 'g-newsletter-fullwidth',
                'layout' => 'g-newsletter-stack-compact',
                'style' => 'g-newsletter-square'
            ],
            'owlcarousel' => [
                'enabled' => true,
                'presets' => 'disabled',
                'displayitems' => 1,
                'layout' => 'standard',
                'width' => 'g-owlcarousel-fullwidth',
                'animateIn' => 'fadeIn',
                'animateOut' => 'fadeOut',
                'nav' => 'enabled',
                'dots' => 'disabled',
                'loop' => 'enabled',
                'videoloop' => 'enabled',
                'videoautoplay' => 'disabled',
                'autoplay' => 'disabled',
                'pauseOnHover' => 'enabled',
                'buttontarget' => '_self',
                'videosource' => '_self'
            ],
            'pricingtable' => [
                'enabled' => true,
                'columns' => 'g-pricingtable-3-col'
            ],
            'simplecontent' => [
                'enabled' => true
            ],
            'simplecounter' => [
                'enabled' => true,
                'month' => 0
            ],
            'simplemenu' => [
                'enabled' => true
            ],
            'simpleweather' => [
                'enabled' => true,
                'units' => 'c',
                'location' => 'Austin, TX',
                'show_location' => 'disabled'
            ],
            'video' => [
                'enabled' => true
            ],
            'videogrid' => [
                'enabled' => true,
                'cols' => 'g-videogrid-2cols',
                'layout' => 'g-videogrid-standard'
            ]
        ],
        'index' => [
            'name' => 'default',
            'timestamp' => 0,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1474981292
            ],
            'positions' => [
                'slideshow-a' => 'Slideshow A',
                'header-a' => 'Header A',
                'header-b' => 'Header B',
                'above-a' => 'Above A',
                'showcase-a' => 'Showcase A',
                'utility-a' => 'Utility A',
                'feature-a' => 'Feature A',
                'sidebar-a' => 'Sidebar A',
                'mainbar-a' => 'MainBar A',
                'aside-a' => 'Aside A',
                'expanded-a' => 'Expanded A',
                'expanded-b' => 'Expanded B',
                'extension-a' => 'Extension A',
                'bottom-a' => 'Bottom A',
                'footer-a' => 'Footer A'
            ],
            'sections' => [
                'top' => 'Top',
                'navigation' => 'Navigation',
                'slideshow' => 'Slideshow',
                'above' => 'Above',
                'showcase' => 'Showcase',
                'utility' => 'Utility',
                'feature' => 'Feature',
                'expanded' => 'Expanded',
                'extension' => 'Extension',
                'bottom' => 'Bottom',
                'copyright' => 'Copyright',
                'header' => 'Header',
                'sidebar' => 'Sidebar',
                'aside' => 'Aside',
                'mainbar' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'messages' => [
                    'system-messages-9828' => 'System Messages'
                ],
                'logo' => [
                    'logo-5992' => 'Logo'
                ],
                'menu' => [
                    'menu-4196' => 'Menu'
                ],
                'position' => [
                    'position-position-6661' => 'Slideshow A',
                    'position-position-7051' => 'Header A',
                    'position-position-2504' => 'Header B',
                    'position-position-3264' => 'Above A',
                    'position-position-9435' => 'Showcase A',
                    'position-position-5239' => 'Utility A',
                    'position-position-7980' => 'Feature A',
                    'position-position-8538' => 'Sidebar A',
                    'position-position-8547' => 'MainBar A',
                    'position-position-8807' => 'Aside A',
                    'position-position-8124' => 'Expanded A',
                    'position-position-8346' => 'Expanded B',
                    'position-position-4800' => 'Extension A',
                    'position-position-3343' => 'Bottom A',
                    'position-position-6548' => 'Footer A'
                ],
                'content' => [
                    'system-content-1120' => 'Page Content'
                ],
                'simplemenu' => [
                    'simplemenu-6826' => 'Bottom Menu'
                ],
                'branding' => [
                    'branding-9192' => 'Branding'
                ],
                'social' => [
                    'social-4772' => 'Social'
                ],
                'mobile-menu' => [
                    'mobile-menu-7951' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1474981292
            ],
            'layout' => [
                '/top/' => [
                    0 => [
                        0 => 'system-messages-9828'
                    ]
                ],
                '/navigation/' => [
                    0 => [
                        0 => 'logo-5992 40',
                        1 => 'menu-4196 60'
                    ]
                ],
                '/slideshow/' => [
                    0 => [
                        0 => 'position-position-6661'
                    ]
                ],
                '/header/' => [
                    0 => [
                        0 => 'position-position-7051 50',
                        1 => 'position-position-2504 50'
                    ]
                ],
                '/above/' => [
                    0 => [
                        0 => 'position-position-3264'
                    ]
                ],
                '/showcase/' => [
                    0 => [
                        0 => 'position-position-9435'
                    ]
                ],
                '/utility/' => [
                    0 => [
                        0 => 'position-position-5239'
                    ]
                ],
                '/feature/' => [
                    0 => [
                        0 => 'position-position-7980'
                    ]
                ],
                '/container-main/' => [
                    0 => [
                        0 => [
                            'sidebar 20' => [
                                0 => [
                                    0 => 'position-position-8538'
                                ]
                            ]
                        ],
                        1 => [
                            'mainbar 60' => [
                                0 => [
                                    0 => 'position-position-8547'
                                ],
                                1 => [
                                    0 => 'system-content-1120'
                                ]
                            ]
                        ],
                        2 => [
                            'aside 20' => [
                                0 => [
                                    0 => 'position-position-8807'
                                ]
                            ]
                        ]
                    ]
                ],
                '/expanded/' => [
                    0 => [
                        0 => 'position-position-8124 50',
                        1 => 'position-position-8346 50'
                    ]
                ],
                '/extension/' => [
                    0 => [
                        0 => 'position-position-4800'
                    ]
                ],
                '/bottom/' => [
                    0 => [
                        0 => 'position-position-3343'
                    ]
                ],
                '/footer/' => [
                    0 => [
                        0 => 'position-position-6548'
                    ]
                ],
                '/copyright/' => [
                    0 => [
                        0 => 'simplemenu-6826 50',
                        1 => 'branding-9192 35',
                        2 => 'social-4772 15'
                    ]
                ],
                'offcanvas' => [
                    0 => [
                        0 => 'mobile-menu-7951'
                    ]
                ]
            ],
            'structure' => [
                'top' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '3',
                        'class' => ''
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '3',
                        'class' => ''
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
                    'attributes' => [
                        'class' => ''
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
                    'attributes' => [
                        'class' => ''
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
                    'attributes' => [
                        'boxed' => '3',
                        'class' => 'fp-copyright'
                    ]
                ],
                'offcanvas' => [
                    'attributes' => [
                        'swipe' => '0'
                    ]
                ]
            ],
            'content' => [
                'logo-5992' => [
                    'block' => [
                        'variations' => 'box6 nomarginall center'
                    ]
                ],
                'menu-4196' => [
                    'block' => [
                        'variations' => 'box1 nomarginall align-left'
                    ]
                ],
                'position-position-6661' => [
                    'title' => 'Slideshow A',
                    'attributes' => [
                        'key' => 'slideshow-a'
                    ],
                    'block' => [
                        'class' => 'title-white'
                    ]
                ],
                'position-position-7051' => [
                    'title' => 'Header A',
                    'attributes' => [
                        'key' => 'header-a'
                    ]
                ],
                'position-position-2504' => [
                    'title' => 'Header B',
                    'attributes' => [
                        'key' => 'header-b'
                    ]
                ],
                'position-position-3264' => [
                    'title' => 'Above A',
                    'attributes' => [
                        'key' => 'above-a'
                    ]
                ],
                'position-position-9435' => [
                    'title' => 'Showcase A',
                    'attributes' => [
                        'key' => 'showcase-a'
                    ],
                    'block' => [
                        'variations' => 'box5'
                    ]
                ],
                'position-position-5239' => [
                    'title' => 'Utility A',
                    'attributes' => [
                        'key' => 'utility-a'
                    ]
                ],
                'position-position-7980' => [
                    'title' => 'Feature A',
                    'attributes' => [
                        'key' => 'feature-a'
                    ]
                ],
                'position-position-8538' => [
                    'title' => 'Sidebar A',
                    'attributes' => [
                        'key' => 'sidebar-a'
                    ]
                ],
                'position-position-8547' => [
                    'title' => 'MainBar A',
                    'attributes' => [
                        'key' => 'mainbar-a'
                    ]
                ],
                'position-position-8807' => [
                    'title' => 'Aside A',
                    'attributes' => [
                        'key' => 'aside-a'
                    ]
                ],
                'position-position-8124' => [
                    'title' => 'Expanded A',
                    'attributes' => [
                        'key' => 'expanded-a'
                    ]
                ],
                'position-position-8346' => [
                    'title' => 'Expanded B',
                    'attributes' => [
                        'key' => 'expanded-b'
                    ]
                ],
                'position-position-4800' => [
                    'title' => 'Extension A',
                    'attributes' => [
                        'key' => 'extension-a'
                    ]
                ],
                'position-position-3343' => [
                    'title' => 'Bottom A',
                    'attributes' => [
                        'key' => 'bottom-a'
                    ]
                ],
                'position-position-6548' => [
                    'title' => 'Footer A',
                    'attributes' => [
                        'key' => 'footer-a'
                    ]
                ],
                'simplemenu-6826' => [
                    'title' => 'Bottom Menu',
                    'attributes' => [
                        'title' => '',
                        'menus' => [
                            0 => [
                                'items' => [
                                    0 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Fullwidth'
                                    ],
                                    1 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Left Sidebar'
                                    ],
                                    2 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Right Sidebar'
                                    ],
                                    3 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Two Sidebars'
                                    ],
                                    4 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Rows & Columns'
                                    ]
                                ],
                                'title' => 'Layouts'
                            ],
                            1 => [
                                'items' => [
                                    0 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Demo'
                                    ],
                                    1 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Guides'
                                    ],
                                    2 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Details'
                                    ],
                                    3 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Forums'
                                    ]
                                ],
                                'title' => 'Links'
                            ],
                            2 => [
                                'items' => [
                                    0 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'About Us'
                                    ],
                                    1 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Pricing'
                                    ],
                                    2 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Portfolio'
                                    ],
                                    3 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Contact'
                                    ]
                                ],
                                'title' => 'Pages'
                            ]
                        ]
                    ],
                    'block' => [
                        'class' => 'fp-copyright-menu',
                        'variations' => 'box1 nomarginall equal-height'
                    ]
                ],
                'branding-9192' => [
                    'attributes' => [
                        'content' => '&copy; 2016 by <a href="http://www.rockettheme.com/" title="RocketTheme" class="g-powered-by">RocketTheme</a>. All rights reserved.'
                    ]
                ],
                'social-4772' => [
                    'attributes' => [
                        'items' => [
                            0 => [
                                'icon' => 'fa fa-facebook-square fa-fw',
                                'text' => '',
                                'link' => 'https://www.facebook.com/RocketTheme/',
                                'name' => 'Facebook'
                            ],
                            1 => [
                                'icon' => 'fa fa-twitter-square fa-fw',
                                'text' => '',
                                'link' => 'http://www.twitter.com/rockettheme',
                                'name' => 'Twitter'
                            ]
                        ]
                    ],
                    'block' => [
                        'class' => 'nopaddingleft',
                        'variations' => 'align-left'
                    ]
                ]
            ]
        ],
        'menu' => [
            'enabled' => '1',
            'base' => '/',
            'menu' => 'mainmenu',
            'startLevel' => '1',
            'endLevel' => '0',
            'mobileTarget' => '0'
        ]
    ]
];
