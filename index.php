<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$name = 'yousf';
$fruit = ' apple';
echo " My name is $name " ;
echo "<p>I ate 10 {$fruit}s </p>" ;
$skills = array('PHP', 'HTML', 'CSS');
?>
<ul>
    <?php
    foreach ($skills as $skill){ ?>
        <li><?= $skill?></li>
    <?php } ?>

</ul>
</body>
</html>