<?php

    const API_URL = "https://whenisthenextmcufilm.com/api";
    #inicializamos la sesion de cURL; ch = cURL handle
    $ch = curl_init(API_URL);
    #indiacar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    $data = json_decode($result, true);
   
    curl_close($ch);
?>

<head>
    <title>La próxima película de Marvel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<main>
    <section>
        <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de <?= $data["title"]; ?>">
    </section>

    <hgroup>
        <h2><?=$data["title"];?> </h2>
        <p>Fecha de Estreno: <?=$data["release_date"]; ?></p>
        <p>La siguiente película de Marvel es: <span style="font-weight: bold;"><?=$data["following_production"]["title"]; ?></span></p>
    </hgroup>
</main>









<style>
    :root{
        color-scheme: ligt dark;
    }

    body{
        display: grid;
        place-content: center;
    }
    h2,p{
        text-align: center;
    }
    section{
        display: grid;
        place-content: center;
    }
    img{
        border-radius: 10px;
    }
</style>