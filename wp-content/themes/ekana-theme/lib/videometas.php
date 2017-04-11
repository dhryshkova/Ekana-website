<?php

/**
 * Setup the metabox fields for Main Page - Video Section
 */

add_action( 'cmb2_admin_init', 'metabox_setup_video');

function metabox_setup_video() {

    $cmb_video = new_cmb2_box( array(
        'id'            => 'video_metabox',
        'title'         => __( 'Video', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true // Show field names on the left
    ) );

    /**
     * Setup the metaboxes' fields for Main Page - #Video Section
     */

    $cmb_video->add_field( array(
        'name'       => __( 'Video Title' ),
        'id'         => 'video_title',
        'type'       => 'text',
    ) );

    $cmb_video->add_field( array(
        'name'       => __( 'Video Description' ),
        'id'         => 'video_content',
        'type'       => 'textarea_small',
    ) );

    $cmb_video->add_field( array(
        'name'       => __( 'Video Link' ),
        'id'         => 'video_link',
        'type'       => 'textarea_small',
    ) );


}