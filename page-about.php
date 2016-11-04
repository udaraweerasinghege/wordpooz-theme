<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>
<?php $aboutImage = get_field('about-header-image',$pageId) ?>
<header class=blog___header id="nav___anchor" style="background-image:linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.25)),url(<?php echo $aboutImage['url'] ?>)">
    <hgroup class="wrapper">
      <h1><?php the_field('about-header',$pageId) ?></h1>
      <h2><?php the_field('about-tagline',$pageId) ?></h2>
    </hgroup>
</header>
<main>
  <div class="wrapper">
    <div class="about___team---container">
  <?php while(have_rows('team-info-box')) : the_row(); ?>
      <div class="about___team---box clearfix">
      <?php  $teamImage = get_sub_field('team-picture') ?>
      <div class="image-box">
        <img src="<?php echo $teamImage['url'] ?>" alt="">
      </div>
      <div class="text-box">
        <h2><?php the_sub_field('team-name') ?></h2>
        <p><?php the_sub_field('team-description') ?></p>
      </div>
      </div>
  <?php endwhile ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>