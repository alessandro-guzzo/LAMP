<?php
// Inizializza le variabili per i messaggi
$html_msg = '';

// Controlla se il modulo è stato inviato
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    // Estrai le credenziali
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Esempio di credenziali valide (sostituisci con la tua logica)
    $valid_username = 'admin';
    $valid_password = '12';

    // Verifica le credenziali
    if ($username === $valid_username && $password === $valid_password) {
        $html_msg = "Benvenuto, $username!";
    } else {
        $html_msg = 'Credenziali errate, riprova.';
    }

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

<!-- Form di login -->
<form action="" method="POST">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" name="submit" value="Login">
</form>

</body>
</html>
