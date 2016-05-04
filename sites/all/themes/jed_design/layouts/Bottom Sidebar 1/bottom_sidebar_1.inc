<?php
/**
 * Created by haph on 1/15/16
 */

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
    'title' => t('Bottom Sidebar 1'),
    'category' => t('Kopasoft'),
    'icon' => 'onecol.png',
    'theme' => 'panels_bottom_sidebar_1',
    'css' => 'bottom_sidebar_1.css',
    'regions' => array(
        'bottom_left'   => t('Bottom Left'),
        'bottom_right'   => t('Bottom Right'),
        'bottom' => t('Bottom Sidebar'),
    ),
);