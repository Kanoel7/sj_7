<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hlavny nadpis</h1>
    <?php

    echo "<h2>sposob1</h2>";
    $meno = "Adam";
    echo $meno;
    echo "<br/>";
    var_dump($meno);
    
    $farby = array("Cervena", "Zelena", "Modra");
    echo $farby[0];
    echo("<br/>");

    $data = array("Peter" => 3, "Adam" => 8, "Ana" => 19);

    foreach($farby as $farba){
        echo "Farba ", $farba, "<br/>";
    }

    echo("<br/>");

    foreach($data as $name => $age){
        echo "$name ma $age rokov! <br/>";
    }

     //dufuysudfusuidvuhsuhdv
    ?>
</body>
</html>