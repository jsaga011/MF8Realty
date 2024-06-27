<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/u781493085/domains/mf8realty.com/public_html/wp-content/themes/g5_helium/blueprints/content/blog/read-more.yaml',
    'modified' => 1702605628,
    'data' => [
        'name' => 'Read More Button',
        'description' => 'Options for displaying Read More button',
        'type' => 'blog',
        'form' => [
            'fields' => [
                'label' => [
                    'type' => 'input.text',
                    'label' => 'Button Label',
                    'description' => 'Default Read More button label.',
                    'default' => 'Read More'
                ],
                'mode' => [
                    'type' => 'select.select',
                    'label' => 'Display Mode',
                    'description' => 'When set to Auto - theme detects <!--more--> tag inside of the post content.',
                    'default' => 'auto',
                    'options' => [
                        'auto' => 'Auto',
                        'always' => 'Always',
                        'never' => 'Never'
                    ]
                ]
            ]
        ]
    ]
];
