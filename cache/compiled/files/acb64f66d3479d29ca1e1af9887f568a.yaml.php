<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/vagrant/Code/smartboater/user/config/plugins/email.yaml',
    'modified' => 1485894233,
    'data' => [
        'enabled' => true,
        'from' => 'mail@example.com',
        'to' => 'mail@example.com',
        'mailer' => [
            'engine' => 'none',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
