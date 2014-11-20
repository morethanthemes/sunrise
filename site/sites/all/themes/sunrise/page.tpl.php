<?php if ($page['header_top_left'] || $page['header_top_right']) :?>
<!-- #header-top -->
<!-- TODO: remove this displayed none area -->
<div id="header-top" class="clearfix" style="display:none">
    <div class="container">

        <!-- #header-top-inside -->
        <div id="header-top-inside" class="clearfix">
            <div class="row">
                <div class="col-md-6">                 
                    <?php if ($page['header_top_left']) :?>
                    <div class="<?php print $header_top_left_grid_class; ?>">
                        <!-- #header-top-left -->
                        <div id="header-top-left" class="clearfix">
                            <?php print render($page['header_top_left']); ?>
                        </div>
                        <!-- EOF:#header-top-left -->
                    </div>
                    <?php endif; ?>
                </div>

                <div class="col-md-6">    
                    <?php if ($page['header_top_right']) :?>
                    <div class="<?php print $header_top_right_grid_class; ?>">
                        <!-- #header-top-right -->
                        <div id="header-top-right" class="clearfix">
                            <?php print render($page['header_top_right']); ?>
                        </div>
                        <!-- EOF:#header-top-right -->
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- EOF: #header-top-inside -->

    </div>
</div>
<!-- EOF: #header-top -->    
<?php endif; ?>

<div id="header-banner-wrapper">
    <!-- header -->
    <header id="header" role="banner" class="clearfix">
        <div class="container">

            <!-- #header-inside -->
            <div id="header-inside" class="clearfix">
                <div class="row">
                    <div class="col-md-12">

                    <?php if ($logo):?>
                    <div id="logo">
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"> 
                            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> 
                        </a>
                    </div>
                    <?php endif; ?>

                    <?php if ($site_name):?>
                    <div id="site-name">
                    <!--<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>-->
                    </div>
                    <?php endif; ?>

                    <?php if ($site_slogan):?>
                    <div id="site-slogan">
                    <?php print $site_slogan; ?>
                    </div>
                    <?php endif; ?>

                    <?php if ($page['header']) :?>
                    <?php print render($page['header']); ?>
                    <?php endif; ?>


                    </div>
                </div>
            </div>
            <!-- EOF: #header-inside -->

        </div>

        <div class="social">
            <ul class="social">
                <li><a href="#" title="RSS" class="twitter"></a></li>
                <li><a href="#" title="RSS" class="facebook"></a></li>
                <li><a href="#" title="RSS" class="gplus"></a></li>
                <li><a href="#" title="RSS" class="youtube"></a></li>
                <li><a href="#" title="RSS" class="rss"></a></li>
                <li><a href="#" title="RSS" class="skype"></a></li>
            </ul>
        </div>
        
    </header>
    <!-- EOF: #header --> 


    <!-- #main-navigation --> 
    <div id="main-navigation" class="clearfix">
        <div class="container">

            <!-- #main-navigation-inside -->
            <div id="main-navigation-inside" class="clearfix">
                <div class="row">
                    <div class="col-md-12">
                        <nav role="navigation">
                            <?php if ($page['navigation']) :?>
                            <?php print drupal_render($page['navigation']); ?>
                            <?php else : ?>

                            <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('main-menu', 'menu'), ), 'heading' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible'), ), )); ?>

                            <?php endif; ?>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- EOF: #main-navigation-inside -->

        </div>
    </div>
    <!-- EOF: #main-navigation -->

    <div class="slogan">
        <h2>Welcome to SUNRISE PUB!</h2>
        <p>The place you want to be with your friends</p>
    </div>
    
    <?php if ($page['banner']) : ?>
    <!-- #banner -->
    <div id="banner" class="clearfix">
        <div class="container">

            <!-- #banner-inside -->
            <!-- EOF: #banner-inside -->        

        </div>
    </div>
    <!-- EOF:#banner -->
    <?php endif; ?>    
</div> <!-- /header, menu, slogan and banner wrapper -->


