<?php


require_once __DIR__."/classes/Movie.php";


$movies = [

    new Movie([
        "title" => "Via col Vento",
        "originalTitle" => "Gone with the Wind", 
        "year" => "1939", 
        "minutes" => "238", 
        "genres" => ['drammatico', 'guerra', 'sentimentale', 'storico']
    ]),

    new Movie([
        "title" => "Forrest Gump",
        "originalTitle" => "Forrest Gump", 
        "year" => "1994", 
        "minutes" => "142", 
        "genres" => ['commedia','drammatico','guerra' ]    
    ])
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film database</title>
</head>
<body>
    
    <?php foreach($movies as $movie): ?>
        <ul>
            <li class=''><?= $movie->getMainInfo(); ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>
