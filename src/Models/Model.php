namespace src\Models;

<?php
class User
{
public $firstName;
public $lastName;
public $email;
public $password;

public function validate()
{
$errors = [];

$this->validateArea('firstName', 'Ім\'я є обов\'язковим полем', empty($this->firstName));
$this->validateArea('lastName', 'Прізвище є обов\'язковим полем', empty($this->lastName));
$this->validateArea('email', 'Введіть правильний email', empty($this->email) || !filter_var($this->email, FILTER_VALIDATE_EMAIL));
$this->validateArea('password', 'Пароль повинен містити принаймні одну букву та одну цифру, і бути не менше 6 символів', empty($this->password) || !preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/', $this->password));

return $errors;
}

private function validateArea($area, $message, $status)
{
if ($status) {
$errors[$area] = $message;
}
}
}