<!-- #page -->
<div id="page" class="clearfix">
    
    <?php if ($page['highlighted']):?>
    <!-- #top-content -->
    <div id="top-content" class="clearfix">
        <div class="container">
            <!-- #top-content-inside -->
            <div id="top-content-inside" class="clearfix">
                <div class="row">
                    <div class="col-md-12">
                   <!--TODO: <?php print render($page['highlighted']); ?> -->
                        
                    <div class="grid4">
                        
                        <div class="col">
                            <img src="<?php print base_path().drupal_get_path('theme', 'sunrise') ;?>/images/local/ico_coffee.png" alt="" />
                            <h3>Imported coffee</h3>
                            <p>Checkout our various tyes of imported coffee.</p> 				
                        </div>

                        <div class="col">
                            <img src="<?php print base_path().drupal_get_path('theme', 'sunrise') ;?>/images/local/ico_music.png" alt="" />
                            <h3>Great Music </h3>
                            <p>Our DJs will entertain you like never before.</p> 				
                        </div>

                        <div class="col">
                            <img src="<?php print base_path().drupal_get_path('theme', 'sunrise') ;?>/images/local/ico_food.png" alt="" />
                            <h3>Finest Cuisine</h3>
                            <p>From Italian to Tex-Mex, you will find all types of food</p>				
                        </div>

                        <div class="col">
                            <img src="<?php print base_path().drupal_get_path('theme', 'sunrise') ;?>/images/local/ico_service.png" alt="" />
	                        <h3>Nice Staff</h3>
                            <p>You will never forget our smile and professional attitude.</p>				
                        </div>
                    </div>

                    </div>
                </div>
            </div>
            <!-- EOF:#top-content-inside -->

        </div>
    </div>
    <!-- EOF: #top-content -->
    <?php endif; ?>
    
    <?php if ($page['promoted']):?>
    <!-- #promoted -->
    <div id="promoted" class="clearfix">
        <h1>Featured</h1>
        <div id="promoted-inside" class="clearfix">
            <div class="row">
                <div class="col-md-12">
                    <?php print render($page['promoted']); ?>
                </div>
            </div>
        </div>

    </div>
    <!-- EOF: #promoted -->
    <?php endif; ?>

    <!-- #main-content -->
    <div id="main-content">
        <div class="container">
        
            
            <!-- #messages-console -->
            <?php if ($messages):?>
            <div id="messages-console" class="clearfix">
                <div class="row">
                    <div class="col-md-12">
                    <?php print $messages; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <!-- EOF: #messages-console -->
            
            <div class="row">

                <?php if ($page['sidebar_first']):?>
                <aside class="<?php print $sidebar_grid_class; ?>">  
                    <!--#sidebar-first-->
                    <section id="sidebar-first" class="sidebar clearfix">
                    <?php print render($page['sidebar_first']); ?>
                    </section>
                    <!--EOF:#sidebar-first-->
                </aside>
                <?php endif; ?>


                <section class="<?php print $main_grid_class; ?>">

                    <!-- #main -->
                    <div id="main" class="clearfix">
                    
                        <?php if ($breadcrumb && theme_get_setting('breadcrumb_display')):?> 
                        <!-- #breadcrumb -->
                        <div id="breadcrumb" class="clearfix">
                            <!-- #breadcrumb-inside -->
                            <div id="breadcrumb-inside" class="clearfix">
                            <?php print $breadcrumb; ?>
                            </div>
                            <!-- EOF: #breadcrumb-inside -->
                        </div>
                        <!-- EOF: #breadcrumb -->
                        <?php endif; ?>



                        <!-- EOF:#content-wrapper -->
                        <div id="content-wrapper">
                           
                                <?php print render($title_prefix); ?>
                                <?php if ($title):?>
                                <h1 class="page-title"><?php print $title; ?></h1>
                                <?php endif; ?>
                                <?php print render($title_suffix); ?>

                                <!-- #tabs -->
                                <?php if ($tabs):?>
                                    <div class="tabs">
                                    <?php print render($tabs); ?>
                                    </div>
                                <?php endif; ?>
                                <!-- EOF: #tabs -->

                                <!-- #action links -->
                                <?php if ($action_links):?>
                                    <ul class="action-links">
                                    <?php print render($action_links); ?>
                                    </ul>
                                <?php endif; ?>
                                <!-- EOF: #action links -->

                                <?php print render($page['content']); ?>
                                <?php print $feed_icons; ?>
                

                        </div>
                        <!-- EOF:#content-wrapper -->

                    </div>
                    <!-- EOF:#main -->

                </section>

                <?php if ($page['sidebar_second']):?>
                <aside class="<?php print $sidebar_grid_class; ?>">
                    <!--#sidebar-second-->
                    <section id="sidebar-second" class="sidebar clearfix">
                    <?php print render($page['sidebar_second']); ?>
                    </section>
                    <!--EOF:#sidebar-second-->
                </aside>
                <?php endif; ?>
        
            </div>

        </div>
    </div>
    <!-- EOF:#main-content -->

</div>
<!-- EOF:#page -->

<?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_fourth']):?>
<!-- #footer -->
<footer id="footer" class="clearfix">
    <div class="container">
    
        <!-- #footer-inside -->
        <div id="footer-inside" class="clearfix">
            <div class="row">
                <div class="col-md-3">
                    <?php if ($page['footer_first']):?>
                    <div class="footer-area">
                    <?php print render($page['footer_first']); ?>
                    </div>
                    <?php endif; ?>
                </div>
                
                <div class="col-md-3">
                    <?php if ($page['footer_second']):?>
                    <div class="footer-area">
                    <?php print render($page['footer_second']); ?>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="col-md-3">
                    <?php if ($page['footer_third']):?>
                    <div class="footer-area">
                    <?php print render($page['footer_third']); ?>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="col-md-3">
                    <?php if ($page['footer_fourth']):?>
                    <div class="footer-area">
                    <?php print render($page['footer_fourth']); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- EOF: #footer-inside -->
    
    </div>
</footer> 
<!-- EOF #footer -->
<?php endif; ?>

<footer id="subfooter" class="clearfix">
    <div class="container">
        
        <!-- #subfooter-inside -->
        <div id="subfooter-inside" class="clearfix">
            <div class="row">
                <div class="col-md-12">
                    <!-- #subfooter-left -->
                    <div class="subfooter-area">                  
                    <?php if ($page['footer']):?>
                    <?php print render($page['footer']); ?>
                    <?php endif; ?>
                    </div>
                    <!-- EOF: #subfooter-left -->
                </div>
            </div>
        </div>
        <!-- EOF: #subfooter-inside -->
    
    </div>
</footer>
<!-- EOF:#subfooter -->