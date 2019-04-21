<?php 

# https://developer.wordpress.org/reference/functions/get_posts/


$attachments = get_posts( array(
    'post_type'      => 'attachment',
    'posts_per_page' => 500,
    'post_status'    => 'any',
    'post_parent'    => null
) );
 
if ( $attachments ) {
    foreach ( $attachments as $post ) {
        setup_postdata( $post );
        the_title();
        the_attachment_link( $post->ID, false );
        the_excerpt();
    }
    wp_reset_postdata();
}
