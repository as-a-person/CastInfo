<?php
$ubgcol = $_POST['bgcol'];
$utxtcol = $_POST['txtcol'];
$styles = json_decode(file_get_contents('../usrsave/styles.json'), true);
$bgcol = $styles["bgcol"];
$txtcol = $styles["txtcol"];
if ($ubgcol != null|| $utxtcol != null) {
    $styarr = array("bgcol" => $ubgcol, "txtcol" => $utxtcol);
    $fp = fopen("../usrsave/styles.json", "w");
    fclose($fp);
    file_put_contents('../usrsave/styles.json', json_encode($styarr));
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Info manager - CastInfo</title>
    <style>
        body {
            background-color: <?=$bgcol?>;
            color: <?=$txtcol?>;
        }
        a {
            color: <?=$txtcol?>;
        }
    </style>
</head>
<body>
    <p>Note: Updating settings might need two reloads.</p>
    <br>
    <form method="post">
        <label for="bgcol">Background colour: </label>
        <input type="color" name="bgcol" value="<?=$bgcol?>" required="true">
        <br>
        <label for="txtcol">Text colour: </label>
        <input type="color" name="txtcol" value="<?=$txtcol?>" required="true">
        <br>
        <input type="submit">
    </form>
    <button onclick="window.open('../local/index.php', '_top');">Exit</button>
</body>
</html>