<?php
//configuration base de donnee
$database = array(
    "serveur" => "localhost",
    "nom_base" => "base",
    "utilisateur" => "root",
    "motdepasse" => ""
);

//configuration email
$from=array(
    "email"=>"",
    "nom"=>""
);

$configurationEmail = array(
    "host" =>"",
    "utilisateur" =>"",
    "motdepasse" =>"",
    "port"=>465,
    "from"=>$from
);
//fin configuration email

$configuration = array(
    "url" => $_GET['url'],
    "database" => $database,
    "configurationEmail"=>$configurationEmail,
    "dossierProjet" => "/los-framework",
    "nomApp" => "DefaultApp"
);
define("AUTHORIZENET_LOG_FILE", "phplog");
\systeme\Application\Configuration::addConfiguration($configuration,"DefaultApp");
//appelation fonction backup
//\systeme\Application\Application::Backup() ;
//appelation fonction liste de backup
//\systeme\Application\Application::BackupList() ;
