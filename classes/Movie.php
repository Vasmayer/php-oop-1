<?php

class Movie
{

    public $title;
    public $genre;
    public $poster;
    public $ratings;
    public $cast;

    function __construct($title,$genre,$poster,$ratings,$cast)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->poster = $poster;
        $this->ratings = $ratings;
        $this->cast = $cast;
    }
}