<?php
    require_once __DIR__.'/db.php';
?>


<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP 2</title>
    </head>
    <body>
        <h1>PHP OOP 2</h1>

        <h2>Cibo</h2>
        <ul>
            <?php foreach ($arrayCibo as $cibo) {?>
                <li>
                    <?php echo $cibo->print(); ?>
                </li>
            <?php } ?>
        </ul>

        <h2>Cucce</h2>
        <ul>
            <?php foreach ($arrayCucce as $cuccia) {?>
                <li>
                    <?php echo $cuccia->print(); ?>
                </li>
            <?php } ?>
        </ul>

        <h2>Giochi</h2>
        <ul>
            <?php foreach ($arrayGiochi as $gioco) {?>
                <li>
                    <?php echo $gioco->print(); ?>
                </li>
            <?php } ?>
        </ul>


    </body>
</html>
