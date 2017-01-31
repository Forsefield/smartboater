<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/vagrant/Code/smartboater/user/themes/rt_protean/blueprints/styles/extension.yaml',
    'modified' => 1485894243,
    'data' => [
        'name' => 'Extension Styles',
        'description' => 'Extension styles for the Protean theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#21c2d4'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#ffffff'
                ]
            ]
        ]
    ]
];
