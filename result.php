<?php
$bad_words = $_GET['badwords'];
$paragraph = $_GET['paragraph'];
$censure = str_replace($bad_words, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?= $paragraph ?></h1>
    <h2><?= $bad_words ?></h2>
    <p><?= strlen($paragraph) ?></p>
    <h1><?= $censure ?></h1>
    <p><?= strlen($censure) ?></p>
</body>

</html>