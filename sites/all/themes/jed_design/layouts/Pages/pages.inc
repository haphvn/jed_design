<?php
/**
 * Created by haph on 1/15/16
 */

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
    'title' => t('Pages'),
    'category' => t('Kopasoft'),
    'icon' => 'onecol.png',
    'theme' => 'panels_pages',
    'css' => 'pages.css',
    'regions' => array(
        'banner' => t('Hero Banner'),
        'content' => t('Main Content'),
        'bottom' => t('Bottom sidebar'),
    ),
);