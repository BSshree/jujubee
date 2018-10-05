<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use yii\bootstrap\Modal;
?>


<header class="header header-cont">
       <div class="container"> 
      <a href="/"><img src="themes/site_theme/images/logo1.png" ></a>
      <div class="burger">
        <div class="burger__patty"></div>
        <div class="burger__patty"></div>
        <div class="burger__patty"></div>
      </div>

      </div>

      <nav class="menu">
        <div class="menu__brand">
              <p><img src="themes/site_theme/images/logo1.png" class="img-header"></p>
              <!--<a href="#" class="header-menu menu-contact">Jujubee@gmail.com</a>-->
              <p class="header-menu menu-contact">+91 99528 70443</p>
              <ul class="list-unstyled list-inline social text-center mob-footer-icons menu-contact">
                  <li class="list-inline-item "><a href="https://www.facebook.com/jujubeemedia" target="1"><i class="fa fa-facebook icon-footer-mob"></i></a></li>
                <li class="list-inline-item "><a href="https://twitter.com/jujubeemedia" target="1"><i class="fa fa-twitter icon-footer-mob"></i></a></li>
                <li class="list-inline-item "><a href="https://www.linkedin.com/company/14402872/" target="1"><i class="fa fa-linkedin icon-footer-mob"></i></a></li>
                <li class="list-inline-item "><a href="https://plus.google.com/u/0/b/106177774632969723573/" target="1"><i class="fa fa-google-plus icon-footer-mob"></i></a></li>
                <!--<li class="list-inline-item "><a href="#"><i class="fa fa-instagram icon-footer-mob"></i></a></li>-->
              </ul>
        </div>
       <ul class="menu__list" id="menu">
          <li class="menu__item"><a href="/about" class="menu__link">About</a></li>
          <li class="menu__item">
            <a href="#" class="menu__link services-link" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Services</a>
            <div class="collapse" id="collapseExample">
              <a class="dropdown-item" href="/creative-agency">Creative Agency</a>
              <a class="dropdown-item" href="/web-design">Web Design</a>
              <a class="dropdown-item" href="/digital-marketing">Digital Marketing</a>
              <a class="dropdown-item" href="/mobile-application">Mobile Application</a>
              <a class="dropdown-item" href="/design-branding">Design & Branding</a>
            </div>
          </li>
          <li class="menu__item"><a href="/clients" class="menu__link">Clients</a></li>
          <li class="menu__item"><a href="/blog" class="menu__link">Blog</a></li>
          <li class="menu__item"><a href="/careers" class="menu__link">Careers</a></li>
          <!-- <li class="menu__item"><a href="" class="menu__link">Thinking</a></li> -->
          <li class="menu__item"><a href="/contactus" class="menu__link">Get In Touch</a></li>
        </ul>
      </nav>
    </header>