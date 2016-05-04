<?php
/**
 * Created by haph on 1/15/16
 */

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
    'title' => t('Hero Banner'),
    'category' => t('Kopasoft'),
    'icon' => 'onecol.png',
    'theme' => 'panels_hero_banner',
    'css' => 'hero_banner.css',
    'regions' => array(
        'left' => t('Left sidebar'),
        'right' => t('Right sidebar'),
    ),
);