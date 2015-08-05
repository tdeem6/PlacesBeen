<?php
class Place
{

    private $location;

    function __construct($location)
    {
        $this->location = $location;
    }

    function setLocation($new_location)
    {
        $this->location = (string) $new_location;
    }

    function getLocation()
    {
        return $this->location;
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
