<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/smartboater.ca/httpdocs/grav-skeleton-protean-site/user/themes/rt_protean/config/default/page/head.yaml',
    'modified' => 1483473108,
    'data' => [
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
                ]
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
                ]
            ]
        ]
    ]
];
