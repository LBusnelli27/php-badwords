<?php
    $string = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam mollitia quos ut molestiae sapiente facilis a unde, laborum iusto quidem, similique corporis. Laudantium ipsum officia saepe nihil eligendi a mollitia!';
    $stringBanned = str_replace($_GET["bannedWord"], "***", $string);

    $lenghtBase = strlen($string);
    $lenghtBanned = strlen($stringBanned);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <h3><?php echo $string ?></h3>
    <h1>La lunghezza: <?php echo $lenghtBase ?></h1>
    <h3><?php echo $stringBanned ?></h3>
    <h1>La lunghezza: <?php echo $lenghtBanned ?></h1>
</body>
</html>