<?php

/**
 * Info
 * @param int $id
 * @param string $name 
 * @param string $genre
 * @param int $year
 * @param string $duration
 */

class Movie
{
    public $id;
    public $name;
    public $genre;
    public $year;
    public $duration;
    public function __construct($id, $name, $genre, $year, $duration)
    {
        $this->id = $id;
        $this->name = $name;
        $this->genre = $genre;
        $this->year = $year;
        $this->duration = $duration;
    }
}
