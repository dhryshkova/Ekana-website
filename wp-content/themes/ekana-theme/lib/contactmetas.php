<?php

/**
 * Setup the metabox fields for Main Page - Contact Information
 */

add_action( 'cmb2_admin_init', 'metabox_setup_contact');

function metabox_setup_contact() {

    $cmb_contact = new_cmb2_box( array(
        'id'            => 'contact_metabox',
        'title'         => __( 'Contact Information', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true // Show field names on the left
    ) );

    /**
     * Setup the metaboxes' fields for Main Page - #Contact-us Section
     */

    $cmb_contact->add_field( array(
        'name'       => __( 'Address' ),
        'id'         => 'address',
        'type'       => 'textarea_small',
    ) );
    $cmb_contact->add_field( array(
        'name'       => __( 'Email' ),
        'id'         => 'email',
        'type'       => 'text',
    ) );
    $cmb_contact->add_field( array(
        'name'       => __( 'Phone' ),
        'id'         => 'phone',
        'type'       => 'text',
    ) );

}