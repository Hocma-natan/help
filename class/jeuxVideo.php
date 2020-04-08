<?php
class JeuxVideo{
    public $personnages = [];
    public $editeur;
    public $animals = [];
    public function startGame(){
        echo("le game iz started");
    }
    public function __construct($personnages, $editeur, $animals)
    {
        $this->personnages = $personnages;
        $this->editeur = $editeur;
        $this->animals = $animals;
        echo('je crée un jeuxVideo qui contient les perso '.$this->personnages.'<br>');
        echo('qui est editer par '.$this->editeur.'<br>');
        echo('je crée un jeuxVideo qui contient les animaux '.$this->animals.'<br>');
    }

}
?>