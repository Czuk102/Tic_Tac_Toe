<?php
require_once "./templates/header.php";
?>

<form method="post" action="register-players.php">
    <div class="welcome">
        <h1>KÓŁKO i KRZYŻYK</h1>
        <h2>Proszę o podanie imion!</h2>

        <div class="player-name">
            <label for="player-x">Gracz nr 1 (X)</label>
            <input type="text" id="player-x" name="player-x" required />
        </div>

        <div class="player-name">
            <label for="player-o">Gracz nr 2 (O)</label>
            <input type="text" id="player-o" name="player-o" required />
        </div>

        <button type="submit">Start</button>
    </div>
</form>

<?php

