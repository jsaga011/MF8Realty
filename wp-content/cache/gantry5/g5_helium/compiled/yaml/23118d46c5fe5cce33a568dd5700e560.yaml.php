<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/u781493085/domains/mf8realty.com/public_html/wp-content/themes/g5_helium/particles/contenttabs.yaml',
    'modified' => 1702605628,
    'data' => [
        'name' => 'Content Tabs',
        'description' => 'Displays Content Tabs.',
        'type' => 'particle',
        'icon' => 'fa-table',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Content Tabs particle.',
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
                    'description' => 'Customize the particle title text.',
                    'placeholder' => 'Enter title'
                ],
                'animation' => [
                    'type' => 'select.select',
                    'label' => 'Animation Type',
                    'description' => 'Set the animation type.',
                    'default' => 'slide',
                    'options' => [
                        'left' => 'Slide Left',
                        'right' => 'Slide Right',
                        'up' => 'Slide Up',
                        'down' => 'Slide Down',
                        'fade' => 'Fade',
                        'toggle' => 'Toggle'
                    ]
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Content Tabs Items',
                    'description' => 'Content Tabs item to display.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title',
                            'description' => 'Enter the title'
                        ],
                        '.content' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Tab Content',
                            'description' => 'Customize the tab content.',
                            'placeholder' => 'Enter your custom content here.'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
