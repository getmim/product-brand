<?php

return [
    '__name' => 'product-brand',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/product-brand.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/product-brand' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-model' => NULL
            ],
            [
                'lib-formatter' => NULL
            ],
            [
                'product' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'ProductBrand\\Model' => [
                'type' => 'file',
                'base' => 'modules/product-brand/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'product' => [
                'brand' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'ProductBrand\\Model\\ProductBrand',
                        'field' => 'id'
                    ],
                    'format' => 'product-brand'
                ]
            ],
            'product-brand' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'user'
                ],
                'name' => [
                    'type' => 'text'
                ],
                'slug' => [
                    'type' => 'text'
                ],
                'image' => [
                    'type' => 'media'
                ],
                'content' => [
                    'type' => 'text'
                ],
                'meta' => [
                    'type' => 'json'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];
