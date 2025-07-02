<?php
$styles = json_decode(file_get_contents('../usrsave/styles.json'), true);
$bgcol = $styles["bgcol"];
$txtcol = $styles["txtcol"];
echo '<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="../local/favicon.ico">
<title>Mainpage - CastInfo</title>';
echo "<style>
body {
background-color: $bgcol;
color: $txtcol;
}
a {
color: $txtcol;
text-decoration: none;
}
</style>";
echo '</head>
<body>
<a href="../local/hexbabel.php">Hex babel</a>
<br>
<a href="../local/manage.array.php">Array manage</a>
<br>
<a href="../local/manage.info.php">Info manage</a>
</body>
</html>';