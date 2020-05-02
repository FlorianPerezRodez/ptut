<?php

/* Chargement de la feuille du style du theme parent */
add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );
function wpchild_enqueue_styles(){
  wp_enqueue_style( 'wpm-consulting-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css');
	
}
/* Retirer les préfixes sur les pages d'archives */
function wpc_remove_archive_title_prefix() {
	if (is_category()) {
			$title = single_cat_title('', false);
		} elseif (is_tag()) {
			$title = single_tag_title('', false);
		} elseif (is_author()) {
			$title = '<span class="vcard">' . get_the_author() . '</span>' ;
		} elseif (is_post_type_archive()) {
			 $title = post_type_archive_title('', false);
		}
	return $title;
}
add_filter('get_the_archive_title', 'wpc_remove_archive_title_prefix');
?>

