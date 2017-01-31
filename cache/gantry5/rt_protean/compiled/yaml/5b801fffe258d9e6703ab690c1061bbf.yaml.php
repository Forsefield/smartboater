<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/smartboater.ca/httpdocs/user/data/gantry5/themes/rt_protean/config/home/layout.yaml',
    'modified' => 1484941889,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'home_-_particles',
            'timestamp' => 1474582138
        ],
        'layout' => [
            'top' => [
                
            ],
            '/navigation/' => [
                0 => [
                    0 => 'logo-5992 20',
                    1 => 'menu-4196 80'
                ]
            ],
            '/slideshow/' => [
                0 => [
                    0 => 'owlcarousel-4880'
                ]
            ],
            '/above/' => [
                0 => [
                    0 => 'simplecontent-6075'
                ],
                1 => [
                    0 => 'custom-7596'
                ]
            ],
            '/feature/' => [
                0 => [
                    0 => 'simplecontent-1408'
                ],
                1 => [
                    0 => 'contenttabs-6020'
                ]
            ],
            '/expanded/' => [
                0 => [
                    0 => 'system-content-4995'
                ],
                1 => [
                    0 => 'infolist-8313'
                ]
            ],
            '/extension/' => [
                0 => [
                    0 => 'owlcarousel-8199'
                ]
            ],
            '/bottom/' => [
                0 => [
                    0 => 'infolist-6050'
                ]
            ],
            '/footer/' => [
                0 => [
                    0 => 'imagegrid-3579'
                ],
                1 => [
                    0 => 'simplecontent-9567'
                ],
                2 => [
                    0 => 'newsletter-3789'
                ]
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
                'attributes' => [
                    'boxed' => '3',
                    'class' => 'fp-navigation'
                ]
            ],
            'slideshow' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => 'g-nobackground'
                ]
            ],
            'above' => [
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
                    'class' => 'fp-bottom'
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
            'logo-5992' => [
                'attributes' => [
                    'image' => 'gantry-media://smartboater_logo.png',
                    'text' => 'Smart Boater'
                ],
                'block' => [
                    'variations' => 'align-right'
                ]
            ],
            'menu-4196' => [
                'block' => [
                    'variations' => 'align-right'
                ]
            ],
            'owlcarousel-4880' => [
                'title' => 'Slideshow',
                'attributes' => [
                    'class' => '',
                    'presets' => 'disabled',
                    'displayitems' => '1',
                    'title' => '',
                    'description' => '',
                    'layout' => 'standard',
                    'width' => 'g-owlcarousel-fullwidth',
                    'animateIn' => 'fadeIn',
                    'animateOut' => 'fadeOut',
                    'nav' => 'disabled',
                    'prevText' => '',
                    'nextText' => '',
                    'dots' => 'disabled',
                    'loop' => 'disabled',
                    'videoloop' => 'enabled',
                    'videoautoplay' => 'disabled',
                    'autoplay' => 'disabled',
                    'autoplaySpeed' => '',
                    'pauseOnHover' => 'enabled',
                    'items' => [
                        0 => [
                            'image' => 'gantry-media://banner_paddler.jpg',
                            'icon' => 'fa fa-anchor',
                            'title' => 'Paddler',
                            'subtitle' => '',
                            'author' => '',
                            'authorimage' => '',
                            'desc' => 'Learn about rules and equipment specific to Canoes and Kayaks.',
                            'link' => '/pleasure-craft/paddler',
                            'linktext' => 'Learn More',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'videosource' => 'external',
                            'video' => '',
                            'videolocal' => '',
                            'videothumb' => '',
                            'name' => 'Paddler'
                        ],
                        1 => [
                            'image' => 'gantry-media://banner_powerboat.jpg',
                            'showcaseimages' => [
                                
                            ],
                            'icon' => 'fa fa-ship',
                            'title' => 'Power Boat',
                            'subtitle' => '',
                            'author' => '',
                            'authorimage' => '',
                            'desc' => 'Learn about rules and equipment specific to Power Boats up to 24m in length.',
                            'link' => '',
                            'linktext' => 'Learn More',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'videosource' => 'external',
                            'video' => '',
                            'videolocal' => '',
                            'videothumb' => '',
                            'name' => 'Power Boat'
                        ],
                        2 => [
                            'image' => 'gantry-media://banner_sail.jpg',
                            'showcaseimages' => [
                                
                            ],
                            'icon' => 'fa fa-life-saver',
                            'title' => 'Sail',
                            'subtitle' => '',
                            'author' => '',
                            'authorimage' => '',
                            'desc' => 'Learn about rules and equipment specific to Sailboats.',
                            'link' => '',
                            'linktext' => 'Learn More',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'videosource' => 'external',
                            'video' => '',
                            'videolocal' => '',
                            'videothumb' => '',
                            'name' => 'Sail'
                        ],
                        3 => [
                            'image' => 'gantry-media://banner_pwc.jpg',
                            'showcaseimages' => [
                                
                            ],
                            'icon' => 'fa fa-anchor',
                            'title' => 'PWC',
                            'subtitle' => '',
                            'author' => '',
                            'authorimage' => '',
                            'desc' => 'Learn about rules and equipment specific to Personal Watercraft.',
                            'link' => '',
                            'linktext' => 'Learn More',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'videosource' => 'external',
                            'video' => '',
                            'videolocal' => '',
                            'videothumb' => '',
                            'name' => 'PWC'
                        ],
                        4 => [
                            'image' => 'gantry-media://banner_angler.jpg',
                            'showcaseimages' => [
                                
                            ],
                            'icon' => 'fa fa-ship',
                            'title' => 'Angler',
                            'subtitle' => '',
                            'author' => '',
                            'authorimage' => '',
                            'desc' => 'Learn about rules and equipment specific to Anglers in any type of vessel.',
                            'link' => '',
                            'linktext' => 'Learn More',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'videosource' => 'external',
                            'video' => '',
                            'videolocal' => '',
                            'videothumb' => '',
                            'name' => 'Angler'
                        ]
                    ]
                ],
                'block' => [
                    'variations' => 'nomarginall nopaddingall'
                ]
            ],
            'simplecontent-6075' => [
                'title' => 'The best place to share great websites',
                'attributes' => [
                    'enabled' => 0,
                    'class' => '',
                    'title' => '',
                    'items' => [
                        0 => [
                            'layout' => 'header',
                            'created_date' => '',
                            'content_title' => 'The best place to share great websites. <strong>Start Now</strong>',
                            'author' => '',
                            'leading_content' => '',
                            'main_content' => '',
                            'readmore_label' => '',
                            'readmore_link' => '',
                            'readmore_class' => '',
                            'readmore_target' => '_self',
                            'title' => 'Item 1'
                        ]
                    ]
                ],
                'block' => [
                    'variations' => 'center'
                ]
            ],
            'custom-7596' => [
                'title' => 'Latest News',
                'attributes' => [
                    'enabled' => 0,
                    'html' => '<div class="g-content-array">
    <div class="g-grid">
        <div class="g-block">
            <div class="g-content">
                <div class="g-array-item">                                                        
                    <div class="g-array-item-title">
                        <h3 class="g-item-title">
                            <a href="/category/blog/customize-content-quickly-in-layout-manager">
                                Protean template suited for multiple websites
                            </a>
                        </h3>
                    </div>
                    
                    <div class="g-array-item-details">
                        <span class="g-array-item-date">
                            <i class="fa fa-clock-o"></i>Thursday, September 01, 2016
                        </span>
                        <span class="g-array-item-category">
                            <i class="fa fa-folder-open"></i>Blog
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
                
    <div class="g-grid">
    
        <div class="g-block">
            <div class="g-content">
                <div class="g-array-item">                                                        
                    <div class="g-array-item-title">
                        <h3 class="g-item-title">
                            <a href="/category/blog/exclusive-slider-carousel-and-flipster-particles">
                                Exclusive Slider Carousel and Flipster particles
                            </a>
                        </h3>
                    </div>
                    
                    <div class="g-array-item-details">
                        <span class="g-array-item-date">
                            <i class="fa fa-clock-o"></i>Friday, September 02, 2016
                        </span>
                        <span class="g-array-item-category">
                            <i class="fa fa-folder-open"></i>Blog
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
                
    <div class="g-grid">
        <div class="g-block">
            <div class="g-content">
                <div class="g-array-item">                                                            
                    <div class="g-array-item-title">
                        <h3 class="g-item-title">
                            <a href="/category/blog/exclusive-slider-carousel-and-flipster-particles">
                                Customize content quickly in Layout Manager
                            </a>
                        </h3>
                    </div>
                    
                    <div class="g-array-item-details">
                        <span class="g-array-item-date">
                            <i class="fa fa-clock-o"></i>Saturday, September 03, 2016
                        </span>
                        <span class="g-array-item-category">
                            <i class="fa fa-folder-open"></i>Blog
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>'
                ],
                'block' => [
                    'class' => 'fp-above-contentarray'
                ]
            ],
            'simplecontent-1408' => [
                'title' => 'Our best case studies…',
                'attributes' => [
                    'enabled' => 0,
                    'class' => '',
                    'title' => '',
                    'items' => [
                        0 => [
                            'layout' => 'header',
                            'created_date' => '',
                            'content_title' => 'Our best case studies…',
                            'author' => '',
                            'leading_content' => '',
                            'main_content' => '',
                            'readmore_label' => '',
                            'readmore_link' => '',
                            'readmore_class' => '',
                            'readmore_target' => '_self',
                            'title' => 'Our best case studies…'
                        ]
                    ]
                ],
                'block' => [
                    'variations' => 'center'
                ]
            ],
            'contenttabs-6020' => [
                'title' => 'Content Tabs',
                'attributes' => [
                    'enabled' => 0,
                    'animation' => 'right',
                    'duration' => '',
                    'items' => [
                        0 => [
                            'tabname' => 'Inheritance',
                            'blocks' => [
                                0 => [
                                    'title' => 'Inherit particles / sections from any outline',
                                    'description' => 'You can now inherit particles, attributes, and sections from one outline to another.',
                                    'accent' => 'default',
                                    'name' => 'Item 1'
                                ],
                                1 => [
                                    'title' => '+G5',
                                    'description' => 'One Epic
Framework',
                                    'accent' => 'accent1',
                                    'name' => 'Item 2'
                                ],
                                2 => [
                                    'title' => '19',
                                    'description' => 'Modern
Templates',
                                    'accent' => 'accent2',
                                    'name' => 'Item 3'
                                ]
                            ],
                            'name' => 'Inheritance'
                        ],
                        1 => [
                            'tabname' => 'Responsive',
                            'blocks' => [
                                0 => [
                                    'title' => 'A mobile responsive, mobile friendly experience',
                                    'description' => 'Protean adapts to the viewing device, whether a smartphone, tablet, or laptop.',
                                    'accent' => 'default',
                                    'name' => 'Item 1'
                                ],
                                1 => [
                                    'title' => '+G5',
                                    'description' => 'One Epic
Framework',
                                    'accent' => 'accent1',
                                    'name' => 'Item 2'
                                ],
                                2 => [
                                    'title' => '19',
                                    'description' => 'Modern
Templates',
                                    'accent' => 'accent2',
                                    'name' => 'Item 3'
                                ]
                            ],
                            'name' => 'Responsive'
                        ],
                        2 => [
                            'tabname' => 'Layout Manager',
                            'blocks' => [
                                0 => [
                                    'title' => 'A most powerful and versatile Layout manager',
                                    'description' => 'The Layout Manager features an infinitely simple drag-and-drop interface.',
                                    'accent' => 'default',
                                    'name' => 'Item 1'
                                ],
                                1 => [
                                    'title' => '+G5',
                                    'description' => 'One Epic
Framework',
                                    'accent' => 'accent1',
                                    'name' => 'Item 2'
                                ],
                                2 => [
                                    'title' => '19',
                                    'description' => 'Modern
Templates',
                                    'accent' => 'accent2',
                                    'name' => 'Item 3'
                                ]
                            ],
                            'name' => 'Layout Manager'
                        ],
                        3 => [
                            'tabname' => 'Particles',
                            'blocks' => [
                                0 => [
                                    'title' => 'Particles make creating content quite simple',
                                    'description' => 'Protean comes with many powerful particles that you can use as building blocks.',
                                    'accent' => 'default',
                                    'name' => 'Item 1'
                                ],
                                1 => [
                                    'title' => '+G5',
                                    'description' => 'One Epic
Framework',
                                    'accent' => 'accent1',
                                    'name' => 'Item 2'
                                ],
                                2 => [
                                    'title' => '19',
                                    'description' => 'Modern
Templates',
                                    'accent' => 'accent2',
                                    'name' => 'Item 3'
                                ]
                            ],
                            'name' => 'Particles'
                        ],
                        4 => [
                            'tabname' => 'Styling',
                            'blocks' => [
                                0 => [
                                    'title' => 'Style your content using a variety of settings',
                                    'description' => 'Choose from an array of preset style variations, each with extensive options.',
                                    'accent' => 'default',
                                    'name' => 'Item 1'
                                ],
                                1 => [
                                    'title' => '+G5',
                                    'description' => 'One Epic
Framework',
                                    'accent' => 'accent1',
                                    'name' => 'Item 2'
                                ],
                                2 => [
                                    'title' => '19',
                                    'description' => 'Modern
Templates',
                                    'accent' => 'accent2',
                                    'name' => 'Item 3'
                                ]
                            ],
                            'name' => 'Styling'
                        ]
                    ]
                ],
                'block' => [
                    'class' => 'fp-feature-contenttabs'
                ]
            ],
            'infolist-8313' => [
                'title' => 'Info List',
                'attributes' => [
                    'enabled' => 0,
                    'class' => '',
                    'title' => '',
                    'intro' => '',
                    'cols' => 'g-3cols',
                    'infolists' => [
                        0 => [
                            'icon' => 'fa fa-file-picture-o',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => '',
                            'tag' => '',
                            'subtag' => '',
                            'label' => 'Read the case study',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Customize several template elements with Style settings.'
                        ],
                        1 => [
                            'icon' => 'fa fa-camera-retro',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => '',
                            'tag' => '',
                            'subtag' => '',
                            'label' => 'Read the case study',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Particles operate as content <br/>blocks that form the frontend.'
                        ],
                        2 => [
                            'icon' => 'fa fa-bullseye',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => '',
                            'tag' => '',
                            'subtag' => '',
                            'label' => 'Read the case study',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Move, resize, and create <br/>with the Layout Manager.'
                        ]
                    ]
                ]
            ],
            'owlcarousel-8199' => [
                'title' => 'Testimonials',
                'attributes' => [
                    'enabled' => 0,
                    'class' => '',
                    'presets' => 'disabled',
                    'displayitems' => '1',
                    'title' => '',
                    'description' => '',
                    'layout' => 'testimonial',
                    'width' => 'g-owlcarousel-fullwidth',
                    'animateIn' => 'fadeIn',
                    'animateOut' => 'fadeOut',
                    'nav' => 'disabled',
                    'prevText' => '',
                    'nextText' => '',
                    'dots' => 'enabled',
                    'loop' => 'enabled',
                    'videoloop' => 'enabled',
                    'videoautoplay' => 'disabled',
                    'autoplay' => 'disabled',
                    'autoplaySpeed' => '',
                    'pauseOnHover' => 'enabled',
                    'items' => [
                        0 => [
                            'image' => '',
                            'icon' => 'fa fa-quote-left',
                            'title' => '',
                            'subtitle' => '',
                            'author' => '',
                            'authorimage' => '',
                            'desc' => 'Gantry 5\'s administrative interface has been completely rebuilt from the ground up to meet the needs of tomorrow\'s developer, today. The admin provides multiple options for styles, layout, particles, and more.',
                            'link' => '',
                            'linktext' => '',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'videosource' => 'external',
                            'video' => '',
                            'videolocal' => '',
                            'videothumb' => '',
                            'name' => 'Item 1'
                        ],
                        1 => [
                            'image' => '',
                            'icon' => 'fa fa-quote-left',
                            'title' => '',
                            'subtitle' => '',
                            'author' => '',
                            'authorimage' => '',
                            'desc' => 'Set up and configure page layouts with Gantry 5\'s new Layout Manager. Featuring drag-and-drop functionality that gives you the power to place content blocks, resize them, and configure their unique settings in seconds.',
                            'link' => '',
                            'linktext' => '',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'videosource' => 'external',
                            'video' => '',
                            'videolocal' => '',
                            'videothumb' => '',
                            'name' => 'Item 2'
                        ],
                        2 => [
                            'image' => '',
                            'icon' => 'fa fa-quote-left',
                            'title' => '',
                            'subtitle' => '',
                            'author' => '',
                            'authorimage' => '',
                            'desc' => 'The template styling is built with SCSS, a programmable stylesheet language for CSS, making the CSS more dynamic and adaptable. You can easily enable and disable automatic recompilation of SCSS files.',
                            'link' => '',
                            'linktext' => '',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'videosource' => 'external',
                            'video' => '',
                            'videolocal' => '',
                            'videothumb' => '',
                            'name' => 'Item 3'
                        ],
                        3 => [
                            'image' => '',
                            'icon' => 'fa fa-quote-left',
                            'title' => '',
                            'subtitle' => '',
                            'author' => '',
                            'authorimage' => '',
                            'desc' => 'Configuration in Gantry 5 features sophisticated built-in fields such as Icon Picker, Image Picker, Font Picker, Collections, and much more. You can change almost any aspect of a theme without breaking out a single editor.',
                            'link' => '',
                            'linktext' => '',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'videosource' => 'external',
                            'video' => '',
                            'videolocal' => '',
                            'videothumb' => '',
                            'name' => 'Item 4'
                        ],
                        4 => [
                            'image' => '',
                            'icon' => 'fa fa-quote-left',
                            'title' => '',
                            'subtitle' => '',
                            'author' => '',
                            'authorimage' => '',
                            'desc' => 'Protean is built with a responsive layout, which means it automatically adapts to the viewing device, so it will expand and contract accordingly to the size and resolution of the screen, whether mobile, tablet or desktop',
                            'link' => '',
                            'linktext' => '',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'videosource' => 'external',
                            'video' => '',
                            'videolocal' => '',
                            'videothumb' => '',
                            'name' => 'Item 5'
                        ]
                    ]
                ]
            ],
            'infolist-6050' => [
                'title' => 'Pickers',
                'attributes' => [
                    'enabled' => 0,
                    'class' => '',
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
                            'desc' => 'Choose the perfect font for <br/>your website.',
                            'tag' => '',
                            'subtag' => '',
                            'label' => 'Read the case study',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Font Picker'
                        ],
                        1 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Easily select the best color(s) <br />for your website.',
                            'tag' => '',
                            'subtag' => '',
                            'label' => 'Read the case study',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Color Picker'
                        ],
                        2 => [
                            'icon' => '',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Integrate Font Awesome icons <br/>into your site.',
                            'tag' => '',
                            'subtag' => '',
                            'label' => 'Read the case study',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Icon Picker'
                        ]
                    ]
                ]
            ],
            'imagegrid-3579' => [
                'title' => 'Image Grid',
                'attributes' => [
                    'enabled' => 0,
                    'class' => '',
                    'title' => '',
                    'desc' => '',
                    'cols' => 'g-imagegrid-3cols',
                    'layout' => 'g-imagegrid-captions',
                    'album' => '',
                    'imagegriditems' => [
                        0 => [
                            'image' => 'gantry-media://rocketlauncher/home/bottom/img-01.jpg',
                            'caption' => 'Gantry 5 Framework',
                            'title' => 'Item 1'
                        ],
                        1 => [
                            'image' => 'gantry-media://rocketlauncher/home/bottom/img-02.jpg',
                            'caption' => 'Responsive Template',
                            'title' => 'Item 2'
                        ],
                        2 => [
                            'image' => 'gantry-media://rocketlauncher/home/bottom/img-03.jpg',
                            'caption' => 'Exclusive Particles',
                            'title' => 'Item 3'
                        ]
                    ]
                ],
                'block' => [
                    'class' => 'fp-footer-imagegrid',
                    'variations' => 'nomarginall nopaddingall'
                ]
            ],
            'simplecontent-9567' => [
                'title' => 'Get the latest product updates in your inbox!',
                'attributes' => [
                    'class' => '',
                    'title' => '',
                    'items' => [
                        0 => [
                            'layout' => 'header',
                            'created_date' => '',
                            'content_title' => 'Get the latest information right in your inbox!',
                            'author' => '',
                            'leading_content' => '',
                            'main_content' => '',
                            'readmore_label' => '',
                            'readmore_link' => '',
                            'readmore_class' => '',
                            'readmore_target' => '_self',
                            'title' => 'Get the latest product updates in your inbox!'
                        ]
                    ]
                ],
                'block' => [
                    'class' => 'nopaddingbottom',
                    'variations' => 'center'
                ]
            ],
            'newsletter-3789' => [
                'attributes' => [
                    'inputboxtext' => 'Your email address',
                    'buttontext' => 'Subscribe',
                    'buttonclass' => ''
                ],
                'block' => [
                    'variations' => 'center'
                ]
            ]
        ]
    ]
];
