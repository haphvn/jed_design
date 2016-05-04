<?php
/**
 * Created by haph on 1/15/16
 */

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
    'title' => t('Side Menu'),
    'category' => t('Kopasoft'),
    'icon' => 'onecol.png',
    'theme' => 'panels_side_menu',
    'css' => 'side_menu.css',
    'regions' => array(
        'logo' => t('Logo'),
        'side_menu' => t('Side Menu'),
        'mobile_menu' => t('Mobile Menu'),
        'social_links' => t('Social Links'),
    ),
);