<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/vagrant/Code/smartboater/user/themes/rt_protean/blueprints/styles/copyright.yaml',
    'modified' => 1485894243,
    'data' => [
        'name' => 'Copyright Styles',
        'description' => 'Copyright styles for the Protean theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#2d2d2d'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#797979'
                ]
            ]
        ]
    ]
];
