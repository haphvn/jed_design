<?php
/**
 * Created by haph on 2/4/16
 */
$title = $bean->title;
$field_desc = $bean->field_description['und'][0]['value'];
?>

<section class="kopa-area kopa-area-6">

    <div class="container">

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="widget jed_event_list jed_style_02">
                    <header class="widget-header jed_style_01">
                        <h3 class="widget-title jed_style_01"><?php print $title ?></h3>
                        <p class="jed_style_01"><?php print $field_desc ?></p>
                    </header>
                    <!-- /.widget-header -->

                    <div class="widget-content">
                        <div class="row">
                            <?php
                            $field_events = $bean->field_events['und'];
                            foreach ($field_events as $value) :
                                $item = field_collection_item_load($value['value']);
                                $field_date = $item->field_date['und'][0]['value'];
                                $field_location = $item->field_location['und'][0]['value'];
                                $field_title = $item->field_title['und'][0]['value'];
                                $field_status = $item->field_status['und'][0]['value'];
                            ?>
                            <div class="col-xs-12 col-md-6">
                                <div class="jed_event_list_item jed_event_list_<?php print strtolower($field_status) ?>">
                                    <div class="jed_event_list_time">
                                        <strong><?php print date('d', $field_date) ?></strong>
                                        <span><?php print date('M', $field_date) ?></span>
                                    </div>
                                    <!-- /.jed_event_list_time -->

                                    <div class="jed_event_list_content">
                                                <span class="meta-categories">
                                                    <a href="#">ARTIST</a>
                                                    <span>,</span>
                                                    <a href="#">RECORDING</a>
                                                </span>
                                        <h4><?php print $field_title ?></h4>
                                        <div class="meta-date">
                                            <i class="fa fa-calendar"></i>
                                            <span class="date-time"><?php print date('F d, Y', $field_date) ?></span>
                                            <span>All day</span>
                                        </div>
                                        <a href="#" class="jed_btn"><?php print $field_status ?></a>
                                                <span class="meta-location">
                                                    <i class="fa fa-map-marker"></i>
                                                    <?php print $field_location ?>
                                                </span>
                                    </div>
                                    <!-- /.jed_event_list_content -->
                                </div>
                                <!-- /.jed_event_list_item -->
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <!-- /.widget-content -->
                </div>
                <!-- /.jed_event_list -->

            </div>
            <!-- col-md-12 -->

        </div>
        <!-- row -->

    </div>
    <!-- container -->

</section>
<!-- kopa-area-6 -->
