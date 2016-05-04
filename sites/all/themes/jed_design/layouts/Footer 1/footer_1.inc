<?php
/**
 * Created by haph on 1/15/16
 */

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
    'title' => t('Footer text-right'),
    'category' => t('Kopasoft'),
    'icon' => 'onecol.png',
    'theme' => 'panels_footer_1',
    'css' => 'footer_1.css',
    'regions' => array(
        'left' => t('Left'),
        'right' => t('Right'),
    ),
);