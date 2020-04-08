<?php
class PersoMechant extends Personnage{
private $attacMin;
private $attacMax;

public function Attac(){
    echo('le perso attaque');
    echo('il fait '.rand($this->attacMin, $this->attacMax).' dmg<br>');
}

public function __construct($jeuxVideo, $name, $force, $distanceObjectif=100, $attacMin, $attacMax)
{
    parent::__construct($jeuxVideo, $name, $force, $distanceObjectif, $attacMin, $attacMax);
}
}
?>