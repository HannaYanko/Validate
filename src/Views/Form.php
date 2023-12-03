
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстрація</title>
</head>
<body>
<h1>Реєстрація</h1>

<?php if (!empty($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= htmlspecialchars($error); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form action="?action=processForm" method="post">
    <label for="firstName">First Name:</label>
    <input type="text" name="firstName" value="<?= htmlspecialchars($user['firstName'] ?? ''); ?>"><br>

    <label for="lastName">Last Name:</label>
    <input type="text" name="lastName" value="<?= htmlspecialchars($user['lastName'] ?? ''); ?>"><br>

    <label for="email">Email:</label>
    <input type="text" name="email" value="<?= htmlspecialchars($user['email'] ?? ''); ?>"><br>

    <label for="password">Password:</label>
    <input type="password" name="password"><br>

    <button type="submit">Submit</button>
</form>
</body>
</html>
