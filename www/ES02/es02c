<?php
// Inizializza la variabile per il numero N
$n = null;

// Controlla se il modulo è stato inviato
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $n = intval($_POST['number']);
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella Quadrati e Cubi</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Inserisci un numero intero (1-10)</h2>

<?php if ($n === null): ?>
    <!-- Form per l'inserimento del numero -->
    <form action="" method="post">
        <label for="number">Scegli un numero:</label>
        <select id="number" name="number" required>
            <option value="">--Seleziona--</option>
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php endfor; ?>
        </select>
        <input type="submit" name="submit" value="Crea tabella">
    </form>
<?php else: ?>
    <!-- Tabella dei quadrati e cubi -->
    <h3>Tabella dei quadrati e cubi fino a <?php echo $n; ?></h3>
    <table>
        <tr>
            <th>Numero</th>
            <th>Quadrato</th>
            <th>Cubo</th>
        </tr>
        <?php for ($i = 1; $i <= $n; $i++): ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $i * $i; ?></td>
                <td><?php echo $i * $i * $i; ?></td>
            </tr>
        <?php endfor; ?>
    </table>
<?php endif; ?>

</body>
</html>
