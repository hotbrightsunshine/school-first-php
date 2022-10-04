<?php 
    $listan = array("Primo", "Secondo", "Terzo");
    $listal = array("first" => 1, "second" => 2, "third" => 3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Esercizio per casa</title>
</head>
<body>
    <div>
        <h1 style="color: red;"> Benvenuto! </h1>
        <p>La pagina è stata caricata alle ore: <?php echo date("H:i"); ?></p>
        <p><?php echo 'Terzo elemento di $listan: ' .  $listan[3-1]; ?></p>
        <p><?php echo '$listal["first"]: ' .  $listal["first"]; ?></p>
    </div>
</body>
</html>