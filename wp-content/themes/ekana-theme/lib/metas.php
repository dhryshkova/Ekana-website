<?php

/**
 * Setup the group field metabox for Home Page carousel
 */

add_action( 'cmb2_admin_init', 'group_setup_carousel');

function group_setup_carousel() {
    /**
     * Repeatable Field Groups
     */
    $cmb = new_cmb2_box( array(
        'id'           => 'carousel_home_page',
        'title'        => __( 'Carousel', 'cmb2' ),
        'object_types' => array( 'page', ),
    ) );
    $group_id = $cmb->add_field( array(
        'id'          => 'carousel_repeat_group',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => __( 'Item {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => __( 'Add Another Item', 'cmb2' ),
            'remove_button' => __( 'Remove Item', 'cmb2' ),
            'sortable'      => true,
            'closed'     => true,
        ),
    ) );
    //Image
    $cmb->add_group_field( $group_id, array(
        'name'    => 'Image',
        'desc'    => 'Upload an image or enter an URL.',
        'id'      => 'image',
        'type'    => 'file',
    ) );
    //Image text
    $cmb->add_group_field( $group_id, array(
        'name'       => 'Image text',
        'id'         => 'text',
        'type'       => 'textarea_small',
    ) );
}

