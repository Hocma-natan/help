<?php
    require_once 'include_class.php';

    $persoGentil = new PersonnageGentil('Docus', 'Sadida', 10000, 1000);
    $persoMechant = new PersonnageMechant('Dofus', 'Cra', 200, 20, 10, 20);

    while ($persoMechant->getForce() > 0 && $persoMechant->getDistanceObjectif()>0 &&
    $persoGentil->getForce() > 0 && $persoGentil->getDistanceObjectif() >0)
    {
        $attaque = $persoMechant->attaquer();

        $persoGentil->subirAttaque($attaque);

        var_dump($persoGentil);
        var_dump($persoMechant);

        if($persoGentil->getForce() <= 0) {
            echo('Le personnage gentil est mort !! ');
        }

        if($persoMechant->getForce() <= 0) {
            echo('Le personnage méchant est mort !! ');
        }
    }
?>