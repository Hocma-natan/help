<?php
class Animal{
private  $name;
private $jeuxVideo;
protected $force;
private $distanceObjectif;

public function __construct($jeuxVideo, $name, $force, $distanceObjectif=100)
{
    $this->jeuxVideo = $jeuxVideo;
    $this->name = $name;
    $this->force->$force;
    $this->distanceObjectif = $distanceObjectif;
}

public function courir(){
    $this->force -= 2;
    $this->distanceObjectif-=10;
    echo('le perso '.$this->name.' cours<br>');
}
public function marcher(){
    $this->force -= 1;
    echo('le perso '.$this->name.' marche<br>');
}
public function sauter(){
    $this->force -= 2;
    $this->distanceObjectif-=10;
    echo('le perso '.$this->name.' saute<br>');
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

}
?>