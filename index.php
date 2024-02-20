<?php
$matches = [
    [
        "home_team" => "Olimpia Milano", 
        "away_team" => "Cantù", 
        "score_home_team" => 55, 
        "score_away_team" => 60
    ],
    [
        "home_team" => "Virtus Bologna", 
        "away_team" => "Dinamo Sassari", 
        "score_home_team" => 72, 
        "score_away_team" => 68
    ],
    [
        "home_team" => "EA7 Emporio Armani Milano",
        "away_team" => "Fortitudo Bologna", 
        "score_home_team" => 80, 
        "score_away_team" => 75
    ],
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Snacks Blocco 1</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="m-5">
        <ul class="list-unstyled">
            <?php foreach ($matches as $match) : ?>
                <li><?= $match['home_team'] ?> - <?= $match['away_team'] ?> | <?= $match['score_home_team'] ?>-<?= $match['score_away_team'] ?></li>
            <?php endforeach; ?>
        </ul>

        <hr>
    
        <form action="script.php" method="GET">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" step="1">
            </div>      
            <button class="btn btn-primary">Conferma</button>
        </form>
    </main>
</body>

</html>