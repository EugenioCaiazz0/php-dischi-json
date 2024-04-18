<?php

/* trasformo in string il json e lo salvo in variabile */
$json_string = file_get_contents('data/dischi.json');
var_dump($json_dischi);

/* decodifico la stringa in un elemento php */
$list = json_decode($json_string, true);
var_dump($lista_dischi);

if(isset($_POST['newDiskTitle'])) { /* verifichiamo l'esistenza del nuovo disco, per poi aggiornare il Json */
    $new_item = [
        'title' => $_POST['newDiskTitle'],
        'author' => $_POST['newDiskAuthor'],
        'year' => $_POST['newDiskYear'],
        'poster' => $_POST['newDiskPoster'],
        'genre' => $_POST['newDiskGenre']
    ];

    /* aggiungo l'elemento */
    $list[] = $new_item; 
    file_put_contents('dischi.json', json_encode($list));
}


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