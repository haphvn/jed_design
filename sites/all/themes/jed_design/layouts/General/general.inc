<?php
/**
 * Created by haph on 1/15/16
 */

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
    'title' => t('General'),
    'category' => t('Kopasoft'),
    'icon' => 'onecol.png',
    'theme' => 'panels_general',
    'css' => 'general.css',
    'regions' => array(
        'header' => t('Header'),
        'middle' => t('Main Content'),
    ),
);