<?php
class Personnage{
    private $nom;
    private $jeuxVideo;
    protected $force;
    private $distanceObjectif;

    public function courir(){
        $this->force -= 2;
        $this->distanceObjectif-=10;
        echo('le perso '.$this->name.' cours');
    }
    public function marcher(){
        $this->force -= 1;
        echo('le perso '.$this->name.' marche');
    }
    public function sauter(){
        $this->force -= 2;
        $this->distanceObjectif-=10;
        echo('le perso '.$this->name.' saute');
    }
    public function getAllInfo() {
        return $this;
    }

    public function getDistanceObjectif() {
        return $this->distanceObjectif;
    }

    public function getForce() {
        return $this->force;
    }
    public function __construct($jeuxVideo, $name, $force, $distanceObjectif=100)
    {
        $this->jeuxVideo = $jeuxVideo;
        $this->name = $name;
        $this->force = $force;
        $this->distanceObjectif = $distanceObjectif;
    }
}
?>