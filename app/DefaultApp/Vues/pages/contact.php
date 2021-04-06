<?php
/**
 * contact.php
 * medical
 * @author : fater
 * @created :  1:21 PM,3/19/2021,2021
 **/
?>
<div class="page relative">
    <div class="page_layout page_margin_top clearfix">
        <div class="page_header clearfix">
            <div class="page_header_left">
                <h1 class="page_title">Contact</h1>
                <ul class="bread_crumb">
                    <li>
                        <a href="#" title="Home">
                        Accueil
                        </a>
                    </li>
                    <li class="separator icon_small_arrow right_gray">
                        &nbsp;
                    </li>
                    <li>
                        Contact
                    </li>
                </ul>
            </div>

        </div>
        <div class="clearfix">

            <div class="page_margin_top clearfix">
                <div class="page_left">
                    <h3 class="box_header">
                       Ecrivez-nous
                    </h3>
                    <form class="contact_form" id="contact_form" method="post" action="#">
                       <fieldset class="left">
                            <label>NOM</label>
                            <div class="block">
                                <input class="text_input" name="first_name" type="text" value="" />
                            </div>

                        </fieldset>
                        <fieldset class="right">
                            <label>E-mail</label>
                            <div class="block">
                                <input class="text_input" type="text" name="email" value="" />
                            </div>
                        </fieldset>
                        <fieldset style="clear:both;">
                            <label>Message</label>
                            <div class="block">
                                <textarea name="message"></textarea>
                            </div>
                            <input type="hidden" name="action" value="contact_form" />
                            <input type="submit" name="submit" value="Send" class="more blue" />
                        </fieldset>
                    </form>
                </div>
                <div class="page_right">
                    <h3 class="box_header">
                        Centre Hospitalier Sainte Marie
                    </h3>
                    <h3 class="sentence">
                        CHSM un hopital offrant des soins integres,6 services 24/24,7/7 soins ambulatoires, urgences, hospitaliers, chirurgicaux, para-Clinique, gestion du patient
                    </h3>
                    <ul class="columns no_padding page_margin_top clearfix">
                        <li class="column_left">
                            CHSM<br/>
                            #43,45 Ave John Brown,<br/>
                            (Lalue) Port-au-Prince,<br/>
                            Haïti
                        </li>
                        <li class="column_right">
                            Phone: +509 28 12 0515<br/>
                        </li>
                        <li class="column_right">
                            Email:chsmhaiti@gmail.com<br/>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
