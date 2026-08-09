<?php
    require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <h1 class="text-center">My Movies</h1>
        <hr>
        <div class="container py-4">
            <?php
                foreach ($movies as $movie) {
                    echo '<div class="card mb-4 rounded-4 mx-auto shadow-sm" style="max-width: 900px;">';
                    echo '  <div class="row g-0 align-items-center">';
                    echo '    <div class="col-md-4">';
                    echo '      <img src="' . $movie->image . '" class="img-fluid rounded-start h-100 w-100" alt="' . $movie->name . '">';
                    echo '    </div>';
                    echo '    <div class="col-md-8">';
                    echo '      <div class="card-body">';
                    echo '        <h2 class="card-title h4">' . $movie->name . '</h2>';
                    echo '        <p class="mb-1"><strong>Anno:</strong> ' . $movie->year . '</p>';
                    echo '        <p class="mb-1"><strong>Genere:</strong> ' . $movie->getGenre()[0] . '</p>';
                    echo '        <p class="mb-1"><strong>Descrizione Genere:</strong> ' . $movie->getGenre()[1] . '</p>';
                    echo '        <p class="mb-1"><strong>Regista:</strong> ' . $movie->getDirector() . '</p>';
                    echo '        <p class="mb-0"><strong>Trama:</strong> ' . $movie->abstract . '</p>';
                    echo '      </div>';
                    echo '    </div>';
                    echo '  </div>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>
</body>
