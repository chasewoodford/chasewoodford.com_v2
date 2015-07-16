<?php
/*
Template Name: Work
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Journal Section
================================================== -->
<section id="journal">
    <div class="row">
        <div class="twelve columns align-center">
            <h1 class="title"><?php the_title(); ?></h1>
        </div>
    </div>
</section><!-- Journal End-->

<?php endwhile; else : ?>

    <article class="post error">
        <h1 class="404">Nothing posted yet</h1>
    </article>

<?php endif; ?>

<?php get_footer(); ?>