<?php
/**
 * Created by haph on 2/4/16
 */

$title = $bean->title;
$field_link_unlimited = $bean->field_link_unlimited_['und'];
?>

<div class="col-md-4 col-sm-4 col-xs-4">

    <div class="widget widget_nav_menu">
        <h3 class="widget-title jed_style_03"><?php print $title ?></h3>
        <ul class="clearfix">
            <?php
            foreach ($field_link_unlimited as $link) :
            ?>
            <li>
                <a href="<?php print $link['url'] ?>"><?php print $link['title'] ?></a>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
    <!-- widget -->

</div>
<!-- col-md-4 -->
