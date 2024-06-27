<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/u781493085/domains/mf8realty.com/public_html/wp-content/plugins/gantry5/engines/nucleus/particles/position.yaml',
    'modified' => 1702605593,
    'data' => [
        'name' => 'Widget Block',
        'description' => 'Display a widget block.',
        'type' => 'position',
        'icon' => 'fa-object-group',
        'hidden' => false,
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable widget blocks.',
                    'default' => true
                ],
                'key' => [
                    'type' => 'input.text',
                    'label' => 'Block Key',
                    'description' => 'Widget key id.',
                    'pattern' => '[a-z0-9-]+',
                    'overridable' => false
                ],
                'chrome' => [
                    'type' => 'input.text',
                    'label' => 'Chrome',
                    'description' => 'Module chrome in this widget block.',
                    'placeholder' => 'gantry'
                ]
            ]
        ]
    ]
];
