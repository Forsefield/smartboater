<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/smartboater.ca/httpdocs/grav-skeleton-protean-site/user/themes/rt_protean/particles/simplecontent.yaml',
    'modified' => 1483473108,
    'data' => [
        'name' => 'Simple Content',
        'description' => 'Displays Simple Content',
        'type' => 'particle',
        'icon' => 'fa-file-text-o',
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particle.',
                    'default' => true
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Content Items',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.layout' => [
                            'type' => 'select.select',
                            'label' => 'Layout Style',
                            'description' => 'Choose the layout style.',
                            'placeholder' => 'Select...',
                            'default' => 'standard',
                            'options' => [
                                'standard' => 'Standard',
                                'header' => 'Header'
                            ]
                        ],
                        '.created_date' => [
                            'type' => 'input.text',
                            'label' => 'Created Date',
                            'description' => 'Customize the created date.',
                            'placeholder' => 'Enter create date'
                        ],
                        '.content_title' => [
                            'type' => 'input.text',
                            'label' => 'Content Title',
                            'description' => 'Customize the content title.',
                            'placeholder' => 'Enter content title'
                        ],
                        '.author' => [
                            'type' => 'input.text',
                            'label' => 'Author',
                            'description' => 'Customize the author.',
                            'placeholder' => 'Enter author'
                        ],
                        '.leading_content' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Leading Content',
                            'description' => 'Customize the leading content.',
                            'placeholder' => 'Enter short leading content'
                        ],
                        '.main_content' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Main Content',
                            'description' => 'Customize the main content.',
                            'placeholder' => 'Enter short main content'
                        ],
                        '.readmore_label' => [
                            'type' => 'input.text',
                            'label' => 'Read More Label',
                            'description' => 'Customize the readmore label.'
                        ],
                        '.readmore_link' => [
                            'type' => 'input.text',
                            'label' => 'Read More Link',
                            'description' => 'Specify the readmore readmore link address.'
                        ],
                        '.readmore_class' => [
                            'type' => 'input.selectize',
                            'label' => 'Read More Classes',
                            'description' => 'CSS class names for the readmore.'
                        ],
                        '.readmore_target' => [
                            'type' => 'select.selectize',
                            'label' => 'Target',
                            'description' => 'Target browser window when item is clicked.',
                            'placeholder' => 'Select...',
                            'default' => '_self',
                            'options' => [
                                '_self' => 'Self',
                                '_blank' => 'New Window'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
