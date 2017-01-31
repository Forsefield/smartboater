<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/vagrant/Code/smartboater/user/themes/rt_protean/blueprints/styles/accent.yaml',
    'modified' => 1485894243,
    'data' => [
        'name' => 'Accent Colors',
        'description' => 'Accent colors for the Protean theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'color-1' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 1',
                    'default' => '#f9632d'
                ],
                'color-2' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 2',
                    'default' => '#21c2d4'
                ]
            ]
        ]
    ]
];
