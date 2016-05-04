<?php
/**
 * Created by haph on 2/4/16
 */

$title = $bean->title;
$field_link_unlimited = $bean->field_link_unlimited_['und'];
?>

<ul class="clearfix">
    <?php
    foreach ($field_link_unlimited as $link) :
    ?>
    <li><a href="<?php print $link['url'] ?>" class="fa <?php print $link['title'] ?>"></a></li>
    <?php endforeach ?>
</ul>