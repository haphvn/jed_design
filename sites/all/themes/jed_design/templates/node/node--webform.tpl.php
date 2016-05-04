<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */

$links = $node->field_link_unlimited_['und'];
$field_desc = $node->field_description['und'][0]['value'];
$field_email = $node->field_email['und'][0]['value'];
$field_telephone = $node->field_telephone['und'][0]['value'];
?>

<section class="kopa-area kopa-area-0">

    <div class="kopa-area-heading-text">
        <div class="container">
            <p>Our <br>contact</p>
        </div>
    </div>
    <!-- kopa-area-heading-text -->

    <div class="container">

        <div class="widget jed_module_contact_form">
            <h3 class="widget-title jed_style_06">Contact Details</h3>
            <div class="widget-content">

                <div class="row">

                    <div class="col-md-4 col-sm-4 col-xs-12">

                        <div class="jed_module_contact jed_style_01">
                            <div class="widget-content">
                                <p class="jed_space jed_style_01"><?php print $field_desc ?></p>
                                <p class="jed_txt jed_style_01">PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                                <ul class="clearfix">
                                    <li>
                                        <p><strong>Email : </strong><a href="mailto:no-replay@envato.com"><?php print $field_email ?></a></p>
                                    </li>
                                    <li>
                                        <p><strong>Telephone : </strong><?php print $field_telephone ?></p>
                                    </li>
                                </ul>
                                <div class="jed_social_links jed_style_02">
                                    <ul class="clearfix">
                                        <?php
                                        foreach ($links as $link) :
                                            ?>
                                            <li><a href="<?php print $link['url'] ?>" class="fa <?php print $link['title'] ?>"></a></li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- widget -->

                    </div>
                    <!-- col-md-4 -->

                    <div class="col-md-8 col-sm-8 col-xs-12">

                        <div class="jed_form_box jed_style_01">
                            <div id="respond" class="comment-respond">

                                <?php print drupal_render($content['webform']) ?>

                                <div id="response-1"></div>
                            </div>
                        </div>
                        <!-- jed_form_box -->

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
