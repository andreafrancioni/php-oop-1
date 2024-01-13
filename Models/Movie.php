<?php

class Movie
{
    public $title;
    public $description;
    public $rating;
    public $publish_date;

    public function __construct($title, $description, $rating, $publish_date)
    {
        $this->title = $title;
        $this->description = $description;
        $this->rating = $rating;
        $this->publish_date = $publish_date;
    }
}
