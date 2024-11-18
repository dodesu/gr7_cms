<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo THEME_URI . 'assets/images/icon/favicon.ico' ?>">
    <link rel="profile" href="http://gmgp.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
    <?php wp_head(); ?>
</head>
<body>
    <?php 
    the_content();
    wp_footer();
    ?>
</body>
</html>