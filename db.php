<?php
    require_once 'models/movie.php';
    require_once 'models/genre.php';
    require_once 'traits/hasDirector.php';

    $movies[] = new Movie('Inception', 2010, new Genre('Fantascienza', 'Genere ed ambientazione non realistica'), 'Un ladro specializzato nel rubare informazioni attraverso i sogni riceve l’incarico di impiantare un’idea nella mente di un uomo.', 'https://image.tmdb.org/t/p/w500/oYuLEt3zVCKq57qu2F8dT7NIa6f.jpg');
    $movies[] = new Movie('The Dark Knight', 2008, new Genre('Azione','Azione, violenza e tensione'), 'Batman affronta il Joker, un criminale imprevedibile che porta il caos a Gotham City.', 'https://image.tmdb.org/t/p/w500/qJ2tW6WMUDux911r6m7haRef0WH.jpg');
    $movies[] = new Movie('Pulp Fiction', 1994, new Genre('Crime', 'Genere caratterizzato da elementi di crimine e violenza'), 'Le storie di diversi personaggi del mondo criminale di Los Angeles si intrecciano in una narrazione non lineare.', 'https://image.tmdb.org/t/p/w500/d5iIlFn5s0ImszYzBPb8JPIfbXD.jpg');
    $movies[] = new Movie('The Matrix', 1999, new Genre('Fantascienza', 'Genere ed ambientazione non realistica'), 'Un programmatore scopre che la realtà che conosce è una simulazione controllata dalle macchine.', 'https://image.tmdb.org/t/p/w500/f89U3ADr1oiB1s9GkdPOEpXUk5H.jpg');
    $movies[] = new Movie('Interstellar', 2014, new Genre('Fantascienza', 'Genere ed ambientazione non realistica'), 'Un gruppo di astronauti attraversa un wormhole alla ricerca di un nuovo pianeta abitabile.', 'https://image.tmdb.org/t/p/w500/gEU2QniE6E77NI6lCU6MxlNBvIx.jpg');
    $movies[] = new Movie('Forrest Gump', 1994, new Genre('Commedia', 'Genere caratterizzato da elementi di comicità e umorismo'), 'La vita straordinaria di Forrest Gump attraverso alcuni dei momenti più importanti della storia americana.', 'https://image.tmdb.org/t/p/w500/arw2vcBveWOVZr6pxd9XTd1TdQa.jpg');
    $movies[] = new Movie('The Shawshank Redemption', 1994, new Genre('Drammatico', 'Genere caratterizzato da elementi di drammaticità'), 'Un uomo condannato ingiustamente all’ergastolo mantiene viva la speranza e costruisce una profonda amicizia.', 'https://image.tmdb.org/t/p/w500/9cqNxx0GxF0bflZmeSMuL5tnGzr.jpg');
    $movies[] = new Movie('The Godfather', 1972, new Genre('Drammatico', 'Genere caratterizzato da elementi di drammaticità'), 'La storia della famiglia mafiosa Corleone e della trasformazione di Michael Corleone.', 'https://image.tmdb.org/t/p/w500/3bhkrj58Vtu7enYsRolD1fZdja1.jpg');
    $movies[] = new Movie('Fight Club', 1999, new Genre('Thriller', 'Genere caratterizzato da elementi di thriller'), 'Un uomo insoddisfatto della propria vita fonda un misterioso club clandestino di combattimento.', 'https://image.tmdb.org/t/p/w500/pB8BM7pdSp6B6Ih7QZ4DrQ3PmJK.jpg');
    
    $movies[0]->setDirector('Christopher Nolan');
    $movies[1]->setDirector('Christopher Nolan');
    $movies[2]->setDirector('Quentin Tarantino');
    $movies[3]->setDirector('The Wachowskis');
    $movies[4]->setDirector('Christopher Nolan');
    $movies[5]->setDirector('Robert Zemeckis');
    $movies[6]->setDirector('Frank Darabont');
    $movies[7]->setDirector('Francis Ford Coppola');
    $movies[8]->setDirector('David Fincher');
?>
