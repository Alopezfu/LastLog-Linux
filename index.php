<?php $name = exec('hostname');?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>LastLog | auth.log</title>
</head>
<body>
    <h1>Access logs to <?= $name ?></h1>
    <a href="clear.php">Clear log</a>
    <div>
    <?php
        $file = file('out');
        foreach ($file as $num_l�nea => $l�nea) {
            echo "<p><b>#{$num_l�nea}</b> : " . htmlspecialchars($l�nea) . "<br /><p>";
        }
    ?>
    </div>
</body>
</html>