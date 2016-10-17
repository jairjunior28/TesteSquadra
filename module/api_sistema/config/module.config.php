<?php
return [
    'router' => [
        'routes' => [
            'api_sistema.rest.api_sistema_' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/api_sistema_[/:api_sistema__id]',
                    'defaults' => [
                        'controller' => 'api_sistema\\V1\\Rest\\Api_sistema_\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            1 => 'api_sistema.rest.api_sistema_',
        ],
    ],
    'zf-rest' => [
        'api_sistema\\V1\\Rest\\Api_sistema_\\Controller' => [
            'listener' => \api_sistema\V1\Rest\Api_sistema_\Api_sistema_Resource::class,
            'route_name' => 'api_sistema.rest.api_sistema_',
            'route_identifier_name' => 'api_sistema__id',
            'collection_name' => 'api_sistema_',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PATCH',
                3 => 'PUT',
            ],
            'collection_query_whitelist' => [
                0 => 'descricao',
                1 => 'sigla',
                2 => 'url',
                3 => 'email',
                4 => 'justificativa',
                5 => 'data',
                6 => 'status',
            ],
            'page_size' => '10',
            'page_size_param' => '10',
            'entity_class' => \api_sistema\V1\Rest\Api_sistema_\Api_sistema_Entity::class,
            'collection_class' => \api_sistema\V1\Rest\Api_sistema_\Api_sistema_Collection::class,
            'service_name' => 'api_sistema_',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'api_sistema\\V1\\Rest\\Api_sistema_\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'api_sistema\\V1\\Rest\\Api_sistema_\\Controller' => [
                0 => 'application/vnd.api_sistema.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'api_sistema\\V1\\Rest\\Api_sistema_\\Controller' => [
                0 => 'application/vnd.api_sistema.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \api_sistema\V1\Rest\Api_sistema_\Api_sistema_Entity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'api_sistema.rest.api_sistema_',
                'route_identifier_name' => 'api_sistema__id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \api_sistema\V1\Rest\Api_sistema_\Api_sistema_Collection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'api_sistema.rest.api_sistema_',
                'route_identifier_name' => 'api_sistema__id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [],
    ],
    'zf-content-validation' => [
        'api_sistema\\V1\\Rest\\Api_sistema_\\Controller' => [
            'input_filter' => 'api_sistema\\V1\\Rest\\Api_sistema_\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'api_sistema\\V1\\Rest\\Sistema\\Validator' => [
            0 => [
                'name' => 'descricao',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '100',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'sigla',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '10',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'email',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '100',
                        ],
                    ],
                    1 => [
                        'name' => \Zend\Validator\EmailAddress::class,
                        'options' => [],
                    ],
                ],
            ],
            3 => [
                'name' => 'url',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '50',
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'usuario',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '100',
                        ],
                    ],
                ],
            ],
            5 => [
                'name' => 'justificativa',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '500',
                        ],
                    ],
                ],
            ],
            6 => [
                'name' => 'data',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            7 => [
                'name' => 'status',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '10',
                        ],
                    ],
                ],
            ],
        ],
        'api_sistema\\V1\\Rest\\Api_sistema_\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'id',
                'field_type' => 'int',
                'continue_if_empty' => true,
            ],
            1 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '3',
                            'max' => '100',
                        ],
                    ],
                ],
                'filters' => [],
                'name' => 'descricao',
                'error_message' => 'Dados obrigatórios não informados.',
            ],
            2 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                            'max' => '10',
                        ],
                    ],
                ],
                'filters' => [],
                'name' => 'sigla',
                'error_message' => 'Dados obrigatórios não informados.',
            ],
            3 => [
                'required' => false,
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                        ],
                    ],
                ],
                'filters' => [],
                'name' => 'url',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ],
            4 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'email',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ],
            5 => [
                'required' => false,
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                            'max' => '500',
                        ],
                    ],
                ],
                'filters' => [],
                'name' => 'justificativa',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ],
            6 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'data',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ],
            7 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'status',
                'continue_if_empty' => true,
                'allow_empty' => true,
            ],
        ],
    ],
    'zf-mvc-auth' => [
        'authorization' => [
            'api_sistema-V1-Rest-Sistema-Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => true,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => true,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
            ],
            'api_sistema-V1-Rest-Api_sistema_-Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => false,
                ],
            ],
        ],
    ],
    'service_manager' => [
        'factories' => [
            'api_sistema\\V1\\Rest\\Api_sistema\\Api_sistemaResource' => 'api_sistema\\V1\\Rest\\Api_sistema\\Api_sistemaResourceFactory',
            \api_sistema\V1\Rest\Api_sistema_\Api_sistema_Resource::class => \api_sistema\V1\Rest\Api_sistema_\Api_sistema_ResourceFactory::class,
        ],
    ],
];
