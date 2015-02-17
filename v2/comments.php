<!-- Comments
================================================== -->
<div id="comments">

    <?php if ( have_comments() ) : ?>

    <h3><?php comments_number(); ?></h3>

    <ol class="commentlist">
        <?php wp_list_comments( array( 'callback' => 'custom_comment' ) ); ?>
    </ol>

    <?php comment_form(); ?>

    <?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

    <p>Comments are closed</p>

    <?php endif; ?>

</div><!-- Comments End -->