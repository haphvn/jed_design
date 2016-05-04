<?php
/**
 * Created by haph on 2/4/16
 */
$title = $bean->title;
$field_desc = $bean->field_description['und'][0]['value'];
$link = $bean->field_link_limited_['und'][0];
?>

<div class="widget">
    <header class="widget-header jed_style_01">
        <h3 class="widget-title jed_style_01"><?php print $title ?></h3>
        <p class="jed_style_01"><?php print $field_desc ?></p>
        <br>
        <a href="<?php print $link['url'] ?>" class="jed_btn jed_size_xs jed_bd_fat jed_color_hover jed_effect_01"><?php print $link['title'] ?></a>
    </header>
</div>
<!-- widget -->
