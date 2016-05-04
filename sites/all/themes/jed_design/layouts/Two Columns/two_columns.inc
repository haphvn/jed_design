<?php
/**
 * Created by haph on 1/15/16
 */

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
    'title' => t('Two Columns'),
    'category' => t('Kopasoft'),
    'icon' => 'onecol.png',
    'theme' => 'panels_two_columns',
    'css' => 'two_columns.css',
    'regions' => array(
        'left' => t('Left sidebar'),
        'right' => t('Right sidebar'),
    ),
);