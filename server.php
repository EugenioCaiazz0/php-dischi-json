<?php

/* trasformo in string il json e lo salvo in variabile */
$json_dischi = file_get_contents('data/dischi.json');
var_dump($json_dischi);

/* decodifico la stringa in un elemento php */
$lista_dischi = json_decode($json_dischi);
var_dump($lista_dischi);
?>