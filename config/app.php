<?php
return [
    'auth' => \Src\Auth\Auth::class,
    'identity' => \Model\User::class,
    'routeMiddleware' => [
        'auth' => \Middlewares\AuthMiddleware::class,
        'admin' => \Middlewares\AdminSysMiddleware::class,
    ],
    'validators' => [
        'required' => \Validators\RequireValidator::class,
        'unique' => \Validators\UniqueValidator::class,
        'specialSymbols' => \Validators\SpecialSymbolsValidator::class,
    ],
    'routeAppMiddleware' => [
        'trim' => \Middlewares\TrimMiddleware::class,
        'specialChars' => \Middlewares\SpecialCharsMiddleware::class,
        'csrf' => \Middlewares\CSRFMiddleware::class,
    ],
];