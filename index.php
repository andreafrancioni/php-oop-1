<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-1</title>
</head>

<body>
    <?php
    require __DIR__ . '/Models/Movie.php';

    $film1 = new Movie("Harry Potter e il calice di fuoco", "Harry e i suoi amici combattono per la vittoria", 5, 2006);
    $film2 = new Movie("Avengers: Infinity War", "L'ultima battaglia è alle porte", 5, 2018);

    var_dump($film1);
    echo "<br>";

    var_dump($film2);
    echo "<br>";

    echo $film1->getMovie();
    echo "<br>";

    echo $film2->getMovie();
    ?>
</body>

</html>