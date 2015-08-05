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
        $this->location = (string) $new_description;
    }

    function getLocation()
    {
        return $this->location;
    }
}
?>
