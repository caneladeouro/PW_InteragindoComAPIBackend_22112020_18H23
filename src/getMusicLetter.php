<?php

namespace GET_MUSIC_LETTER;

header("Content-Type: aplication/json");

function getMusicLetter (): object {
    return new class{
        private $artist = "U2";
        private $song = "One";
        public $url;
        public $letterURL;
        public $artistURL;
        public $stretchURL;
        public $albumURL;
        public $artURL;
        public function __construct()
        {
            $this->url = "https://api.vagalume.com.br/search.php"
            . "?art=" . $this->artist
                . "&mus=" . $this->song
                . "&extra=artpic"
                . "&apikey={key}";
        }
    };
}
$GetMusicLetter = getMusicLetter();


$ch = curl_init($GetMusicLetter->url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

echo (curl_exec($ch));
