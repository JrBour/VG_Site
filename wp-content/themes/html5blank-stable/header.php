<!doctype html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>Personal Coaching Evolution | <?php bloginfo('name'); ?></title>
    <meta charset="utf-8"/>

    <link href="//www.google-analytics.com" rel="dns-prefetch">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">


    <script   src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://api.motion.ai/sdk/webchat.css" rel="stylesheet" type="text/css">
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon"/>


</head>

<!-- wrapper -->
<div class="wrapper container-fluid">

    <!-- header -->
    <header>

        <!-- logo -->

        <!-- /logo -->

        <!-- nav -->


        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid_nav">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand navbar-brand-centered">
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-brand-centered">
                    <ul class="nav navbar-nav">
                        <li><?php wp_nav_menu(array('theme_location' => 'principal')); ?></li>

                    </ul>


                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- /nav -->

    </header>
    <!-- /header -->
