<?php
namespace src\Services;

use src\Views\View;

class FormService
{
private $view;

public function __construct(View $view)
{
$this->view = $view;
}

public function showForm()
{
$this->view->render('form');
}

public function processForm()
{
$this->view->render('Registration', ['user' => $_POST]);
}

public function getDataFromPost()
{
return $_POST;
}
}
