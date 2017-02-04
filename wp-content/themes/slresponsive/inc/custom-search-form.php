<?php
function my_search_form( $form ) {

	$form = '
	<form role="search" class="form field" method="get" id="searchform" action="' . home_url( '/' ) . '" >
		<input class="search input" type="text" placeholder="' . esc_attr_x( 'Search &hellip;', 'placeholder',  'slresponsive') . '" value="' . get_search_query() . '" name="s" id="s" />
	</form>';

	return $form;
}

add_filter( 'get_search_form', 'my_search_form' );
