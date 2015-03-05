<?php
    class Cd
    {
        private $title;
        private $artist;
        private $cover_art;
        private $price;

        function __construct($newTitle, $newArtist, $newCover_art, $newPrice)
        {
            $this->title = $newTitle;
            $this->artist = $newArtist;
            $this->price = $newPrice;
            $this->cover_art = $newCover_art;
        }

        function setTitle($new_title)
        {

                $this->title = $new_title;
        }

        function setArtist($new_artist)
        {
            $this->artist = $new_artist;
        }

        function setPrice($new_price)
        {
            $int_price = (integer) $new_price;
            if ($int_price != 0) {
                $this->price = $int_price;
            }
        }

        function setCoverArt($newCover_art)
        {
                $this->cover_art = $newCover_art;
        }

        function getTitle()
        {
            return $this->title;
        }

        function getArtist()
        {
            return $this->artist;
        }

        function getPrice()
        {
            return $this->price;
        }

        function getCoverArt()
        {
            return $this->cover_art;
        }

        function save()
        {
            array_push($_SESSION['cd_list'], $this);
        }

        static function getAll()
        {
            return $_SESSION['cd_list'];
        }

        static function deleteAll()
        {
            $_SESSION['cd_list'] = array();
        }
    }

?>
