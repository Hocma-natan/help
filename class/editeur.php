<?php
class Editeur{
    public $name;
    public $jeuxVideo = [];
    public function publishGame(){
        echo('publie les jeux : '.$this->jeuxVideo);
    }
    public function __construct($name, $jeuxVideo)
    {
        $this->name = $name;
        $this->jeuxVideo = $jeuxVideo;
        echo('je crée un editeur qui s\'appel' .$name.' et qui contients les jeux : '.$jeuxVideo.'<br>');
    }
}
?>