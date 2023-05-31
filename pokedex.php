<!DOCTYPE html>
<html>
<head>
    <title>Pokémon Stats</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            margin-bottom: 15px;
            font-size: 24px;
            font-weight: bold;
        }

        .card-text {
            margin-bottom: 10px;
        }

        .card-img-right {
            width: 100%;
            max-width: 200px;
            height: auto;
            float: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Pokedex</h1>
        <?php
        $xml = simplexml_load_file('pokemoni.xml');

        foreach ($xml->entry as $pokemon) {
            $name = $pokemon->name;
            $type = $pokemon->type;
            $hp = $pokemon->stats->hp;
            $attack = $pokemon->stats->attack;
            $defense = $pokemon->stats->defense;
            $speed = $pokemon->stats->speed;
            $image = $pokemon->image;
            ?>

            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="card-title"><?php echo $name; ?></h2>
                            <p class="card-text"><strong>Type:</strong> <?php echo $type; ?></p>
                            <p class="card-text"><strong>HP:</strong> <?php echo $hp; ?></p>
                            <p class="card-text"><strong>Attack:</strong> <?php echo $attack; ?></p>
                            <p class="card-text"><strong>Defense:</strong> <?php echo $defense; ?></p>
                            <p class="card-text"><strong>Speed:</strong> <?php echo $speed; ?></p>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" class="card-img-right">
                        </div>
                    </div>
                </div>
            </div>

            <?php
        }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
