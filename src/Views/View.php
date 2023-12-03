<?php
namespace src\Views;

class View
{
public function render($template, array $data = [])
{
extract($data);
    include __DIR__ . "/../views/{$template}.php";

}
}
