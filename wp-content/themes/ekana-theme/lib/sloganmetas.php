<?php

/**
 * Setup the metabox fields for Main Page - Slogan Description
 */

add_action( 'cmb2_admin_init', 'metabox_setup_slogan');

function metabox_setup_slogan() {

    $cmb_slogan = new_cmb2_box( array(
        'id'            => 'slogan_metabox',
        'title'         => __( 'Slogan Description', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true // Show field names on the left
    ) );

    /**
     * Setup the metaboxes' fields for Main Page - #About-us Section
     */

    $cmb_slogan->add_field( array(
        'name'       => __( 'Strong' ),
        'id'         => 'slogan_desc_1',
        'type'       => 'textarea_small',
    ) );
    $cmb_slogan->add_field( array(
        'name'       => __( 'Resilient' ),
        'id'         => 'slogan_desc_2',
        'type'       => 'textarea_small',
    ) );
    $cmb_slogan->add_field( array(
        'name'       => __( 'Reliable' ),
        'id'         => 'slogan_desc_3',
        'type'       => 'textarea_small',
    ) );

    /**
     * Initiate the metabox for Price (Block 1) page
     */

}




