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

    function getTitle()
    {
        return $this->title;
    }
    function getGenre()
    {
        return $this->genre;
    }
    function getPoster()
    {
        return $this->poster;
    }
    function getRatings()
    {
        return $this->ratings;
    }
    function getCast()
    {
        return $this->cast;
    }

    function setTitle($new_value)
    {
        $this->title = $new_value;
        return $this->title;
    }
    function setGenre($new_value)
    {
        $this->genre = $new_value;
        return $this->genre;
    }
    function setPoster($new_value)
    {
        $this->poster = $new_value;
        return $this->poster;
    }
    function setRatings($new_value)
    {
        $this->ratings = $new_value;
        return $this->ratings;
    }
    function setCast($new_value)
    {
        $this->cast = $new_value;
        return $this->cast;
    }
}