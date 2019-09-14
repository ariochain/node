<?php

if (file_exists(__DIR__ . '/../app/bootstrap.php')) {

$container = require __DIR__ . '/../app/bootstrap.php';

$container->getByType(Nette\Application\Application::class)
		->run();

    } else {
    
        require_once __DIR__.'/node-index.php';
       
    }