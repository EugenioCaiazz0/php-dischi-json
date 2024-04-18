<?php

/* trasformo in string il json e lo salvo in variabile */
$json_string = file_get_contents('data/dischi.json');
var_dump($json_dischi);

/* decodifico la stringa in un elemento php */
$list = json_decode($json_string);
var_dump($lista_dischi);

header('Content-Type: application/json'); /* ricompongo i dati sotto forma di json */

echo json_encode($list);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
</body>
</html>