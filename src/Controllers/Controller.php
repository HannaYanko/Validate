<?php
namespace src\Controllers;

use src\Services\FormService;
use src\Views\View;

class Controller
{
private $formService;
private $view;

public function __construct(FormService $formService, View $view)
{
$this->formService = $formService;
$this->view = $view;
}

public function handleRequest()
{
$action = $_GET['action'] ?? 'default';

if (method_exists($this->formService, $action)) {
$this->formService->$action();
} else {
$data = $this->formService->getDataFromPost();
$this->view->render('form', ['user' => $data]);
}
}
}
