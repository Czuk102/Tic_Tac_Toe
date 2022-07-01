<?php
require_once "templates/header.php";

if (! playersRegistered()) {
    header("location: index.php");
}

if ($_POST['cell']) {
    $win = play($_POST['cell']);

    if ($win) {
        header("location: result.php?player=" . getTurn());
    }
}

if (playsCount() >= 9) {
    header("location: result.php");
}
?>

<h2><?php echo currentPlayer() ?> twoja kolej</h2>

<form method="post" action="play.php">

    <table class="tic-tac-toe">
        <tbody>

        <?php
        $lastRow = 0;
        for ($i = 1; $i <= 9; $i++) {
            $row = ceil($i / 3);

            if ($row !== $lastRow) {
                $lastRow = $row;

                if ($i > 1) {
                    echo "</tr>";
                }

                echo "<tr class='row-{$row}'>";
            }

            ?>

            <td class="cell-<?= $i ?> ">
                <?php if (getCell($i) === 'x'): ?>
                    <span>X</span>
                <?php elseif (getCell($i) === 'o'): ?>
                    <span>O</span>
                <?php else: ?>
                    <!-- dopóki nie klikniesz to nie działa -->
                    <input type="radio" name="cell" value="<?= $i ?>" onclick="enableButton()"/>
                <?php endif; ?>
            </td>

        <?php } ?>


        </tbody>
    </table>

    <button type="submit" disabled id="play-btn">Play</button>

</form>

<script>
    function enableButton() {
        document.getElementById('play-btn').disabled = false;
    }
</script>

<?php
require_once "templates/footer.php";
