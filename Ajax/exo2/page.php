<?php

    $fruits = [
        'cerise',
        'orange',
        'citron',
    ];

?><!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Chargement d'une section en AJAX</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="exo2.js"></script>
</head>
<body>

    <select name="fruit" id="fruit">
        <?php foreach($fruits as $fruit) : ?>
        <option value="<?= $fruit ?>"><?= $fruit ?></option>
        <?php endforeach; ?>
    </select>

    <section id="fruit-details">
        
    </section>
</body>
</html>