<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style='font-size: 30px'>
    <?php
        $num = rand(10,20);
        $lista = [];
        $colori = array("red", "yellowgreen", "black", "cyan", "green");
        for ($i=0; $i <= $num; $i++) { 
            $lista[] = $i;
        }
        echo "<ol>";
        foreach ($lista as $key) {
            $col = rand(0,4);
            echo "<li style = 'color: $colori[$col]'> $key </li>";
        }
        echo "</ol>";
    ?>
</body>
</html>