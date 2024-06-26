<?php
return [
    'auth' => \Src\Auth\Auth::class,
    'identity' => \Model\User::class,
    'providers' => [
        'kernel' => \Providers\KernelProvider::class,
        'route' => \Providers\RouteProvider::class,
        'db' => \Providers\DBProvider::class,
        'auth' => \Providers\AuthProvider::class,
    ],
    'routeMiddleware' => [
        'auth' => \Middlewares\AuthMiddleware::class,
        'admin' => \Middlewares\AdminSysMiddleware::class,
    ],
    'validators' => [
        'required' => practika_serv_2packet\Validators\RequireValidator::class,
        'unique' =>  practika_serv_2packet\Validators\UniqueValidator::class,
        'specialSymbols' =>  practika_serv_2packet\Validators\SpecialSymbolsValidator::class,
    ],
    'routeAppMiddleware' => [
        'trim' => \Middlewares\TrimMiddleware::class,
        'specialChars' => \Middlewares\SpecialCharsMiddleware::class,
        'csrf' => \Middlewares\CSRFMiddleware::class,
        'json' => \Middlewares\JSONMiddleware::class,
    ],
];