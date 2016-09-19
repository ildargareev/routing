<?php

    $router->get('', 'Controllers/main');
    $router->get('about', 'Controllers/about');
    $router->get('contacts', 'Controllers/contacts');
    $router->post('names', 'Controllers/add');