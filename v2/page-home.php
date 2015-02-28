<?php get_header(); ?>

    <div class="row banner">
        <div class="banner-text">
            <h1 class="responsive-headline">Hi!</h1>

            <h3>
                I'm Chase Woodford, a <span>web designer</span> and <span>developer</span> living in the suburbs of
                <span>Philadelphia</span>, PA, USA. I work at <span>Verilogue</span>, a medical marketing research
                company, as part of a three man rock star development team.
            </h3>
            <hr/>

            <?php include('social.php'); ?>

        </div>
    </div>

    <p class="scrolldown">
        <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
    </p>
</header><!-- Header End -->

<!-- About Section
================================================== -->
<section id="about">
    <div class="row">
        <div class="three columns">
            <img class="profile-pic" src="<?php bloginfo('template_directory'); ?>/images/profilepic.jpg" alt=""/>
        </div>
        <div class="nine columns main-col">
            <h2>About Me</h2>

            <p>
                I enjoy writing about web design, and throughout this site share my experience as a developer working
                for a small business at the intersection of Big Data and Big Pharma.
            </p>

            <p>
                In my spare time I like to compose music, which I link to from the playground along with all of my other
                side projects. I also spend a lot of time reading, mostly about web design and user experience with the
                occasional book on string theory or building time machines.
            </p>

            <p>
                I grew up in Harrisburg, PA and graduated from Temple University in 2007 with a bachelor's degree in
                Advertising and a minor in Sociology.
            </p>

            <p>
                But enough about me. To find out more, drop me a line or say hi on Twitter.
            </p>

            <div class="row">
                <div class="columns download">
                    <p>
                        <a href="resources/documents/resume.pdf" class="button"><i class="fa fa-download"></i>Download Resume</a>
                    </p>
                </div>
            </div>
        </div><!-- end .main-col -->
    </div><!-- end row -->
</section><!-- end section -->


<!-- Journal Section
================================================== -->
<section id="journal">
    <div class="row">
        <div class="twelve columns align-center">
            <h1>Latest Posts</h1>
        </div>
    </div>

    <!-- Entries -->
    <div class="blog-entries">

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); endwhile; endif;
        $args = array('post_type'=>'post','posts_per_page'=>3,'category__not_in'=>3,);
        $query = new WP_Query( $args );
        if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

        <!-- Entry -->
        <article role="article" class="row entry">
            <div class="entry-header">
                <div class="permalink">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><i class="fa fa-link"></i></a>
                </div>
                <div class="ten columns entry-title pull-right">
                    <a class="h3 no-underline" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
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
                </div>
                <div class="two columns post-meta end">
                    <p>
                        <time datetime="<?php the_time('c'); ?>" class="post-date" pubdate>
                            <?php the_time('M j, Y'); ?>
                        </time>
                    </p>
                </div>
            </div>
            <div class="ten columns offset-2 post-content">
                <?php the_excerpt(); ?>
            </div>
        </article><!-- end entry -->

    <?php endwhile; endif ?>

    </div><!-- end entries -->

    <div class="row text-center view-more">
        <p>
            <a href="/blog" class="button view-more"><i class="fa fa-external-link"></i>View More Posts</a>
        </p>
    </div>
    <hr class="row"/>
</section><!-- Journal Section End-->

<?php include('portfolio.php'); ?>

<?php include('contact.php'); ?>

<?php get_footer(); ?>