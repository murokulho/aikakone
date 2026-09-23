//for the search function
//DOES NOT WORK YET!!!!!!

<?php
function my_navbar_search() {
    ?>
    <div id="navbar">
        <div class="search-container">
            <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                <input type="search" class="search-field" placeholder="Search…" value="<?php echo get_search_query(); ?>" name="s" />
                <button type="submit" class="search-submit">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
    </div>
    <?php
}
add_action('wp_body_open', 'my_navbar_search');

function search_only_posts( $query ) { 
	if ( $query->is_search() && $query->is_main_query() && !is_admin() ) { 
		$query->set( 'post_type', 'post' ); } } 
add_action( 'pre_get_posts', 'search_only_posts' );