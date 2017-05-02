<!DOCTYPE html>
<html>
<head>
    <title><?php the_title(); ?> - <?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/main.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">

        <?php wp_nav_menu(array( 'theme_location' => 'mainmenu' ) ); ?>

                </div>
            </div>
        </div>
</header>