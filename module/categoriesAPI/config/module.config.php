<?php
return [
    'service_manager' => [
        'factories' => [
            \categoriesAPI\V1\Rest\Categories\CategoriesResource::class => \categoriesAPI\V1\Rest\Categories\CategoriesResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'categories-api.rest.categories' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/categories[/:categories_id]',
                    'defaults' => [
                        'controller' => 'categoriesAPI\\V1\\Rest\\Categories\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'categories-api.rest.categories',
        ],
    ],
    'zf-rest' => [
        'categoriesAPI\\V1\\Rest\\Categories\\Controller' => [
            'listener' => \categoriesAPI\V1\Rest\Categories\CategoriesResource::class,
            'route_name' => 'categories-api.rest.categories',
            'route_identifier_name' => 'categories_id',
            'collection_name' => 'categories',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \StatusLib\Entity::class,
            'collection_class' => \StatusLib\Collection::class,
            'service_name' => 'categories',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'categoriesAPI\\V1\\Rest\\Categories\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'categoriesAPI\\V1\\Rest\\Categories\\Controller' => [
                0 => 'application/vnd.categories-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'categoriesAPI\\V1\\Rest\\Categories\\Controller' => [
                0 => 'application/vnd.categories-api.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \categoriesAPI\V1\Rest\Categories\CategoriesEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'categories-api.rest.categories',
                'route_identifier_name' => 'categories_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \categoriesAPI\V1\Rest\Categories\CategoriesCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'categories-api.rest.categories',
                'route_identifier_name' => 'categories_id',
                'is_collection' => true,
            ],
            \StatusLib\Entity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'categories-api.rest.categories',
                'route_identifier_name' => 'categories_id',
                'hydrator' => \Zend\Hydrator\ObjectProperty::class,
            ],
            \StatusLib\Collection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'categories-api.rest.categories',
                'route_identifier_name' => 'categories_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-content-validation' => [
        'categoriesAPI\\V1\\Rest\\Categories\\Controller' => [
            'input_filter' => 'categoriesAPI\\V1\\Rest\\Categories\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'categoriesAPI\\V1\\Rest\\Categories\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\Regex::class,
                        'options' => [
                            'pattern' => '/^[a-zA-Z0-9 .\\-]+$/i',
                        ],
                    ],
                    1 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                            'max' => '30',
                        ],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'name',
                'description' => 'Category name.',
                'error_message' => 'Category name must contain between 1 and 30 characters. Only alphanumeric characters and space are accepted.',
                'field_type' => 'string',
            ],
            1 => [
                'required' => false,
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'max' => '20',
                        ],
                    ],
                    1 => [
                        'name' => \Zend\Validator\Regex::class,
                        'options' => [
                            'pattern' => '/^[a-zA-Z0-9]+$/i',
                        ],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'abbreviation',
                'allow_empty' => true,
                'description' => 'Category abbreviation.',
                'error_message' => 'Category abbreviation must contain equal or less than 20 characters. Only alphanumeric characters are accepted.',
                'field_type' => 'string',
            ],
            2 => [
                'required' => false,
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'max' => '140',
                        ],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'message',
                'field_type' => 'string',
                'description' => 'A category message description of no more than 140 characters.',
                'allow_empty' => true,
                'error_message' => 'A Category message must contain at maximum 140 character.',
            ],
            3 => [
                'required' => false,
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'max' => '64',
                        ],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'user',
                'error_message' => 'You must provide a valid user.',
                'description' => 'The user submitting the status message.',
                'field_type' => 'string',
                'allow_empty' => true,
            ],
            4 => [
                'required' => false,
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\Digits::class,
                        'options' => [],
                    ],
                ],
                'filters' => [],
                'name' => 'timestamp',
                'field_type' => 'int',
                'description' => 'The timestamp when the status message was last modified.',
                'error_message' => 'You must provide a timestamp.',
            ],
        ],
    ],
];
