<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/vagrant/Code/smartboater/user/config/site.yaml',
    'modified' => 1485894233,
    'data' => [
        'title' => 'Smart Boater',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Joe Bloggs',
            'email' => 'joe@test.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Smart Boater has all the information about the rules and regulations, required equipment and emergency procedures you need to know to safely operate boats and personal watercraft.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
