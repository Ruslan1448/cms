
<?php 
/*
Template Name: post
*/
get_header();?>

<body>
  <nav>
<a href="http://wordpress/">Головна</a>
      <a href="http://wordpress/posts/">Пости</a>
      <a href="http://wordpress/galery/">Галерея</a>
  </nav>

  <div class="container">
    <div class="post">
      <img class="post-image" src="/assets/images/ua.avif" alt="Зображення поста">
      <h2 class="post-title">Назва поста</h2>
      <div class="post-content">
        <p>Тут розміщений вміст поста. Можете розповісти про ваші пригоди під час подорожі по Україні, цікаві місця,
          враження, поради і т.д.</p>
        <p>Використовуйте текстовий блок `div` або інші HTML елементи, щоб оформити вміст поста на ваш смак.</p>
      </div>
     

 <div class="post-author">
        <p>Автор: Руслан</p>
        <p class="post-date">Опубліковано: 28 червня 2023</p>
      </div>
    </div>
  </div>

  <footer>
    &copy; 2023 Мандруючи по Україні. Усі права захищені.
  </footer>
</body>

<?php get_footer(); ?>