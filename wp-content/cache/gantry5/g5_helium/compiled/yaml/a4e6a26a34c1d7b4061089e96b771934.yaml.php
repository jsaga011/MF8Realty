<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/u781493085/domains/mf8realty.com/public_html/wp-content/themes/g5_helium/blueprints/content/general/wpautop.yaml',
    'modified' => 1702605628,
    'data' => [
        'name' => 'wpautop Enabled',
        'description' => 'Enables the wpautop WordPress core filter',
        'type' => 'general',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable wpautop.',
                    'default' => 1
                ],
                '_info' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'Enables the wpautop WordPress core filter that auto adds paragraphs and break lines to your post/page content.'
                ]
            ]
        ]
    ]
];
