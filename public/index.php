<?php

    namespace App;

    require __DIR__ . '/../vendor/autoload.php';

    require Router::load('routes.php')->direct(Request::uri(), Request::method());
