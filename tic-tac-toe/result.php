<?php
require_once "templates/header.php";

if (! playersRegistered()) {
    header("location: index.php");
}

resetBoard();
?>

<table class="wrapper">
    <tr>
        <td>

            <div class="welcome">

                <h1>
                    <?php
                    if ($_GET['player']) {
                        echo currentPlayer() . " wygrałeś!";
                    }
                    else {
                        echo "Remis :(";
                    }
                    ?>
                </h1>

                <div class="player-name">
                    <?php echo "Wynik gracza " . playerName('x')?> : <b><?php echo score('x')?></b>
                </div>

                <div class="player-name">
                    <?php echo "Wynik gracza " . playerName('o')?> : <b><?php echo score('o')?></b>
                </div>

                <a href="play.php">Jeszcze raz?</a><br />

                <a href="index.php" class="reset-btn">Reset</a>
            </div>

        </td>
    </tr>
</table>

</body>
</html>

