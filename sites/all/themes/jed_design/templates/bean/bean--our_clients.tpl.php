<?php
/**
 * Created by haph on 2/4/16
 */

$title = $bean->title;
$teams = $bean->field_our_team['und'];
$clients = $bean->field_client['und'];
?>

<section class="kopa-area kopa-area-no-space kopa-area-9">

    <div class="row row_custom_01">

        <div class="col-md-6 col-sm-6 col-xs-6 col_custom_01 white-text-style">

            <div class="widget jed_module_type_testmonial-car jed_style_01">
                <h3 class="widget-title jed_style_08"><?php print $title ?></h3>
                <div class="widget-content">
                    <?php
                    foreach ($teams as $value) :
                        $item = field_collection_item_load($value['value']);
                        $field_title = $item->field_title['und'][0]['value'];
                        $field_position = $item->field_position['und'][0]['value'];
                        $field_desc = $item->field_description['und'][0]['value'];
                    ?>
                        <article class="entry-item">
                            <h6 class="entry-title"><a href="#"><?php print $field_title ?></a></h6>
                            <span><?php print $field_position ?></span>
                            <p><?php print $field_desc ?></p>
                        </article>
                    <?php endforeach ?>
                </div>
            </div>
            <!-- widget -->

        </div>
        <!-- col-md-6 -->

        <div class="col-md-6 col-sm-6 col-xs-6">

            <div class="widget jed_type_client_gird_3_cols jed_style_01">
                <div class="widget-content">
                    <ul>
                        <?php
                            foreach ($clients as $value) :
                            $client = field_collection_item_load($value['value']);
                                $field_image = $client->field_image['und'][0];
                                $link = $client->field_link_limited_['und'][0];
                        ?>
                            <li>
                                <a href="<?php print $link['url'] ?>">
                                    <?php
                                    $image = array(
                                        'path' => $field_image['uri'],
                                        'alt' => $field_image['alt'],
                                        'title' => $field_image['title'],
                                        'style_name' => 'client__175x50_'
                                    );
                                    print theme('image_style', $image);
                                    ?>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
            <!-- widget -->

        </div>
        <!-- col-md-6 -->

    </div>
    <!-- row -->

</section>
<!-- kopa-area-9 -->
