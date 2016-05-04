<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

/**
 * Implements hook_process_html().
 */
function jed_design_process_html(&$variables) {
    // Flatten out html_attributes and body_attributes.
    $variables['html_attributes'] = drupal_attributes($variables['html_attributes_array']);
}

/**
 * Implements hook_html_head_alter().
 */
function jed_design_html_head_alter(&$head_elements) {
    // Simplify the meta charset declaration.
    $head_elements['system_meta_content_type']['#attributes'] = array(
        'charset' => 'utf-8',
    );
}

/**
 * Add body classes if certain regions have content.
 */
function jed_design_preprocess_html(&$variables)
{
    $variables['html_attributes_array'] = array();

    // HTML element attributes.
    $variables['html_attributes_array']['lang'] = $variables['language']->language;
    $variables['html_attributes_array']['dir']  = $variables['language']->dir;

    // Adds RDF namespace prefix bindings in the form of an RDFa 1.1 prefix
    // attribute inside the html element.
    if (function_exists('rdf_get_namespaces')) {
        $variables['rdf'] = new stdClass();
        foreach (rdf_get_namespaces() as $prefix => $uri) {
            $variables['rdf']->prefix .= $prefix . ': ' . $uri . "\n";
        }
        $variables['html_attributes_array']['prefix'] = $variables['rdf']->prefix;
    }

    // add path settings to custom.js
    drupal_add_js(array('pathToTheme' => path_to_theme()), 'setting');

    // add google maps
    drupal_add_js('http://maps.google.com/maps/api/js?sensor=true', 'external');
}

/**
 * Override or insert variables into the page templates.
 */
function jed_design_preprocess_page(&$variables)
{
    if (!empty($variables['panels_everywhere_site_template'])) {
        $variables['template_file'] = 'page-panels-everywhere';
    }
}

/**
 * Override Side Menu
 */
/* main ul */
function jed_design_menu_tree__menu_side_menu($variables) {
    return '<ul class="jed_menu_main">' . $variables['tree'] . '</ul>';
}

/* main li */
function jed_design_menu_link__menu_side_menu($variables)
{
    $element = $variables['element'];

    $sub_menu = '';
    if ($element['#below']) {
        // You can set a theme wrapper here or put an empty array() only
        // and theme the second level directly by adding <ul></ul> one line below.
        $element['#below']['#theme_wrappers'] = array('menu_tree__menu_side_menu_inner');
        foreach ($element['#below'] as $key => $val) {
            if (is_numeric($key)) {
                $element['#below'][$key]['#theme'] = 'menu_link__menu_side_menu_inner'; // 2 level <li>
            }
        }
        $element['#below']['#theme_wrappers'][0] = 'menu_tree__menu_side_menu_inner';
        $sub_menu = drupal_render($element['#below']);
    }

//    $output = l($element['#title'], $element['#href'], $element['#localized_options']);
    return '<li><a href="'. $element['#href'] .'">'. $element['#title'] .'</a>'. $sub_menu .'</li>';
}

/* inner ul */
function jed_design_menu_tree__menu_side_menu_inner($variables) {
    return '<ul>' . $variables['tree'] . '</ul>';
}

/* inner li */
function jed_design_menu_link__menu_side_menu_inner($variables) {
    $element = $variables['element'];
    $sub_menu = '';
    if ($element['#below']) {
        $sub_menu = drupal_render($element['#below']);
    }
//    $output = l($element['#title'], $element['#href'], $element['#localized_options']);
    return '<li><a href="'. $element['#href'] .'">' . $element['#title'] . "</a></li>\n";
}

/**
 * Override Mobile Menu
 */
/* main ul */
function jed_design_menu_tree__menu_mobile_menu($variables) {
    return '<ul class="jed_menu_main">' . $variables['tree'] . '</ul>';
}

/* main li */
function jed_design_menu_link__menu_mobile_menu($variables)
{
    $element = $variables['element'];

    $sub_menu = '';
    if ($element['#below']) {
        // You can set a theme wrapper here or put an empty array() only
        // and theme the second level directly by adding <ul></ul> one line below.
        $element['#below']['#theme_wrappers'] = array('menu_tree__menu_mobile_menu_inner');
        foreach ($element['#below'] as $key => $val) {
            if (is_numeric($key)) {
                $element['#below'][$key]['#theme'] = 'menu_link__menu_mobile_menu_inner'; // 2 level <li>
            }
        }
        $element['#below']['#theme_wrappers'][0] = 'menu_tree__menu_mobile_menu_inner';
        $sub_menu = drupal_render($element['#below']);
    }

//    $output = l($element['#title'], $element['#href'], $element['#localized_options']);
    return '<li><a href="'. $element['#href'] .'">'. $element['#title'] .'</a>'. $sub_menu .'</li>';
}

