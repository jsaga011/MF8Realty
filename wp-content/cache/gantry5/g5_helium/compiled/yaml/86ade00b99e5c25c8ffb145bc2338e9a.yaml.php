<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/u781493085/domains/mf8realty.com/public_html/wp-content/plugins/gantry5/engines/nucleus/admin/blueprints/layout/inheritance/section.yaml',
    'modified' => 1702605593,
    'data' => [
        'name' => 'Inheritance',
        'description' => 'Section inheritance tab',
        'type' => 'section.inheritance',
        'form' => [
            'fields' => [
                'mode' => [
                    'type' => 'input.radios',
                    'label' => 'Mode',
                    'description' => 'Whether to clone or inherit the section properties. <code>inherit</code> makes the Section identical to that of the inherited outline.',
                    'default' => 'inherit',
                    'options' => [
                        'clone' => 'Clone',
                        'inherit' => 'Inherit'
                    ]
                ],
                'outline' => [
                    'type' => 'gantry.outlines',
                    'label' => 'Outline',
                    'description' => 'Outline to inherit from.',
                    'selectize' => [
                        'allowEmptyOption' => true
                    ],
                    'options' => [
                        '' => 'No Inheritance'
                    ]
                ],
                'include' => [
                    'type' => 'input.multicheckbox',
                    'label' => 'Replace',
                    'description' => 'Which parts of the Section to inherit?',
                    'options' => [
                        'attributes' => 'Section Attributes',
                        'block' => 'Block Attributes',
                        'children' => 'Particles within Section'
                    ]
                ]
            ]
        ]
    ]
];
