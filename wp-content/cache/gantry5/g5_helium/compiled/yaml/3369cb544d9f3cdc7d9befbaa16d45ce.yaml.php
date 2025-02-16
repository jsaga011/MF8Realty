<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/u781493085/domains/mf8realty.com/public_html/wp-content/plugins/gantry5/engines/nucleus/particles/contentarray.yaml',
    'modified' => 1702605593,
    'data' => [
        'name' => 'WordPress Posts',
        'description' => 'Display WordPress Posts.',
        'type' => 'particle',
        'icon' => 'fa-wordpress',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable WordPress Posts particles.',
                    'default' => true
                ],
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_posts' => [
                            'label' => 'Posts',
                            'overridable' => false,
                            'fields' => [
                                'post.filter.categories' => [
                                    'type' => 'wordpress.categories',
                                    'label' => 'Categories',
                                    'description' => 'Select the categories the posts should be taken from.',
                                    'overridable' => false
                                ],
                                'post.filter.posts' => [
                                    'type' => 'input.text',
                                    'label' => 'Posts',
                                    'description' => 'Enter the WordPress posts that should be shown. It should be a list of post IDs separated with a comma (i.e. 1,2,3,4,5).',
                                    'overridable' => false
                                ],
                                'post.filter.sticky' => [
                                    'type' => 'select.select',
                                    'label' => 'Sticky Posts',
                                    'description' => 'Shows sticky posts at the top of other posts.',
                                    'default' => '',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ],
                                    'overridable' => false
                                ],
                                'post.limit.total' => [
                                    'type' => 'input.text',
                                    'label' => 'Number of Posts',
                                    'description' => 'Enter the maximum number of posts to display per page.',
                                    'default' => 2,
                                    'pattern' => '-?\\d{1,2}',
                                    'overridable' => false
                                ],
                                'post.display.pagination_buttons' => [
                                    'type' => 'select.select',
                                    'label' => 'Pagination',
                                    'description' => 'Select if the pagination buttons should be shown to allow users to see more posts.',
                                    'default' => '',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ],
                                    'overridable' => false
                                ],
                                'post.limit.columns' => [
                                    'type' => 'select.select',
                                    'label' => 'Number of columns',
                                    'description' => 'Select the number of columns that you want posts to appear in.',
                                    'default' => 2,
                                    'options' => [
                                        1 => 1,
                                        2 => 2,
                                        3 => 3,
                                        4 => 4,
                                        5 => 5,
                                        6 => 6
                                    ],
                                    'overridable' => false
                                ],
                                'post.limit.start' => [
                                    'type' => 'input.text',
                                    'label' => 'Start From',
                                    'description' => 'Enter offset specifying the first post to return. The default is \'0\' (the first post).',
                                    'default' => 0,
                                    'pattern' => '\\d{1,2}',
                                    'overridable' => false
                                ],
                                'post.sort.orderby' => [
                                    'type' => 'select.select',
                                    'label' => 'Order By',
                                    'description' => 'Select how the posts should be ordered by.',
                                    'default' => 'date',
                                    'options' => [
                                        'date' => 'Published Date',
                                        'modified' => 'Last Modified Date',
                                        'name' => 'Post Name (Slug)',
                                        'title' => 'Title',
                                        'author' => 'Author',
                                        'comment_count' => 'Comment Count',
                                        'type' => 'Post Type',
                                        'ID' => 'ID',
                                        'parent' => 'Parent ID',
                                        'rand' => 'Random',
                                        'none' => 'None'
                                    ],
                                    'overridable' => false
                                ],
                                'post.sort.ordering' => [
                                    'type' => 'select.select',
                                    'label' => 'Ordering Direction',
                                    'description' => 'Select the direction the posts should be ordered by.',
                                    'default' => 'DESC',
                                    'options' => [
                                        'ASC' => 'Ascending',
                                        'DESC' => 'Descending'
                                    ],
                                    'overridable' => false
                                ]
                            ]
                        ],
                        '_tab_display' => [
                            'label' => 'Display',
                            'fields' => [
                                'post.display.image.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Image',
                                    'description' => 'Select if the featured image of the post should be shown.',
                                    'default' => 'show',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'post.display.title.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Title',
                                    'description' => 'Select if the post title should be shown.',
                                    'default' => 'show',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'post.display.title.limit' => [
                                    'type' => 'input.text',
                                    'label' => 'Title Limit',
                                    'description' => 'Enter the maximum number of characters the post title should be limited to.',
                                    'pattern' => '\\d+(\\.\\d+){0,1}'
                                ],
                                'post.display.date.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Date',
                                    'description' => 'Select if the post date should be shown.',
                                    'default' => 'published',
                                    'options' => [
                                        'published' => 'Show Published Date',
                                        'modified' => 'Show Modified Date',
                                        '' => 'Hide'
                                    ]
                                ],
                                'post.display.date.format' => [
                                    'type' => 'select.date',
                                    'label' => 'Date Format',
                                    'description' => 'Select preferred date format. Leave empty not to display a date.',
                                    'default' => 'l, F d, Y',
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
                        ],
                        '_tab_readmore' => [
                            'label' => 'Read More',
                            'fields' => [
                                'post.display.read_more.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Read More',
                                    'description' => 'Select if the post \'Read More\' button should be shown.',
                                    'default' => 'show',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'post.display.read_more.label' => [
                                    'type' => 'input.text',
                                    'label' => 'Read More Label',
                                    'description' => 'Type in the label for the \'Read More\' button.',
                                    'placeholder' => 'Read More...'
                                ],
                                'post.display.read_more.css' => [
                                    'type' => 'input.selectize',
                                    'label' => 'Button CSS Classes',
                                    'description' => 'CSS class name for the \'Read More\' button.'
                                ]
                            ]
                        ],
                        '_tab_extras' => [
                            'label' => 'Extras',
                            'fields' => [
                                'post.display.author.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Author',
                                    'description' => 'Select if the post author should be shown.',
                                    'default' => 'show',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'post.display.category.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Categories',
                                    'description' => 'Select if and how the post categories should be shown.',
                                    'default' => 'link',
                                    'options' => [
                                        'show' => 'Show',
                                        'link' => 'Show with Link',
                                        '' => 'Hide'
                                    ]
                                ],
                                'post.display.comments.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Comments',
                                    'description' => 'Select if the post comments number should be shown.',
                                    'default' => 'show',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'post.display.text.type' => [
                                    'type' => 'select.select',
                                    'label' => 'Content Type',
                                    'description' => 'Select if and how the post text should be shown.',
                                    'default' => 'content',
                                    'options' => [
                                        'content' => 'Content',
                                        'excerpt' => 'Excerpt',
                                        '' => 'Hide'
                                    ]
                                ],
                                'post.display.text.limit' => [
                                    'type' => 'input.text',
                                    'label' => 'Content Limit',
                                    'description' => 'Type in the number of characters the post content/excerpt should be limited to.',
                                    'default' => '',
                                    'pattern' => '\\d+'
                                ],
                                'post.display.text.formatting' => [
                                    'type' => 'select.select',
                                    'label' => 'Content Formatting',
                                    'description' => 'Select the formatting you want to use to display the post content.',
                                    'default' => 'text',
                                    'options' => [
                                        'text' => 'Plain Text',
                                        'html' => 'HTML'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'css.class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'extra' => [
                    'type' => 'collection.keyvalue',
                    'label' => 'Tag Attributes',
                    'description' => 'Extra Tag attributes.',
                    'key_placeholder' => 'Key (data-*, style, ...)',
                    'value_placeholder' => 'Value',
                    'exclude' => [
                        0 => 'id',
                        1 => 'class'
                    ]
                ]
            ]
        ]
    ]
];