/* inner ul */
function jed_design_menu_tree__menu_mobile_menu_inner($variables) {
    return '<ul>' . $variables['tree'] . '</ul>';
}

/* inner li */
function jed_design_menu_link__menu_mobile_menu_inner($variables) {
    $element = $variables['element'];
    $sub_menu = '';
    if ($element['#below']) {
        $sub_menu = drupal_render($element['#below']);
    }
//    $output = l($element['#title'], $element['#href'], $element['#localized_options']);
    return '<li><a href="'. $element['#href'] .'">' . $element['#title'] . "</a></li>\n";
}

/**
 * @param $variables
 * @return string
 */
function jed_design_form($variables) {
    $element = $variables['element'];
    if (isset($element['#action'])) {
        $element['#attributes']['action'] = drupal_strip_dangerous_protocols($element['#action']);
    }
    element_set_attributes($element, array('method', 'id'));
    if (empty($element['#attributes']['accept-charset'])) {
        $element['#attributes']['accept-charset'] = "UTF-8";
    }
    // Anonymous DIV to satisfy XHTML compliance.
    return '<form' . drupal_attributes($element['#attributes']) . '>' . $element['#children'] . '</form>';
}

/**
 * @param $variables
 * @return string
 */
function jed_design_textfield($variables) {
    $element = $variables['element'];

    // remove class form-control input
    unset($element['#attributes']['class'][1]);

    $element['#attributes']['type'] = 'text';
    element_set_attributes($element, array('id', 'name', 'value', 'size', 'maxlength'));
    _form_set_class($element, array('form-text'));

    $extra = '';
    if ($element['#autocomplete_path'] && !empty($element['#autocomplete_input'])) {
        drupal_add_library('system', 'drupal.autocomplete');
        $element['#attributes']['class'][] = 'form-autocomplete';

        $attributes = array();
        $attributes['type'] = 'hidden';
        $attributes['id'] = $element['#autocomplete_input']['#id'];
        $attributes['value'] = $element['#autocomplete_input']['#url_value'];
        $attributes['disabled'] = 'disabled';
        $attributes['class'][] = 'autocomplete';
        $extra = '<input' . drupal_attributes($attributes) . ' />';
    }

    $output = '<input' . drupal_attributes($element['#attributes']) . ' />';

    return $output . $extra;
}

/**
 * @param $variables
 * @return string
 */
function jed_design_button($variables) {
    $element = $variables['element'];
    $element['#attributes']['type'] = 'submit';
    element_set_attributes($element, array('id', 'name', 'value'));

    $element['#attributes']['class'][] = 'form-' . $element['#button_type'];
    if (!empty($element['#attributes']['disabled'])) {
        $element['#attributes']['class'][] = 'form-button-disabled';
    }

    // remove class unnecessary
    unset($element['#attributes']['class'][1]);
    unset($element['#attributes']['class'][2]);
    unset($element['#attributes']['class'][3]);
    unset($element['#attributes']['class'][4]);

    return '<input' . drupal_attributes($element['#attributes']) . ' />';
}

/**
 * @param $variables
 * @return string
 */
function jed_design_textarea($variables) {
    $element = $variables['element'];
    element_set_attributes($element, array('id', 'name', 'cols', 'rows'));
    _form_set_class($element, array('form-textarea'));

    $wrapper_attributes = array(
        'class' => array('form-textarea-wrapper'),
    );

    // Add resizable behavior.
    if (!empty($element['#resizable'])) {
        drupal_add_library('system', 'drupal.textarea');
        $wrapper_attributes['class'][] = 'resizable';
    }

    // remove class unnecessary
    unset($element['#attributes']['class'][0]);

    $output = '<textarea' . drupal_attributes($element['#attributes']) . '>' . check_plain($element['#value']) . '</textarea>';
    return $output;
}

/**
 * @param $variables
 * @return string
 */
function jed_design_breadcrumb($variables) {
    global $base_url;
    $breadcrumb = $variables['breadcrumb'];

    if (!empty($breadcrumb)) {
        // Provide a navigational heading to give context for breadcrumb links to
        // screen-reader users. Make the heading invisible with .element-invisible.
        $last = end($breadcrumb);
        $output = '<div class="breadcrumb_left"><h3>'. $last['data'] .'</h3>';

        $output .= '<div class="breadcrumb_nav">';
        $output .= '<span><a href="'. $base_url .'">Home</a></span>';
        $output .= ' / ';
        $output .= '<span>'. $last['data'] .'</span>';
        $output .= '</div>';
        $output .= '</div>';

        return $output;
    }
}