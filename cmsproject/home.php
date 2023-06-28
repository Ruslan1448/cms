<?php 
/*
Template Name: home
*/
get_header();?>
<nav>
      <a href="http://wordpress/">Головна</a>
      <a href="http://wordpress/posts/">Пости</a>
      <a href="http://wordpress/galery/">Галерея</a>
    </nav>
  <div class="container">
    <div class="project-info">
      <h2>Про проект</h2>
      <p>Цей веб-сайт призначений для подорожуючих по Україні та всіх, хто цікавиться відкриттям українських крас та культури. Тут ви знайдете цікаві статті, поради щодо подорожей, фотографії та багато іншого, що допоможе вам відкрити усю красу України.</p>
    </div>

    <div class="author-info">
      <h3>Про автора - Руслан</h3>
      <div class="author-photo" style="background-image: url('<?php bloginfo('template_url')?>/assets/images/autor.jpg');"></div>
      <p>Привіт! Мене звати Руслан і я є страстію до подорожей та відкриття нових місць. Весь свій час я проводжу, подорожуючи по Україні, відвідуючи унікальні місця та ділився своїми враженнями. Я намагаюся показати красу та багатство нашої країни через свої статті та фотографії.</p>

    </div>
  </div>

  <?php get_footer(); ?>