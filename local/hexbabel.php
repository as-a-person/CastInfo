<?php
$styles = json_decode(file_get_contents('../usrsave/styles.json'), true);
$bgcol = $styles["bgcol"];
$txtcol = $styles["txtcol"];
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../local/favicon.ico">
        <title>Hex babel - CastInfo</title>
        <style>
            body {
                background-color: <?=$bgcol?>;
                color: <?=$txtcol?>
            }
            a {
                color: <?=$txtcol?>;
            }
        </style>
    </head>
    <body>
<?php
$xarray = $_POST['xarray'];
$yarray = $_POST['yarray'];
$rarray = '';
if (is_null($xarray) || is_null($yarray)) {
    echo '<form method="post">
    <p>X:</p>
    <input type="number" name="xarray" required="true">
    <br>
    <p>Y:</p>
    <input type="number" name="yarray" required="true">
    <br>
    <br>
    <input type="submit">
    <br>
    </form>
    <br>
    <p>Generates a babel in hex</p>';
} else {
    echo '<table>';
    for ($a = 0; $a <= $xarray; $a++) {
        echo '<tr>';
        for ($b = 1; $b <= $yarray; $b++) {
            echo '<th>';
            echo dechex(rand(0, 15));
            echo '</th>';
        }
        echo '</tr>';
    }
    echo '</table>
    <button onclick="window.open(\'../local/hexbabel.php\', \'_top\');">Reload Hex babel</button>
    <button onclick="window.open(\'../local/index.php\', \'_top\');">Exit Hex babel</button>';
}
?>
    </body>
</html>