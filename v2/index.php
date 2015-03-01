<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */

get_header(); ?>

<!-- Journal Section
================================================== -->
<main role="main" class="posts">

    <!-- Content
    ================================================== -->
    <div class="content-outer">

        <div id="page-content" class="row">

            <div id="primary" class="eight columns">

		    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <article role="article" class="post row">

                    <div class="entry-header clearfix">

                        <h1>
                            <a class="no-underline" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </h1>

                        <p class="post-meta">

                            <?php if (!in_category('3')) : ?>
                                <time class="date" datetime="<?php the_time('c'); ?>">
                                    <?php the_time('M j, Y'); ?>
                                </time>
                                /
                            <?php endif; ?>
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

						</p>

                    </div>

                    <div class="post-content">
                        <?php if ( has_post_thumbnail() ) {the_post_thumbnail( array('class' => ' pull-left add-bottom') );}; ?>
                        <?php the_excerpt(); ?>
                    </div>

                </article><!-- post end -->

                <?php endwhile; ?>

                <!-- Pagination -->
                <?php numeric_posts_nav(); ?>

            </div><!-- Primary End -->

            <div id="secondary" class="four columns end">

                <?php include('sidebar.php'); ?>

            </div><!-- Sidebar End -->

        </div>

        <?php else : ?>

            <article class="post error">
                <h1 class="404">Nothing has been posted like that yet</h1>
            </article>

        <?php endif; ?>

    </div><!-- Content End-->

</main><!-- Journal Section End-->

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>