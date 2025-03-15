<?php
session_start();

if (!isset($_SESSION['board'])) {
    $_SESSION['board'] = array_fill(0, 9, '-');
    $_SESSION['currentPlayer'] = 'X';
    $_SESSION['gameOver'] = false;
}

if (isset($_POST['cell'])) {
    $cell = intval($_POST['cell']);
    if ($_SESSION['board'][$cell] === '-' && !$_SESSION['gameOver']) {
        $_SESSION['board'][$cell] = $_SESSION['currentPlayer'];
        if (checkWinner($_SESSION['board'])) {
            $_SESSION['gameOver'] = true;
            $message = $_SESSION['currentPlayer'] . " a gagné!";
        } elseif (isBoardFull($_SESSION['board'])) {
            $_SESSION['gameOver'] = true;
            $message = "Match nul!";
        } else {
            $_SESSION['currentPlayer'] = ($_SESSION['currentPlayer'] === 'X') ? 'O' : 'X';
        }
    }
}

if (isset($_POST['reset'])) {
    $_SESSION['board'] = array_fill(0, 9, '-');
    $_SESSION['currentPlayer'] = 'X';
    $_SESSION['gameOver'] = false;
    $message = "";
}

function checkWinner($board) {
    $winningCombinations = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], // Lignes
        [0, 3, 6], [1, 4, 7], [2, 5, 8], // Colonnes
        [0, 4, 8], [2, 4, 6]             // Diagonales
    ];

    foreach ($winningCombinations as $combination) {
        if ($board[$combination[0]] !== '-' &&
            $board[$combination[0]] === $board[$combination[1]] &&
            $board[$combination[1]] === $board[$combination[2]]) {
            return true;
        }
    }
    return false;
}

function isBoardFull($board) {
    return !in_array('-', $board);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu du Morpion</title>
    <style>
        table { border-collapse: collapse; }
        td { width: 50px; height: 50px; text-align: center; }
        button { width: 100%; height: 100%; font-size: 24px; }
    </style>
</head>
<body>
    <h1>Jeu du Morpion</h1>
    <form method="post">
        <table>
            <?php for ($i = 0; $i < 3; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++): ?>
                        <td>
                            <button type="submit" name="cell" value="<?php echo $i * 3 + $j; ?>">
                                <?php echo htmlspecialchars($_SESSION['board'][$i * 3 + $j]); ?>
                            </button>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
        <br>
        <button type="submit" name="reset">Réinitialiser la partie</button>
    </form>
    <?php if (isset($message)): ?>
        <p><?php echo htmlspecialchars($message); ?></p>
    <?php endif; ?>
</body>
</html>