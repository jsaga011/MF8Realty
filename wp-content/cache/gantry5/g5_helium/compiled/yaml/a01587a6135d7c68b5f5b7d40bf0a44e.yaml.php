<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/u781493085/domains/mf8realty.com/public_html/wp-content/themes/g5_helium/particles/contentcubes.yaml',
    'modified' => 1702605628,
    'data' => [
        'name' => 'Content Cubes',
        'description' => 'Display content in side-by-side cubes.',
        'type' => 'particle',
        'icon' => 'fa-cube',
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
                    'description' => 'Globally enable the particle.',
                    'default' => true
                ],
                'css.class' => [
                    'type' => 'input.text',
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
                    'description' => 'Create each item to display.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.name' => [
                            'type' => 'input.text'
                        ],
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select desired image.'
                        ],
                        '.imageposition' => [
                            'type' => 'select.select',
                            'label' => 'Image Position',
                            'description' => 'Should the image appear on the left or right of the content.',
                            'default' => 'left',
                            'options' => [
                                'left' => 'Left',
                                'right' => 'Right'
                            ]
                        ],
                        '.label' => [
                            'type' => 'input.text',
                            'label' => 'Label',
                            'description' => 'Enter the label that appears on top of the title'
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title',
                            'description' => 'Enter the title'
                        ],
                        '.tags' => [
                            'type' => 'collection.list',
                            'array' => true,
                            'label' => 'Tags',
                            'description' => 'Create each tag to display.',
                            'value' => 'text',
                            'ajax' => true,
                            'fields' => [
                                '.text' => [
                                    'type' => 'input.text',
                                    'label' => 'Tag Text',
                                    'description' => 'Input the text to be used as tag.'
                                ],
                                '.icon' => [
                                    'type' => 'input.icon',
                                    'label' => 'Tag Icon',
                                    'description' => 'Input the icon.',
                                    'default' => 'fa fa-tag'
                                ],
                                '.link' => [
                                    'type' => 'input.text',
                                    'label' => 'Tag Link',
                                    'description' => 'Specify the tag link.'
                                ],
                                '.target' => [
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
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Link',
                            'description' => 'Input the item link.'
                        ],
                        '.linktext' => [
                            'type' => 'input.text',
                            'label' => 'Link Text',
                            'description' => 'Input the text for the item link.',
                            'default' => '&rarr;'
                        ],
                        '.buttonclass' => [
                            'type' => 'input.text',
                            'label' => 'Button Class',
                            'description' => 'Input the button class.',
                            'default' => ''
                        ],
                        '.buttontarget' => [
                            'type' => 'select.selectize',
                            'label' => 'Button Target',
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
