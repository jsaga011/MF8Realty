<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/u781493085/domains/mf8realty.com/public_html/wp-content/themes/g5_helium/blueprints/styles/header.yaml',
    'modified' => 1702605628,
    'data' => [
        'name' => 'Header Styles',
        'description' => 'Header section styles for the Helium theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#312f38'
                ],
                'background-image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Background Image',
                    'default' => 'gantry-media://header/img01.jpg'
                ],
                'background-overlay' => [
                    'type' => 'select.select',
                    'label' => 'Background Overlay',
                    'description' => 'Enables the linear gradient overlay made of accent colors.',
                    'placeholder' => 'Select...',
                    'default' => 'enabled',
                    'options' => [
                        'enabled' => 'Enabled',
                        'disabled' => 'Disabled'
                    ]
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#eceeef'
                ]
            ]
        ]
    ]
];
