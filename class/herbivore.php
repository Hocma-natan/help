<?php
class Herbivore extends Animal{
    private $alignement = 20;
    public function heal(){
        $this->alignement -= 5;
        $this->force += 2;
    }
    public function __construct($jeuxVideo, $name, $force, $distanceObjectif=100, $alignement)
    {
        parent::__construct($jeuxVideo, $name, $force, $distanceObjectif, $alignement);
    }
}
?>