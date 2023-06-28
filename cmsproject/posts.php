
<?php 
/*
Template Name: posts
*/
get_header();?>

<nav>
        <a href="http://wordpress/">Головна</a>
      <a href="http://wordpress/posts/">Пости</a>
      <a href="http://wordpress/galery/">Галерея</a>
  </nav>

  <div class="container">


  <?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,

]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
		    <ul class="post-list">
      <li class="post-item">
        <a href="http://wordpress/post/">
            <?php the_post_thumbnail(
                array(
                    'class' => 'post-image-pic'
                )
            );?>
          <!-- <img class="post-image-pic" src="/assets/images/ua.avif" alt="Зображення поста"> -->
        </a>
        <div>
          <h2 class="post-title"><?php the_title()?></h2>
          <h2 class="post-content"><?php the_excerpt()?><h2>
        </div>
      </li>
      </li>
    </ul>
  
		<?php 
	}
} 

wp_reset_postdata(); // Сбрасываем $post
?>
</div>

 <?php get_footer(); ?>