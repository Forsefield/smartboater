<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/smartboater.ca/httpdocs/grav-skeleton-protean-site/user/themes/rt_protean/blueprints/styles/font.yaml',
    'modified' => 1483473108,
    'data' => [
        'name' => 'Font Families',
        'description' => 'Font families for the Protean theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'family-default' => [
                    'type' => 'input.fonts',
                    'label' => 'Body Font',
                    'default' => 'rubik, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ],
                'family-title' => [
                    'type' => 'input.fonts',
                    'label' => 'Title Font',
                    'default' => 'rubik, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ],
                'family-promo' => [
                    'type' => 'input.fonts',
                    'label' => 'Promo Font',
                    'default' => 'rubik, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ],
                'family-subpromo' => [
                    'type' => 'input.fonts',
                    'label' => 'SubPromo Font',
                    'default' => 'rubik, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ]
            ]
        ]
    ]
];
