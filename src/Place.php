<?php
class Place
{

    private $location;
    private $howlong;
    private $image;

    function __construct($location, $howlong, $image)
    {
        $this->location = $location;
        $this->howlong = $howlong;
        $this->image = $image;
    }

    function setLocation($new_location)
    {
        $this->location = (string) $new_location;
    }

    function getLocation()
    {
        return $this->location;
    }

    function setHowlong($howlong)
    {
        $this->howlong = (string) $howlong;
    }

    function getHowlong()
    {
        return $this->howlong;
    }

    function setImage($new_image)
    {
        $this->image = (string) $new_image;
    }

    function getImage()
    {
        return $this->image;
    }

    static function getAll()
    {
        return $_SESSION['list_of_places'];
    }


    function save()
    {
        array_push($_SESSION['list_of_places'], $this);
    }

    static function deleteAll()
    {
        $_SESSION['list_of_places'] = array();
    }
}
?>
