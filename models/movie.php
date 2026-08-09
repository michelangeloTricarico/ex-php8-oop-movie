<?php
include_once 'traits/hasDirector.php';
include_once 'models/genre.php';

class Movie{
    public $name;
    public $year;
    protected $director;
    protected Genre $genre;
    public $abstract;
    public $image;

    public function __construct($name, $year, Genre $genre, $abstract, $image) {
        $this->name = $name;
        $this->year = $year;
        $this->genre = $genre;
        $this->abstract = $abstract;
        $this->image = $image;
    }

    use hasDirector;

    public function getDirector() {
        return $this->director;
    }

    public function getGenre() {
        return $this->genre;
    }
}
