<?php
include __DIR__ . './Model.php';


class Book extends Model
{

    public $id;
    public $title;
    public $plot;

    public $cover_image;

    public static $fields = 'title, plot, cover_image';
    public function __construct()
    {
    }

    //methods
}