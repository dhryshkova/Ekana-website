<?php

/**
 * Setup the metabox fields for Main Page - Quote
 */

add_action( 'cmb2_admin_init', 'metabox_setup_quote');

function metabox_setup_quote() {

    $cmb_quote = new_cmb2_box( array(
        'id'            => 'quote_metabox',
        'title'         => __( 'Quote', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true // Show field names on the left
    ) );

    /**
     * Setup the metaboxes' fields for Main Page - #Quote Section
     */

    $cmb_quote->add_field( array(
        'name'       => __( 'Quote Content' ),
        'id'         => 'quote_content',
        'type'       => 'textarea_small',
    ) );
    $cmb_quote->add_field( array(
        'name'       => __( 'Quote Author' ),
        'id'         => 'quote_author',
        'type'       => 'text',
    ) );

}