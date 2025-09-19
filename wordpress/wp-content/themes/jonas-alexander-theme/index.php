<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php
$title = wp_title('', false);
if ($title) {
    $title .= " - ";
}
?>

<head>
    <base href="/" />
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?= $title; ?><?php bloginfo('name'); ?></title>
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" media="all" href="<?= get_template_directory_uri(); ?>/cv.min.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?= get_template_directory_uri(); ?>/style.min.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?= get_template_directory_uri(); ?>/blogpost.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<?php
$className = get_field('class_name', false, false);
?>

<body <?php body_class(); ?>>
    <div class="page-wrapper <?= $className; ?>">
        <?php
        if ($className == "blogpost") {
            require_once "blogpost-header.php";
        }
        ?>
        <?php require_once "posts.php"; ?>
    </div>
</body>

<script defer src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/template.js"></script>

</html>
