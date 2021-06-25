<?php

    $variabile = "Lorem ipsum dolor sit, amet consectetur adipisicing elit sit. Incidunt dolorum    soluta odit? Molestiae doloribus cum sunt reiciendis eveniet, sit ratione reprehenderit sit tempora ab iure ipsam sit repudiandae quis labore facilis inventore asperiores!" ;
    
    $parolaDaCensurare =$_GET["parola"];
    $testoCensurato = str_replace( $parolaDaCensurare , "***", $variabile);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Testo originale</h1>
    <h3> <?php echo $variabile; ?></h3>
    <h1>Testo censurato</h1>
    <h3><?php echo $testoCensurato ?></h3>
    <p> la stringa è lunga <?php echo $lunghezza_stringa = strlen($variabile) ?> caratteri </p>
</body>
</html>