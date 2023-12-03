<?php


require __DIR__ . '/../vendor/autoload.php';

use src\Controllers\Controller;
use src\Views\View;
use src\Services\FormService;

$view = new View();
$formService = new FormService($view);
$controller = new Controller($formService, $view);

$controller->handleRequest();
