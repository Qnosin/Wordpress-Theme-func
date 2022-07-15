<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<p> <?php echo get_the_date('d/m/Y'); ?></p>
<?php the_content(); ?>

<p> Posted by Jakub Putaj </p>
<?php endwhile; else: endif; ?>