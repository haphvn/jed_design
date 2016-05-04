<?php
/**
 * Created by haph on 2/4/16
 */
$title = $bean->title;
$field_desc = $bean->field_description['und'][0]['value'];
$link = $bean->field_link_limited_['und'][0];
?>

<section class="kopa-area kopa-area-0">

    <div class="container">

        <div class="widget jed_module_404 jed_style_01">

            <div class="widget-content">

                <header>
                    <h3><?php print $title ?></h3>
                    <p><?php print $field_desc ?> <a href="<?php print $link['url'] ?>"><?php print $link['title'] ?></a>.</p>
                </header>

                <p>404</p>

                <div class="row">

                    <div class="col-md-push-3 col-sm-push-3 col-xs-push-0 col-md-6 col-sm-6 col-xs-12">

                        <div class="widget-content">
                            <form class="error-search-form" method="post" action="">
                                <div class="row">
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" size="40" class="email" value="Search..." name="email" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';">
                                    </div>
                                    <!-- col-md-9 -->
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <input type="submit" class="submit" value="Send">
                                    </div>
                                    <!-- col-md-3 -->
                                </div>
                            </form>

                        </div>
                        <!-- widget-content -->

                    </div>
                    <!-- col-md-8 -->

                </div>
                <!-- row -->

            </div>

        </div>
        <!-- widget -->

    </div>

</section>
<!-- kopa-area-0 -->
