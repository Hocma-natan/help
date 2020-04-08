<?php
class Herbivore extends Animal{
    private $alignement = 20;
    public function encourager(){
        $this->alignement -= 5;
        $this->force += 2;
        echo($this->name.'encourage le heros !');
    }
    public function __construct($jeuxVideo, $name, $force, $distanceObjectif=100, $alignement)
    {
        parent::__construct($jeuxVideo, $name, $force, $distanceObjectif, $alignement);
    }
}
?>