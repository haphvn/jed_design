<?php
/**
 * Created by haph on 2/4/16
 */
$title = $bean->title;
$field_desc = $bean->field_description['und'][0]['value'];
?>

<div class="widget widget_text">
    <h3 class="widget-title jed_style_03"><?php print $title ?></h3>
    <div class="widget-content">
        <p><?php print $field_desc ?></p>
    </div>
</div>
<!-- widget -->
