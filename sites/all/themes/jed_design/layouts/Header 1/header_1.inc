<?php
/**
 * Created by haph on 1/15/16
 */

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
    'title' => t('Header 1'),
    'category' => t('Kopasoft'),
    'icon' => 'onecol.png',
    'theme' => 'panels_header_1',
    'css' => 'header_1.css',
    'regions' => array(
        'main_menu' => t('Main Menu'),
    ),
);