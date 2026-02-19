<?php get_header(); ?>

<?php 
  $workPosts = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => 'post',
  ));
?>

<div class="container">
  <div class="content">
    <h1 class="content__title"><?php echo get_the_title(); ?></h1>
    <div class="content__featured-image">
      <img src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" alt="Chris Radtke portrait">
    </div>
    <div class="content__text">
      <?php  the_field('content'); ?>
    </div>
  </div>
  <?php if($workPosts->have_posts()) : ?>
  <h2 class="work__title">Work</h2>
  <div class="loop">
    <?php while($workPosts->have_posts()) : $workPosts->the_post(); ?>
    <a href="<?php the_permalink(); ?>" class="post">
      <div class="post__image">
        <img src="<?php echo get_the_post_thumbnail_url(null, 'large' ) ?>"
          alt="<?php echo the_title() ?> thumbnail image">
      </div>
      <p class="post__title"><?php the_title(); ?></p>
    </a>
    <!-- <div class="post">
    </div> -->
    <?php endwhile; ?>
  </div>
  <?php endif; ?>
</div>