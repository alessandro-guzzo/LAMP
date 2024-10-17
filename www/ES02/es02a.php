<?php
// Estrai le credenziali
$username = $_POST['username'];
$password = $_POST['password'];

// Esempio di credenziali valide (sostituisci con la tua logica)
$valid_username = 'admin';
$valid_password = '12';

// Verifica le credenziali
$html_msg = '';
if ($username === $valid_username && $password === $valid_password) {
    $html_msg = "Benvenuto, $username!";
} else {
    $html_msg = 'Credenziali errate, riprova.';
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<?=$html_msg?>


</body>
</html>
