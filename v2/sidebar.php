<!-- Sidebar Section
================================================== -->
<aside role="complementary" id="sidebar">
    <div class="widget widget_search">
        <form role="search" action="#">

            <input class="text-search" type="text" onfocus="if (this.value == 'Search here...') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Search here...'; }" value="Search here...">
            <input type="submit" class="submit-search" value="">

        </form>
    </div>

    <div class="widget clearfix">
        <h5 class="widget-title">Categories</h5>

        <div class="tagcloud cf">
            <?php
            $categories = get_categories( array('orderby' => 'count', 'order' => 'DESC') );
            foreach ( (array) $categories as $category ) {
                echo '<a href="' . get_category_link ($category->term_id) . '" rel="category">' . $category->name . ' </a>';
            }
            ?>
        </div>
    </div>

    <div class="widget clearfix">
        <h5 class="widget-title">Tags</h5>

        <div class="tagcloud cf">
            <?php
            $tags = get_tags( array('orderby' => 'count', 'order' => 'DESC') );
            foreach ( (array) $tags as $tag ) {
                echo '<a href="' . get_tag_link ($tag->term_id) . '" rel="tag">' . $tag->name . ' </a>';
            }
            ?>
        </div>
    </div>
</aside><!-- Sidebar End -->