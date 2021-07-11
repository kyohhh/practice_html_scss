<?php
// Template Name: お問い合わせ
?>

<?php get_header(); ?>

<?php while ( have_posts() ) { ?>
  <h1><?php the_title(); //投稿(固定ページ)のタイトルを表示 ?></h1>
  <?php the_post(); ?>
  <?php the_content(); ?>
<?php } ?>

<?php get_footer();