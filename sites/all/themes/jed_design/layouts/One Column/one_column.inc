<?php
/**
 * Created by haph on 1/15/16
 */

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
    'title' => t('One Column'),
    'category' => t('Kopasoft'),
    'icon' => 'onecol.png',
    'theme' => 'panels_one_column',
    'css' => 'one_column.css',
    'regions' => array(
        'top' => t('Top'),
        'bottom' => t('Bottom'),
    ),
);