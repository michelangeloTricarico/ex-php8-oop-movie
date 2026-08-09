<?php

class Genre {
    protected $genre;
    protected $description;
    
    public function __construct($genre, $description) {
        $this->genre = $genre;
        $this->description = $description;
    }

    function setGenre($genre) {
        $this->genre = $genre;
    }

    function getGenre() {
        return $this->genre;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function getDescription() {
        return $this->description;
    }
}