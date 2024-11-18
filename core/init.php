<?php


if (!function_exists('get_top_viewed_posts')) {

    function get_top_viewed_posts($number = 6)
    {

        if (function_exists('pvc_get_most_viewed_posts')) {
            $most_viewed = pvc_get_most_viewed_posts(array(
                'post_type' => 'post',
                'posts_per_page' => $number,
            ));
            return $most_viewed;
        }
    }
}

if (! function_exists('get_top_month_posts')) {
    function get_top_month_posts($number = -1)
    {
        if (function_exists('pvc_get_most_viewed_posts')) {
            $top_month = pvc_get_most_viewed_posts(array(
                'post_type' => 'post',
                'posts_per_page' => $number,
                'date_query' => array(
                    array(
                        'year' => date('Y'),
                        'month' => date('m'),
                    ),
                ),
            ));
            return $top_month;
        }
    }
}

function comments_test(){
    global $wp_query, $withcomments, $post, $wpdb, $id, $comment, $user_login, $user_identity, $overridden_cpage, $wp_stylesheet_path, $wp_template_path;

	if ( ! ( is_single() || is_page() || $withcomments ) || empty( $post ) ) {
		return;
	}
    $req = get_option( 'require_name_email' );
    /*
	 * Comment author information fetched from the comment cookies.
	 */
	$commenter = wp_get_current_commenter();

	/*
	 * The name of the current comment author escaped for use in attributes.
	 * Escaped by sanitize_comment_cookies().
	 */
	$comment_author = $commenter['comment_author'];

	/*
	 * The email address of the current comment author escaped for use in attributes.
	 * Escaped by sanitize_comment_cookies().
	 */
	$comment_author_email = $commenter['comment_author_email'];

	/*
	 * The URL of the current comment author escaped for use in attributes.
	 */
	$comment_author_url = esc_url( $commenter['comment_author_url'] );
    $comment_args = array(
		'orderby'       => 'comment_date_gmt',
		'order'         => 'ASC',
		'status'        => 'approve',
		'post_id'       => $post->ID,
		'no_found_rows' => false,
	);

	if ( get_option( 'thread_comments' ) ) {
		$comment_args['hierarchical'] = 'threaded';
	} else {
		$comment_args['hierarchical'] = false;
	}

	if ( is_user_logged_in() ) {
		$comment_args['include_unapproved'] = array( get_current_user_id() );
	} else {
		$unapproved_email = wp_get_unapproved_comment_author_email();

		if ( $unapproved_email ) {
			$comment_args['include_unapproved'] = array( $unapproved_email );
		}
	}


}
function _debug()
{
    comments_template();
    var_dump('MARK@@@@@@@@@@');
}
