<?php
/**
 * @file
 * Default theme implementation for beans.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) entity label.
 * - $url: Direct url of the current entity if specified.
 * - $page: Flag for the full page state.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-{ENTITY_TYPE}
 *   - {ENTITY_TYPE}-{BUNDLE}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */

$map_addr = $bean->field_location['und'][0]['value'];
$location = _get_location_from_google_maps($map_addr);
?>

<section class="kopa-area kopa-area-no-space">

    <div class="widget jed_module_gg_maps jed_style_01">

        <div class="widget-content">

            <div id="kopa-map" class="kopa-map" data-place="<?php print $location['place'] ?>" data-latitude="<?php print $location['lat'] ?>" data-longitude="<?php print $location['lng'] ?>"></div>

        </div>

    </div>
    <!-- widget -->

</section>
<!-- kopa-area-no-space -->