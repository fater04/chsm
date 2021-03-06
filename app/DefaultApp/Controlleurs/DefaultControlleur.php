<?php
/**
 * Created by PhpStorm.
 * User: ALCINDOR LOSTHELVEN
 * Date: 29/03/2018
 * Time: 22:30
 */

namespace app\DefaultApp\Controlleurs;
use Delight\Auth\Auth;
use systeme\Controlleur\Controlleur;
use systeme\Model\Utilisateur;

class DefaultControlleur extends Controlleur
{
    public function index(){
        $variable['titre']="Acceuil";
        return $this->render("default/index",$variable);
    }

    public function gallery(){
        $variable['titre']="Gallery";
        return $this->render("pages/gallery",$variable);
    }
    public function contact(){
        $variable['titre']="Contact";
        return $this->render("pages/contact",$variable);
    }
    public function about(){
        $variable['titre']="About";
        return $this->render("pages/about",$variable);
    }
    public function doctor(){
        $variable['titre']="Doctor";
        return $this->render("pages/doctor",$variable);
    }



   
 
}
