<?php
use app\DefaultApp\DefaultApp as App;
App::get("/", "default.index", "index");
App::get("/accueil", "default.index", "accueil");
App::post("/", "default.index","index_post");


App::get("/blog", "default.blog", "blogs");
App::get("/blog-single", "default.blog_single", "blog");

App::get("/contact", "default.contact", "contact");
App::get("/about", "default.about", "about");
App::get("/gallerie", "default.gallery", "gallery");
App::get("/doctor", "default.doctor", "doctor");
App::get("/medical-care", "default.care", "care");


App::get("/soins-ambulatoires", "service.ambulatoire", "soins");
App::get("/urgences", "service.urgence", "urgence");
App::get("/hospitaliers", "service.hospitalier", "hospitalier");
App::get("/chirugicaux", "service.chirugicaux", "chirugicaux");
App::get("/para-clinique", "service.para", "para");
App::get("/gestion-patient", "service.gestion", "gestion");


