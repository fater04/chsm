<?php
/**
 * ServiceControlleur.php
 * medical
 * @author : fater
 * @created :  1:51 PM,3/24/2021,2021
 **/

namespace app\DefaultApp\Controlleurs;


use systeme\Controlleur\Controlleur;

class ServiceControlleur extends Controlleur
{
    public function chirugicaux()
    {
        $variable['titre'] = "Chirugicaux";
        return $this->render("services/chirugicaux", $variable);
    }

    public function gestion()
    {
        $variable['titre'] = "Gestion du Patient";
        return $this->render("services/gestion_patient", $variable);
    }

    public function hospitalier()
    {
        $variable['titre'] = "Hospitaliers";
        return $this->render("services/hospitaliers", $variable);
    }

    public function para()
    {
        $variable['titre'] = "para-Clinique";
        return $this->render("services/para_clinique", $variable);
    }

    public function ambulatoire()
    {
        $variable['titre'] = "soins Ambulatoires";
        return $this->render("services/soins_ambulatoires", $variable);
    }

    public function urgence()
    {
        $variable['titre'] = "Urgences";
        return $this->render("services/urgences", $variable);
    }
}
