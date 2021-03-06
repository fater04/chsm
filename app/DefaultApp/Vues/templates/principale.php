<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <title>CHSM - Centre Hospitalier Sainte Marie</title>
    <!--meta-->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="keywords" content="CHSM"/>
    <meta name="description" content="Centre Hospitalier Sainte Marie"/>
    <!--style-->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Volkhov:400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="public/style/reset.css"/>
    <link rel="stylesheet" type="text/css" href="public/style/superfish.css"/>
    <link rel="stylesheet" type="text/css" href="public/style/fancybox/jquery.fancybox.css"/>
    <link rel="stylesheet" type="text/css" href="public/style/jquery.qtip.css"/>
    <link rel="stylesheet" type="text/css" href="public/style/jquery-ui-1.9.2.custom.css"/>
    <link rel="stylesheet" type="text/css" href="public/style/style.css"/>
    <link rel="stylesheet" type="text/css" href="public/style/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="public/style/animations.css"/>
    <link rel="shortcut icon" href="public/images/favicon.ico"/>
    <!--js-->
    <script type="text/javascript" src="public/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="public/js/jquery-migrate-1.4.1.min.js"></script>
    <script type="text/javascript" src="public/js/jquery.ba-bbq.min.js"></script>
    <script type="text/javascript" src="public/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script type="text/javascript" src="public/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="public/js/jquery.carouFredSel-5.6.4-packed.js"></script>
    <script type="text/javascript" src="public/js/jquery.sliderControl.js"></script>
    <script type="text/javascript" src="public/js/jquery.timeago.js"></script>
    <script type="text/javascript" src="public/js/jquery.hint.js"></script>
    <script type="text/javascript" src="public/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="public/js/jquery.isotope.masonry.js"></script>
    <script type="text/javascript" src="public/js/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="public/js/jquery.qtip.min.js"></script>
    <script type="text/javascript" src="public/js/jquery.blockUI.js"></script>
    <script type="text/javascript" src="public/js/main.js"></script>
