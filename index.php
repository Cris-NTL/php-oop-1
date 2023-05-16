<?php

class Movie
{

    // Variables
    public $title;
    public $year;
    public $genre;
    public $director;
    public $language;

    // Costructor
    function __construct($_title, $_director, $_genre, $_year, $_language)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->language = $_language;
    }

    // Method
    public function showDetails()
    {
        echo "<p>Title: {$this->title}</p>";
        echo "<p>Year: {$this->year}</p>";

        // Show more genres
        $genres = implode(", ", $this->genre);
        echo "<p>Genre: {$genres}</p>";

        echo "<p>Director: {$this->director}</p>";
        echo "<p>Language: {$this->language}</p>" . "<br>";
    }
}

// Object
$movie = new Movie("The New World", "Philip IV", ["Comedy", "Drama"], "1927", "EN");
$movie_1 = new Movie("The Old World", "Philip III", ["Comedy", "Drama"], "1917", "EN");

// Print
$movie->showDetails();
$movie_1->showDetails();
