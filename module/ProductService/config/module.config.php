<?php
return [
    'controllers' => [
        'factories' => [
            'ProductService\\V1\\Rpc\\ProductSimple\\Controller' => \ProductService\V1\Rpc\ProductSimple\ProductSimpleControllerFactory::class,
            'ProductService\\V1\\Rpc\\Cart\\Controller' => \ProductService\V1\Rpc\Cart\CartControllerFactory::class,
            'ProductService\\V1\\Rpc\\ProductDetail\\Controller' => \ProductService\V1\Rpc\ProductDetail\ProductDetailControllerFactory::class,
            'ProductService\\V1\\Rpc\\Catalog\\Controller' => \ProductService\V1\Rpc\Catalog\CatalogControllerFactory::class,
            'ProductService\\V1\\Rpc\\Address\\Controller' => \ProductService\V1\Rpc\Address\AddressControllerFactory::class,
            'ProductService\\V1\\Rpc\\Addresses\\Controller' => \ProductService\V1\Rpc\Addresses\AddressesControllerFactory::class,
            'ProductService\\V1\\Rpc\\Order\\Controller' => \ProductService\V1\Rpc\Order\OrderControllerFactory::class,
            'ProductService\\V1\\Rpc\\Orders\\Controller' => \ProductService\V1\Rpc\Orders\OrdersControllerFactory::class,
            'ProductService\\V1\\Rpc\\Filter\\Controller' => \ProductService\V1\Rpc\Filter\FilterControllerFactory::class,
            'ProductService\\V1\\Rpc\\Profiles\\Controller' => \ProductService\V1\Rpc\Profiles\ProfilesControllerFactory::class,
            'ProductService\\V1\\Rpc\\MockOauth\\Controller' => \ProductService\V1\Rpc\MockOauth\MockOauthControllerFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'product-service.rpc.product-simple' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/product-svc/products/public',
                    'defaults' => [
                        'controller' => 'ProductService\\V1\\Rpc\\ProductSimple\\Controller',
                        'action' => 'productSimple',
                    ],
                ],
            ],
            'product-service.rpc.cart' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/profile-svc/cart/user[/id]',
                    'defaults' => [
                        'controller' => 'ProductService\\V1\\Rpc\\Cart\\Controller',
                        'action' => 'cart',
                    ],
                ],
            ],
            'product-service.rpc.product-detail' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/product-svc/products/public/[:id]',
                    'defaults' => [
                        'controller' => 'ProductService\\V1\\Rpc\\ProductDetail\\Controller',
                        'action' => 'productDetail',
                    ],
                ],
            ],
            'product-service.rpc.catalog' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/product-svc/catalogs[/public]',
                    'defaults' => [
                        'controller' => 'ProductService\\V1\\Rpc\\Catalog\\Controller',
                        'action' => 'catalog',
                    ],
                ],
            ],
            'product-service.rpc.address' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/profile-svc/addresses/user/[:id]',
                    'defaults' => [
                        'controller' => 'ProductService\\V1\\Rpc\\Address\\Controller',
                        'action' => 'address',
                    ],
                ],
            ],
            'product-service.rpc.addresses' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/profile-svc/addresses/user',
                    'defaults' => [
                        'controller' => 'ProductService\\V1\\Rpc\\Addresses\\Controller',
                        'action' => 'addresses',
                    ],
                ],
            ],
            'product-service.rpc.order' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/profile-svc/orders/user/[:id]',
                    'defaults' => [
                        'controller' => 'ProductService\\V1\\Rpc\\Order\\Controller',
                        'action' => 'order',
                    ],
                ],
            ],
            'product-service.rpc.orders' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/profile-svc/orders/user',
                    'defaults' => [
                        'controller' => 'ProductService\\V1\\Rpc\\Orders\\Controller',
                        'action' => 'orders',
                    ],
                ],
            ],
            'product-service.rpc.filter' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/filters',
                    'defaults' => [
                        'controller' => 'ProductService\\V1\\Rpc\\Filter\\Controller',
                        'action' => 'filter',
                    ],
                ],
            ],
            'product-service.rpc.profiles' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/profile-svc/profiles/search',
                    'defaults' => [
                        'controller' => 'ProductService\\V1\\Rpc\\Profiles\\Controller',
                        'action' => 'profiles',
                    ],
                ],
            ],
            'product-service.rpc.mock-oauth' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/oauth/token',
                    'defaults' => [
                        'controller' => 'ProductService\\V1\\Rpc\\MockOauth\\Controller',
                        'action' => 'mockOauth',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'product-service.rpc.product-simple',
            1 => 'product-service.rpc.cart',
            2 => 'product-service.rpc.product-detail',
            3 => 'product-service.rpc.catalog',
            4 => 'product-service.rpc.address',
            5 => 'product-service.rpc.addresses',
            6 => 'product-service.rpc.order',
            7 => 'product-service.rpc.orders',
            8 => 'product-service.rpc.filter',
            9 => 'product-service.rpc.profiles',
            10 => 'product-service.rpc.mock-oauth',
        ],
    ],
    'api-tools-rpc' => [
        'ProductService\\V1\\Rpc\\ProductSimple\\Controller' => [
            'service_name' => 'ProductSimple',
            'http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PUT',
                3 => 'PATCH',
                4 => 'DELETE',
            ],
            'route_name' => 'product-service.rpc.product-simple',
        ],
        'ProductService\\V1\\Rpc\\Cart\\Controller' => [
            'service_name' => 'Cart',
            'http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PUT',
                3 => 'PATCH',
                4 => 'DELETE',
            ],
            'route_name' => 'product-service.rpc.cart',
        ],
        'ProductService\\V1\\Rpc\\ProductDetail\\Controller' => [
            'service_name' => 'ProductDetail',
            'http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PUT',
                3 => 'PATCH',
                4 => 'DELETE',
            ],
            'route_name' => 'product-service.rpc.product-detail',
        ],
        'ProductService\\V1\\Rpc\\Catalog\\Controller' => [
            'service_name' => 'Catalog',
            'http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PUT',
                3 => 'PATCH',
                4 => 'DELETE',
            ],
            'route_name' => 'product-service.rpc.catalog',
        ],
        'ProductService\\V1\\Rpc\\Address\\Controller' => [
            'service_name' => 'Address',
            'http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PUT',
                3 => 'PATCH',
                4 => 'DELETE',
            ],
            'route_name' => 'product-service.rpc.address',
        ],
        'ProductService\\V1\\Rpc\\Addresses\\Controller' => [
            'service_name' => 'Addresses',
            'http_methods' => [
                0 => 'GET',
                1 => 'PUT',
                2 => 'PATCH',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'route_name' => 'product-service.rpc.addresses',
        ],
        'ProductService\\V1\\Rpc\\Order\\Controller' => [
            'service_name' => 'Order',
            'http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PUT',
                3 => 'PATCH',
                4 => 'DELETE',
            ],
            'route_name' => 'product-service.rpc.order',
        ],
        'ProductService\\V1\\Rpc\\Orders\\Controller' => [
            'service_name' => 'Orders',
            'http_methods' => [
                0 => 'GET',
                1 => 'PUT',
                2 => 'POST',
                3 => 'PATCH',
                4 => 'DELETE',
            ],
            'route_name' => 'product-service.rpc.orders',
        ],
        'ProductService\\V1\\Rpc\\Filter\\Controller' => [
            'service_name' => 'Filter',
            'http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PATCH',
                3 => 'DELETE',
            ],
            'route_name' => 'product-service.rpc.filter',
        ],
        'ProductService\\V1\\Rpc\\Profiles\\Controller' => [
            'service_name' => 'Profiles',
            'http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PUT',
                3 => 'PATCH',
                4 => 'DELETE',
            ],
            'route_name' => 'product-service.rpc.profiles',
        ],
        'ProductService\\V1\\Rpc\\MockOauth\\Controller' => [
            'service_name' => 'MockOauth',
            'http_methods' => [
                0 => 'GET',
                1 => 'POST',
                2 => 'PUT',
                3 => 'PATCH',
                4 => 'DELETE',
            ],
            'route_name' => 'product-service.rpc.mock-oauth',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'ProductService\\V1\\Rpc\\ProductSimple\\Controller' => 'Json',
            'ProductService\\V1\\Rpc\\Cart\\Controller' => 'Json',
            'ProductService\\V1\\Rpc\\ProductDetail\\Controller' => 'Json',
            'ProductService\\V1\\Rpc\\Catalog\\Controller' => 'Json',
            'ProductService\\V1\\Rpc\\Address\\Controller' => 'Json',
            'ProductService\\V1\\Rpc\\Addresses\\Controller' => 'Json',
            'ProductService\\V1\\Rpc\\Order\\Controller' => 'Json',
            'ProductService\\V1\\Rpc\\Orders\\Controller' => 'Json',
            'ProductService\\V1\\Rpc\\Filter\\Controller' => 'Json',
            'ProductService\\V1\\Rpc\\Profiles\\Controller' => 'Json',
            'ProductService\\V1\\Rpc\\MockOauth\\Controller' => 'Json',
        ],
        'accept_whitelist' => [
            'ProductService\\V1\\Rpc\\ProductSimple\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
            'ProductService\\V1\\Rpc\\Cart\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
            'ProductService\\V1\\Rpc\\ProductDetail\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
            'ProductService\\V1\\Rpc\\Catalog\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
            'ProductService\\V1\\Rpc\\Address\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
            'ProductService\\V1\\Rpc\\Addresses\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
            'ProductService\\V1\\Rpc\\Order\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
            'ProductService\\V1\\Rpc\\Orders\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
            'ProductService\\V1\\Rpc\\Filter\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
            'ProductService\\V1\\Rpc\\Profiles\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
            'ProductService\\V1\\Rpc\\MockOauth\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
        ],
        'content_type_whitelist' => [
            'ProductService\\V1\\Rpc\\ProductSimple\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
            ],
            'ProductService\\V1\\Rpc\\Cart\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
            ],
            'ProductService\\V1\\Rpc\\ProductDetail\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
            ],
            'ProductService\\V1\\Rpc\\Catalog\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
            ],
            'ProductService\\V1\\Rpc\\Address\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
            ],
            'ProductService\\V1\\Rpc\\Addresses\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
            ],
            'ProductService\\V1\\Rpc\\Order\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
            ],
            'ProductService\\V1\\Rpc\\Orders\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
            ],
            'ProductService\\V1\\Rpc\\Filter\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
            ],
            'ProductService\\V1\\Rpc\\Profiles\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
            ],
            'ProductService\\V1\\Rpc\\MockOauth\\Controller' => [
                0 => 'application/vnd.product-service.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
];
