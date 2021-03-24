<?php
use app\DefaultApp\DefaultApp as App;
App::get("/", "default.index", "index");
App::get("/accueil", "default.index", "accueil");
App::post("/", "default.index","index_post");



App::get("/contact", "default.contact", "contact");
App::get("/about", "default.about", "about");
App::get("/gallerie", "default.gallery", "gallery");
App::get("/doctor", "default.doctor", "doctor");


App::get("/soins-ambulatoires", "service.ambulatoire", "soins");
App::get("/urgences", "service.urgence", "urgence");
App::get("/hospitaliers", "service.hospitalier", "hospitalier");
App::get("/chirugicaux", "service.chirugicaux", "chirugicaux");
App::get("/para-clinique", "service.para", "para");
App::get("/gestion-patient", "service.gestion", "gestion");


