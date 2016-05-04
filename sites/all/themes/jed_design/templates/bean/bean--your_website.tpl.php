<?php
/**
 * Created by haph on 2/4/16
 */

$title = $bean->title;
$sub_title = $bean->field_sub_title['und'][0]['value'];
$field_desc = $bean->field_description['und'][0]['value'];
$your_website = $bean->field_your_website['und'];
?>

<section class="kopa-area kopa-area-0">

    <div class="kopa-area-heading-text">
        <div class="container">
            <p>Hello <br/>world</p>
        </div>
    </div>
    <!-- kopa-area-heading-text -->

    <div class="container">

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="widget jed_module_type_service_list jed_style_03">
                    <header class="widget-header jed_style_03">

                        <div class="row">

                            <div class="col-md-5 col-sm-5 col-xs-12">

                                <h3 class="widget-title jed_style_07"><?php print $title ?></h3>

                            </div>
                            <!-- col-md-5 -->

                            <div class="widget-title-des col-md-7 col-sm-7 col-xs-12">

                                <h4><?php print $sub_title ?></h4>
                                <p><?php print $field_desc ?></p>

                            </div>
                            <!-- col-md-7 -->

                        </div>
                        <!-- row -->

                    </header>
                    <!-- widget-header -->
                    <div class="widget-content">
                        <ul class="row ul-mh">
                            <?php
                            foreach ($your_website as $value) :
                            $item = field_collection_item_load($value['value']);
                                $field_icon = $item->field_icon['und'][0]['value'];
                                $field_title = $item->field_title['und'][0]['value'];
                                $field_description = $item->field_description['und'][0]['value'];
                            ?>
                                <li class="col-md-4 col-sm-4 col-xs-4">
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
            <!-- col-md-12 -->

        </div>
        <!-- row -->

    </div>
    <!-- container -->

</section>
<!-- kopa-area-0 -->
