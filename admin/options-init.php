<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "redux_data";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'redux_data',
        'dev_mode' => FALSE,
        'use_cdn' => TRUE,
        'display_name' => 'Redux Options',
        'display_version' => '1.0.0',
        'page_title' => 'Theme Options',
        'update_notice' => FALSE,
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'Theme Options',
        'page_parent_post_type' => 'your_post_type',
        'customizer' => TRUE,
        'default_mark' => '*',
        'hints' => array(
            'icon' => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color' => 'lightgray',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'dark',
                'rounded' => '1',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'disable_save_warn' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Header', 'redux-framework' ),
        'id'     => 'site-header',
        'desc'   => __( 'Basic field with no subsections.', 'redux-framework' ),
        'icon'   => 'el el-website',
        'fields' => array(
            array(
                'id'       => 'opt-site-logo',
                'type'     => 'media', 
                'url'      => true,
                'title'    => __('Site Logo', 'redux-framework'),
                'desc'     => __('Upload Your Site Logo', 'redux-framework'),
                'subtitle' => __('Upload any media using the WordPress native uploader', 'redux-framework'),
            ),
        )
    ) );


    Redux::setSection( $opt_name, array(
        'title'      => __( 'Text', 'redux-framework' ),
        'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework' ) . '<a href="http://docs.reduxframework.com/core/fields/text/" target="_blank">http://docs.reduxframework.com/core/fields/text/</a>',
        'id'         => 'opt-text-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'text-example2',
                'type'     => 'text',
                'title'    => __( 'Text Field', 'redux-framework' ),
                'subtitle' => __( 'Subtitle', 'redux-framework' ),
                'desc'     => __( 'Field Description', 'redux-framework' ),
                'default'  => 'Default Text',
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Slider', 'redux-framework' ),
        'id'     => 'site-slider',
        'desc'   => __( 'Basic field with no subsections.', 'redux-framework' ),
        'icon'   => 'el el-picture',
        'fields' => array(
            array(
                'id'       => 'opt-switch',
                'type'     => 'switch', 
                'title'    => __('Slider Switch', 'redux-framework'),
                'subtitle' => __('Switch on and off slider', 'redux-framework'),
                'default'  => true,
            ),
            array(
                'id'          => 'fx-slider-opt',
                'type'        => 'slides',
                'title'       => __('Slides Options', 'redux-framework'),
                'subtitle'    => __('Unlimited slides with drag and drop sortings.', 'redux-framework'),
                'desc'        => __('This field will store all slides values into a multidimensional array to use into a foreach loop.', 'redux-framework'),
                'placeholder' => array(
                    'title'           => __('This is a title', 'redux-framework'),
                    'description'     => __('Description Here', 'redux-framework'),
                    'url'             => __('Give us a link!', 'redux-framework'),
                ),
            ),
            

        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Content', 'redux-framework' ),
        'id'     => 'site-content',
        'desc'   => __( 'Basic field with no subsections.', 'redux-framework' ),
        'icon'   => 'el el-edit',
        'fields' => array(
            array(
                'id'       => 'opt-texts',
                'type'     => 'text',
                'title'    => __( 'Example Text', 'redux-framework' ),
                'desc'     => __( 'Example description.', 'redux-framework' ),
                'subtitle' => __( 'Example subtitle.', 'redux-framework' ),
            )
        )
    ) );


    Redux::setSection( $opt_name, array(
        'title'  => __( 'Footer', 'redux-framework' ),
        'id'     => 'site-footer',
        'desc'   => __( 'Basic field with no subsections.', 'redux-framework' ),
        'icon'   => 'el el-photo',
        'fields' => array(
            array(
                'id'       => 'opt-texta',
                'type'     => 'text',
                'title'    => __( 'Example Text', 'redux-framework' ),
                'desc'     => __( 'Example description.', 'redux-framework' ),
                'subtitle' => __( 'Example subtitle.', 'redux-framework' ),
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => __( 'General Colors', 'redux-framework' ),
        'id'     => 'site-colors',
        'desc'   => __( 'Basic field with no subsections.', 'redux-framework' ),
        'icon'   => 'el el-css',
        'fields' => array(
            array(
                'id'       => 'opt-textb',
                'type'     => 'text',
                'title'    => __( 'Example Text', 'redux-framework' ),
                'desc'     => __( 'Example description.', 'redux-framework' ),
                'subtitle' => __( 'Example subtitle.', 'redux-framework' ),
            ),
            array('id'       => 'opt-color',
                'type'     => 'color',
                'title'    => __('Background Color', 'redux-framework'), 
                'subtitle' => __('Pick a background color for the theme', 'redux-framework'),
                'default'  => '#FFFFFF',
                'output'   => array('background-color' => 'body'),
                'validate' => 'color',
            ),
                
        )
    ) );

    /*
     * <--- END SECTIONS
     */
