<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/u781493085/domains/mf8realty.com/public_html/wp-content/themes/g5_helium/particles/owlcarousel.yaml',
    'modified' => 1702605628,
    'data' => [
        'name' => 'Owl Carousel',
        'description' => 'Display Owl Carousel.',
        'type' => 'particle',
        'icon' => 'fa-sliders',
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
                    'description' => 'Globally enable icon menu particles.',
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
                'nav' => [
                    'type' => 'select.select',
                    'label' => 'Prev / Next',
                    'description' => 'Enable or disable the Prev / Next navigation.',
                    'default' => 'disable',
                    'options' => [
                        'enable' => 'Enable',
                        'disable' => 'Disable'
                    ]
                ],
                'dots' => [
                    'type' => 'select.select',
                    'label' => 'Dots',
                    'description' => 'Enable or disable the Dots navigation.',
                    'default' => 'enable',
                    'options' => [
                        'enable' => 'Enable',
                        'disable' => 'Disable'
                    ]
                ],
                'autoplay' => [
                    'type' => 'select.select',
                    'label' => 'Autoplay',
                    'description' => 'Enable or disable the Autoplay.',
                    'default' => 'disable',
                    'options' => [
                        'enable' => 'Enable',
                        'disable' => 'Disable'
                    ]
                ],
                'autoplaySpeed' => [
                    'type' => 'input.text',
                    'label' => 'Autoplay Speed',
                    'description' => 'Set the speed of the Autoplay, in milliseconds.',
                    'placeholder' => 5000
                ],
                'imageOverlay' => [
                    'type' => 'select.select',
                    'label' => 'Image Overlay',
                    'description' => 'Enable or disable the image overlay.',
                    'default' => 'enable',
                    'options' => [
                        'enable' => 'Enable',
                        'disable' => 'Disable'
                    ]
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Owl Carousel Items',
                    'description' => 'Create each Owl Carousel item to display.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.class' => [
                            'type' => 'input.selectize',
                            'label' => 'CSS Classes',
                            'description' => 'CSS class names for the individual item.'
                        ],
                        '.name' => [
                            'type' => 'input.text'
                        ],
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select desired image.'
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title',
                            'description' => 'Enter the title'
                        ],
                        '.desc' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description',
                            'description' => 'Customize the description.',
                            'placeholder' => 'Enter short description'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Link',
                            'description' => 'Input the item link.'
                        ],
                        '.linktext' => [
                            'type' => 'input.text',
                            'label' => 'Link Text',
                            'description' => 'Input the text for the item link.'
                        ],
                        '.buttonclass' => [
                            'type' => 'input.text',
                            'label' => 'Button Class',
                            'description' => 'Input the button class.',
                            'default' => 'button-outline'
                        ],
                        '.disable' => [
                            'type' => 'input.checkbox',
                            'label' => 'Disable',
                            'description' => 'Disables the item on the front end.',
                            'default' => false
                        ]
                    ]
                ]
            ]
        ]
    ]
];
