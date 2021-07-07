<?php get_header(); ?>


<p>Cette page est page.php (donc toute les pages sauf la front-page)</p>

<?php

if (have_posts()) : while (have_posts()) : the_post();

?>


                <h2><?php the_title(); ?></h2>

                <?php the_post_thumbnail(); ?>

                <p>publié par <?php the_author(); ?>,le<?php the_date(); ?></p>
                <p><?php the_content(); ?></p>

<?php endwhile;
endif; ?>
<?php get_footer(); ?>