<?php

/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );

/*-----------------------------------------------------------------------------------*/
/* Add Post Thumbnail support
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );

/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
function custom_register_sidebars() {
	register_sidebar(array(				// Start a series of sidebars to register
		'id' => 'sidebar', 					// Make an ID
		'name' => 'Sidebar',				// Name it
		'description' => 'Take it on the side...', // Dumb description for the admin side
		'before_widget' => '<div>',	// What to display before each widget
		'after_widget' => '</div>',	// What to display following each widget
		'before_title' => '<h3 class="side-title">',	// What to display before each widget's title
		'after_title' => '</h3>',		// What to display following each widget's title
		'empty_title'=> '',					// What to display in the case of no title defined for a widget
		// Copy and paste the lines above right here if you want to make another sidebar, 
		// just change the values of id and name to another word/name
	));
}
add_action( 'widgets_init', 'custom_register_sidebars' ); // adding sidebars to Wordpress (these are created in functions.php)

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function scripts()  {

    // add waypoint
    wp_register_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.js', array( 'jquery' ) );
    wp_enqueue_script( 'waypoints' );

    // add fittext
    wp_register_script( 'fittext', get_template_directory_uri() . '/js/jquery.fittext.js', array( 'jquery' ) );
    wp_enqueue_script( 'fittext' );

	// add init
	wp_register_script( 'init', get_template_directory_uri() . '/js/init.js', array( 'jquery' ) );
    wp_enqueue_script( 'init' );

    // add prism
    wp_register_script( 'prism', get_template_directory_uri() . '/js/prism.js' );
    wp_enqueue_script( 'prism' );
	
	// add ga
	wp_register_script( 'ga', get_template_directory_uri() . '/js/ga.js' );
    wp_enqueue_script( 'ga' );
  
}
// Register this fxn and allow Wordpress to call it automatcally in the header
add_action( 'wp_enqueue_scripts', 'scripts' );

/*-----------------------------------------------------------------------------------*/
/* Comments
/*-----------------------------------------------------------------------------------*/

function custom_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    ?>
    <?php if ( $comment->comment_approved == '1' ): ?>
        <li id="comment-<?php comment_ID() ?>" class="depth-1">

            <div class="avatar">
                <?php echo get_avatar( $comment ); ?>
            </div>

            <div class="comment-info">
                <cite><?php comment_author_link() ?></cite>

                <div class="comment-meta">
                    <time class="date" datetime="<?php the_time('c'); ?>"><?php the_time('M j, Y'); ?></time>
                    /
                    <a class="reply no-underline" href="#">Reply</a>
                </div>
            </div>

            <div class="comment-text">
                <p>
                    <?php comment_text() ?>
                </p>
            </div>

        </li>
    <?php endif;
};

/*-----------------------------------------------------------------------------------*/
/* Modified Excerpt
/*-----------------------------------------------------------------------------------*/

function new_excerpt_more( $more ) {
	return '... <a class="more-link" href="'. get_permalink( get_the_ID() ) .'">Continue Reading<i class="fa fa-angle-double-right"></i></a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/*-----------------------------------------------------------------------------------*/
/* Pagination
/*-----------------------------------------------------------------------------------*/

function numeric_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /**	Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /**	Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<nav class="col full pagination"><ul>' . "\n";

    /**	Previous Post Link */
    if ( get_previous_posts_link() ) {
        printf( '<li>%s</li>' . "\n", get_previous_posts_link('Prev') );
    } else {
        printf( '<li><span class="page-numbers prev inactive">Prev</span></li>' . "\n" );
    }

    /**	Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a class="no-underline page-numbers" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /**	Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' current' : '';
        printf( '<li><a class="no-underline page-numbers %s" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /**	Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' current' : '';
        printf( '<li><a class="no-underline page-numbers %s" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /**	Next Post Link */
    if ( get_next_posts_link() ) {
        printf( '<li>%s</li>' . "\n", get_next_posts_link('Next') );
    } else {
        printf( '<li><span class="page-numbers next inactive">Next</span></li>' );
    }

    echo '</ul></nav>' . "\n";

}

add_filter('next_posts_link_attributes', 'next_posts_link_attributes');
add_filter('previous_posts_link_attributes', 'previous_posts_link_attributes');

function next_posts_link_attributes() {
    return 'class="no-underline page-numbers next"';
}

function previous_posts_link_attributes() {
    return 'class="no-underline page-numbers prev"';
}