</head>
<body>
<div class="site_container">
    <div class="header_container">
        <div class="header clearfix">
            <div class="header_left">
                <a href="index9ba3.html?page=home" title="CHSM">
                    <img src="public/images/logo.png" alt="logo" width="50%"/>
                    <!--                    <span class="logo">CHSM</span>-->
                </a>
            </div>
            <ul class="sf-menu header_right">
                <li class="selected">
                    <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('accueil') ?>" title="HOME">
                        ACCUEIL
                    </a>
                </li>
                <li class="submenu wide">
                    <a href="javascript:void(0)" title="Services">
                        SERVICES
                    </a>
                    <ul>
                        <li>
                            <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('soins') ?>" title="Soins Ambulatoires">
                                Soins Ambulatoires
                            </a>
                        </li>
                        <li>
                            <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('urgence') ?>" title=" Urgences">
                                Urgences
                            </a>
                        </li>
                        <li>
                            <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('hospitalier') ?>" title="Medical Care">
                                Hospiatliers
                            </a>
                        </li>
                        <li>
                            <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('chirugicaux') ?>" title="Chirugicaux">
                                Chirugicaux
                            </a>
                        </li>
                        <li>
                            <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('para') ?>" title="para-Clinique">
                                para-clinique
                            </a>
                        </li>
                        <li>
                            <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('gestion') ?>"
                               title="Gestion du patient">
                                Gestion du patient
                            </a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('about') ?>" title="A PROPOS">
                        A PROPOS DE NOUS ?
                    </a>
                </li>
                <li>
                    <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('doctor') ?>" title="Our Doctors">
                        NOS MEDECINS
                    </a>
                </li>


                <li>
                    <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('contact') ?>" title="SINGLE POST">
                        CONTACT
                    </a>
                </li>

            </ul>
            <div class="mobile_menu">
                <select>
                    <option value="<?= \app\DefaultApp\DefaultApp::genererUrl('accueil') ?>">HOME</option>
                    <option value="<?= \app\DefaultApp\DefaultApp::genererUrl('gallery') ?>">Gallerie</option>
                    <option value="<?= \app\DefaultApp\DefaultApp::genererUrl('about') ?>">ABOUT</option>
                    <option value="<?= \app\DefaultApp\DefaultApp::genererUrl('contact') ?>">CONTACT</option>
                </select>
            </div>
        </div>
    </div>

    <?php
    if (isset($contenue)) {
        echo $contenue;
    } else {
        echo "pas de contenue";
    }
    ?>
    <div class="footer_container">
        <div class="footer">
            <ul class="footer_banner_box_container clearfix">
                <li class="footer_banner_box super_light_blue animated_element animation-fadeIn duration-500">
                    <h2>
                        Assurance sant??
                    </h2>
                    <p>
                        <a class="icon_small_arrow right_white" href="javascript:void(0)">Ici, ?? la CHSM, nous avons
                            des...</a>
                    </p>
                </li>
                <li class="footer_banner_box light_blue animated_element animation-slideRight duration-800 delay-250">
                    <h2>
                        Dossiers m??dicaux
                    </h2>
                    <p>
                        <a class="icon_small_arrow right_white" href="#">Ici, ?? la CHSM, nous avons des...</a>
                    </p>
                </li>
                <li class="footer_banner_box blue animated_element animation-slideRight200 duration-800 delay-500">
                    <h2>
                        Assurance sant??
                    </h2>
                    <p>
                        <a class="icon_small_arrow right_white" href="#">Ici, ?? la CHSM, nous avons des...</a>
                    </p>
                </li>
            </ul>
            <div class="footer_box_container clearfix">
                <div class="footer_box">
                    <h3 class="box_header">
                        Info
                    </h3>
                    <p class="info">
                        CHSM un hopital offrant des soins integres,
                        6 services 24/24,7/7 soins ambulatoires, urgences,
                        hospitaliers, chirurgicaux, para-Clinique,
                        gestion du patient.
                    </p>
                    <ul class="footer_contact_info_container clearfix">
                        <li class="footer_contact_info_row">
                            <div class="footer_contact_info_left">
                                Centre Hospitalier Sainte Marie
                            </div>
                        </li>
                        <li class="footer_contact_info_row">
                            <div class="footer_contact_info_left">
                                #43,45 Ave John Brown
                            </div>
                            <div class="footer_contact_info_right">
                                +509 28 12 0515
                            </div>
                        </li>
                        <li class="footer_contact_info_row">
                            <div class="footer_contact_info_left">
                                (Lalue) Port-au-Prince
                            </div>
                            <div class="footer_contact_info_right">
                                <a href="mailto:chsmhaiti@gmail.com" title="Send Email">
                                    chsmhaiti@gmail.com
                                </a>
                            </div>
                        </li>
                        <li class="footer_contact_info_row">
                            <div class="footer_contact_info_left">
                                Ha??ti
                            </div>

                        </li>
                    </ul>
                </div>
                <div class="footer_box">
                    <div class="clearfix">
                        <div class="header_left">
                            <h3 class="box_header">
                                Nos Services
                            </h3>
                        </div>
                    </div>
                    <ul class="list clearfix">
                        <li class="icon_small_arrow right_white">
                            <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('soins') ?>"> Soins Ambulatoires</a>
                        </li>
                        <li class="icon_small_arrow right_white">
                            <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('urgence') ?>">Urgences</a>
                        </li>
                        <li class="icon_small_arrow right_white">
                            <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('hospitalier') ?>">Hospitaliers
                        </li>
                        <li class="icon_small_arrow right_white">
                            <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('chirugicaux') ?>">Chirugicaux
                        </li>
                        <li class="icon_small_arrow right_white">
                            <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('para') ?>">para-Clinique
                        </li>
                        <li class="icon_small_arrow right_white">
                            <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('gestion') ?>">Gesion du patient
                        </li>
                    </ul>
                </div>
                <div class="footer_box last">
                    <div class="clearfix">
                        <div class="header_left">
                            <h3 class="box_header">
                                Liens utiles
                            </h3>
                        </div>
                        <ul class="list clearfix">
                            <li class="icon_small_arrow right_white">
                                <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('about') ?>"> A Propos</a>
                            </li>
                            <li class="icon_small_arrow right_white">
                                <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('contact') ?>"> Contact</a>
                            </li>
                            <li class="icon_small_arrow right_white">
                                <a href="<?= \app\DefaultApp\DefaultApp::genererUrl('doctor') ?>">Nos Medecins</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright_area clearfix">
                <div class="copyright_left">
                    ?? Copyright - <a
                            href="javascript:void(0)"
                            title="Centre Hospitalier Sainte Marie" target="_blank">CHSM</a>
                </div>
                <div class="copyright_right">
                    <a class="scroll_top icon_small_arrow top_white" href="#top" title="Scroll to top">Top</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
