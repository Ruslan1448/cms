
<?php 
/*
Template Name: galery
*/
get_header();?>

<nav>
        <a href="http://wordpress/">Головна</a>
      <a href="http://wordpress/posts/">Пости</a>
      <a href="http://wordpress/galery/">Галерея</a>
  </nav>

  <div class="container">
    <h2>Галерея</h2>
    <div class="gallery">

    <?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,

	'category'    => 6
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
		      <div class="gallery-item">
       <?php the_post_thumbnail(
 
       ); ?>
         
        <p><?php the_title()
?></p>
      </div>
		<?php 
	}
} 

wp_reset_postdata(); 
?>


      <div class="gallery-item">
        <img src="<?php bloginfo('template_url')?>/assets/images/pic1.jpg" alt="Фото 1">
        <p>Карпати</p>
      </div>
      <div class="gallery-item">
        <img src="<?php bloginfo('template_url')?>/assets/images/pic2.jpg" alt="Фото 2">
        <p>Київ</p>
      </div>
      <div class="gallery-item">
        <img src="<?php bloginfo('template_url')?>/assets/images/pic3.jpg" alt="Фото 3">
        <p>Одеса</p>
      </div>
      <div class="gallery-item">
        <img src="<?php bloginfo('template_url')?>/assets/images/pic4.jpg" alt="Фото 4">
        <p>Львів</p>
      </div>
    </div>
  </div>

 <?php get_footer(); ?>