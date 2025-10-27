<?php

declare(strict_types = 1); //permet d'éviter les conversions automatiques 

session_start();

if (!isset($_SESSION['board'])) {
    $_SESSION['board'] = array_fill(0, 9, '-');
    $_SESSION['current_player'] = 'X';
}

if ($_POST) {
    if (isset($_POST['cell']) && $_SESSION['board'][$_POST['cell']] == '-') {
        $_SESSION['board'][$_POST['cell']] = $_SESSION['current_player'];
        $_SESSION['current_player'] = ($_SESSION['current_player'] == 'X') ? 'O' : 'X';
    }
    
    if (isset($_POST['reset'])) {
        $_SESSION['board'] = array_fill(0, 9, '-');
        $_SESSION['current_player'] = 'X';
    }
}

// Vérification simple de victoire
function checkWin($board) {
    $lines = [[0,1,2],[3,4,5],[6,7,8],[0,3,6],[1,4,7],[2,5,8],[0,4,8],[2,4,6]];
    foreach ($lines as $line) {
        if ($board[$line[0]] != '-' && 
            $board[$line[0]] == $board[$line[1]] && 
            $board[$line[1]] == $board[$line[2]]) {
            return $board[$line[0]];
        }
    }
    return null;
}
?>

<table>
    <?php for ($i = 0; $i < 3; $i++): ?>
    <tr>
        <?php for ($j = 0; $j < 3; $j++): ?>
        <td>
            <?php $cell = $i * 3 + $j; ?>
            <?php if ($_SESSION['board'][$cell] == '-'): ?>
                <form method="post">
                    <button name="cell" value="<?= $cell ?>">-</button>
                </form>
            <?php else: ?>
                <?= $_SESSION['board'][$cell] ?>
            <?php endif; ?>
        </td>
        <?php endfor; ?>
    </tr>
    <?php endfor; ?>
</table>

<form method="post">
    <button name="reset">Réinitialiser</button>
</form>