<?php
class PersoGentil extends Personnage{

public function subirAttaque($valeurAttaque) {
    echo('Je subi une attaque de '. $valeurAttaque);
    $this->force -= $valeurAttaque;
}
public function  __construct($jeuxVideo, $name, $force, $distanceObjectif=100)
{
    parent::__construct($jeuxVideo, $name, $force, $distanceObjectif);
}
}
?>