<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/u781493085/domains/mf8realty.com/public_html/wp-content/themes/g5_helium/blueprints/content/blog/content.yaml',
    'modified' => 1702605628,
    'data' => [
        'name' => 'Content',
        'description' => 'Options for displaying Content in the view',
        'type' => 'blog',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Display content.',
                    'default' => 1
                ],
                'type' => [
                    'type' => 'select.select',
                    'label' => 'Content Type',
                    'description' => 'What post should display by default',
                    'default' => 'content',
                    'options' => [
                        'content' => 'Content',
                        'excerpt' => 'Excerpt',
                        'gexcerpt' => 'Generated Excerpt'
                    ]
                ],
                'gexcerpt-length' => [
                    'type' => 'input.number',
                    'label' => 'Excerpt Length',
                    'description' => 'Length of generated excerpt (in words)',
                    'default' => 50,
                    'min' => 1
                ],
                'columns' => [
                    'type' => 'select.select',
                    'label' => 'Post Columns',
                    'description' => 'In how many columns should the posts appear',
                    'default' => 'size-100',
                    'options' => [
                        'size-100' => '1 Column',
                        'size-50' => '2 Columns',
                        'size-33-3' => '3 Columns',
                        'size-25' => '4 Columns',
                        'size-20' => '5 Columns'
                    ]
                ]
            ]
        ]
    ]
];
