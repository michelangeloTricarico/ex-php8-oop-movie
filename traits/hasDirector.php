<?php 
trait hasDirector {
    protected $director;

    public function __construct($director) {
        $this->director = $director;
    }

    public function getDirector() {
        return $this->director;
    }

    public function setDirector($director) {
        $this->director = $director;
    }
}