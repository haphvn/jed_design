<?php
/**
 * Created by haph on 2/4/16
 */

$title = $bean->title;
$field_desc = $bean->field_description['und'][0]['value'];
$your_website = $bean->field_your_website['und'];
?>

<div class="widget jed_module_type_service_list jed_style_06 widget-space-left">
    <h3 class="widget-title jed_style_01"><?php print $title ?></h3>
    <div class="widget-content">
        <div class="row">
            <div class="col-md-5">
                <?php print $field_desc ?>
            </div>
            <div class="col-md-7">
                <ul class="row ul-mh">
                    <?php
                    foreach ($your_website as $value) :
                    $item = field_collection_item_load($value['value']);
                    $field_icon = $item->field_icon['und'][0]['value'];
                    $field_title = $item->field_title['und'][0]['value'];
                    $field_description = $item->field_description['und'][0]['value'];
                    ?>
                        <li class="col-md-6">
                            <?php print $field_icon ?>
                            <div class="jed_wrap">
                                <h6 class="entry-title"><?php print $field_title ?></h6>
                                <p><?php print $field_description ?></p>
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
</div>
