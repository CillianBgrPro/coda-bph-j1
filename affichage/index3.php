<?php
    $title = "Le titre de ma page";
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1</title>
    </head>
    <body>
        <h1>
            <?=
            $title
            ?>
        </h1>
    </body>
</html>




<?php
    $connectedUser = false;
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2</title>
    </head>
    <body>
        <header>
            <nav>
                <?php if($connectedUser == FALSE) { ?>
                    <a href="#">Connexion</a>
                <?php } 
                else { ?>
                <a href="#">Déconnexion</a>
                <?php } ?>
            </nav>
        </header>
    </body>
</html>






<?php
    $users = [
        [
            "firstName" => "Bugs",
            "lastName" => "Bunny"
        ],
        [
            "firstName" => "Roger",
            "lastName" => "Rabbit"
        ]
    ];
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3</title>
    </head>
    <body>
        <h1>Liste des utilisateurs</h1>
        <ul>
            <?php foreach($users as $user){ ?>
                <li><?= $user["firstName"] . " " . $user["lastName"] ?></li>
            <?php } ?>
        </ul>
    </body>
</html>










<?php
    $grades = [
        "french" => [12, 9, 13],
        "english" => [18, 12, 11],
        "maths" => [15, 11, 13]
    ];
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
</head>
<body>

<h1>Liste des notes</h1>

<ul>
    <?php foreach ($grades as $subject => $notes) { ?>
        <li>
            <strong><?= $subject ?></strong> :
            <?= implode(", ", $notes) ?>
        </li>
    <?php } ?>
</ul>

</body>
</html>
