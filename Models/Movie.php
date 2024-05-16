<?php
include __DIR__ . './Model.php';


class Movie extends Model
{

    public $id;
    public $title;
    public $original_title;

    public $language;
    public $date;
    public $vote;
    public $image;

    public static $fields = 'title, original_title, language, date, vote, image';
    public function __construct()
    {
    }

    //methods
}