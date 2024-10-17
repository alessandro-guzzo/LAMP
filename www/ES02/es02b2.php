<?php
// Inizializza le variabili per i messaggi
$message = '';
$error = '';

// Controlla se il modulo è stato inviato
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Estrai le credenziali
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Esempio di credenziali valide (sostituisci con la tua logica)
    $valid_username = 'admin';
    $valid_password = 'password123';

    // Verifica le credenziali
    if ($username === $valid_username && $password === $valid_password) {
        $message = "Benvenuto, $username!";
    } else {
        $error = 'Credenziali errate, riprova.';
    }
}
?>
