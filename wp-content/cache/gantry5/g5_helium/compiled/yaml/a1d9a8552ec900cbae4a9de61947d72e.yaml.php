<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/u781493085/domains/mf8realty.com/public_html/wp-content/plugins/gantry5/engines/nucleus/particles/date.yaml',
    'modified' => 1702605593,
    'data' => [
        'name' => 'Date',
        'description' => 'Display a date.',
        'type' => 'particle',
        'icon' => 'fa-calendar',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable date particles.',
                    'default' => true
                ],
                'css.class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.',
                    'default' => 'date'
                ],
                'date.formats' => [
                    'type' => 'select.date',
                    'label' => 'Format',
                    'description' => 'Select preferred date format.',
                    'default' => 'l, F d, Y',
                    'placeholder' => 'Select...',
                    'selectize' => [
                        'allowEmptyOption' => true
                    ],
                    'options' => [
                        'l, F d, Y' => 'Date1',
                        'l, d F' => 'Date2',
                        'D, d F' => 'Date3',
                        'F d' => 'Date4',
                        'd F' => 'Date5',
                        'd M' => 'Date6',
                        'D, M d, Y' => 'Date7',
                        'D, M d, y' => 'Date8',
                        'l' => 'Date9',
                        'l j F Y' => 'Date10',
                        'j F Y' => 'Date11',
                        'F d, Y' => 'Date12'
                    ]
                ]
            ]
        ]
    ]
];
