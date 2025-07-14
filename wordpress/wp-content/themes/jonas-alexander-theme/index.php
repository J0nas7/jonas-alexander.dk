<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <base href="/" />
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php bloginfo('name'); ?><?php wp_title('&mdash;'); ?></title>
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" media="all" href="<?= get_template_directory_uri(); ?>/cv.min.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?= get_template_directory_uri(); ?>/style.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body <?php body_class(); ?>>
    <div class="page-wrapper">
        <?php require_once "posts.php"; ?>
    </div>
</body>

<script defer src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/template.js"></script>

</html>
