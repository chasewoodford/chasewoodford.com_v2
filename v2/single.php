<?php get_header(); ?>

<!-- Journal Section
================================================== -->
<main role="main" class="posts">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- Content
    ================================================== -->
    <div class="content-outer">

        <div id="page-content" class="row">

            <div id="primary" class="eight columns">

                <article role="article" class="post">

                    <div class="entry-header clearfix">

                        <h1><?php the_title(); ?></h1>

                        <p class="post-meta">

                            <?php if (!in_category('3')) : ?>
                                <time class="date" datetime="<?php the_time('c'); ?>">
                                    <?php the_time('M j, Y'); ?>
                                </time>
                                /
                                <?php $categories = get_the_category(); $separator = ' / '; $output = '';
                                if($categories){
                                    echo '<span class="categories">';
                                    foreach($categories as $category) {
                                        $output .= '<a class="no-underline"
                                                        href="'.get_category_link( $category->term_id ).'"
                                                        title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '
                                                        ">'.$category->cat_name.'</a>'.$separator;
                                    }
                                    echo trim($output, $separator);
                                    echo '</span>';
                                }?>
                            <?php endif; ?>

                        </p>

                    </div>

                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>

                    <ul class="post-nav clearfix">
                        <?php $prev_post = get_previous_post(true,''); $next_post = get_next_post(true,''); ?>

                        <?php if (!empty( $prev_post )): ?>
                        <li class="prev">
                            <a class="no-underline"
                               rel="prev"
                               title="<?php echo $prev_post->post_title; ?>"
                               href="<?php echo get_permalink( $prev_post->ID ); ?>"><strong>Previous Article</strong> <?php echo $prev_post->post_title; ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if (!empty( $next_post )): ?>
                            <li class="next">
                                <a class="no-underline"
                                   rel="next"
                                   title="<?php echo $next_post->post_title; ?>"
                                   href="<?php echo get_permalink( $next_post->ID ); ?>"><strong>Next Article</strong> <?php echo $next_post->post_title; ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>

                </article> <!-- post end -->

                <?php endwhile; ?>

                <?php if ( comments_open() || '0' != get_comments_number() ) comments_template( '', true ); ?>

            </div>

            <?php else : ?>

            <article class="post error">
                <h1 class="404">Nothing has been posted like that yet</h1>
            </article>

            <?php endif; ?>

            <div id="secondary" class="four columns end">

                <?php include('sidebar.php'); ?>

            </div><!-- Sidebar End -->

        </div>

    </div><!-- Content End-->

</main><!-- Journal Section End-->

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
