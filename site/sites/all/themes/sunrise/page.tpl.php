<div id="header-banner-wrapper">
    <div id="header-wrapper">
<?php if ($page['header_top_left'] || $page['header_top_right']) :?>
<!-- #header-top -->

<div id="header-top" class="clearfix" >
    <!--<div class="container">-->

        <!-- #header-top-inside -->
        <div id="header-top-inside" class="clearfix">
                <div class="col-md-6">                 
                    <?php if ($page['header_top_left']) :?>
                    <!-- #header-top-left -->
                    <div id="header-top-left" class="clearfix">
                        <?php print render($page['header_top_left']); ?>
                    </div>
                    <!-- EOF:#header-top-left -->
                    <?php endif; ?>
                </div>

                <div class="col-md-6">    
                    <?php if ($page['header_top_right']) :?>
                    <!-- #header-top-right -->
                    <div id="header-top-right" class="clearfix">
                        <?php print render($page['header_top_right']); ?>
                    </div>
                    <!-- EOF:#header-top-right -->
                    <?php endif; ?>
                </div>
        </div>
        <!-- EOF: #header-top-inside -->

    <!--</div>-->
</div>
<!-- EOF: #header-top -->    
<?php endif; ?>

    <!-- header -->
    <header id="header" role="banner" class="clearfix">
      <!--  <div class="container"> -->

            <!-- #header-inside -->
            <div id="header-inside" class="clearfix">
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
            <!-- EOF: #header-inside -->
        <!--</div>-->
        
    </header>
    <!-- EOF: #header --> 

    <!-- #main-navigation --> 
    <div id="main-navigation" class="clearfix">
        
            <!-- #main-navigation-inside -->
            <div id="main-navigation-inside" class="clearfix">
                        <nav role="navigation">
                            <?php if ($page['navigation']) :?>
                            <?php print drupal_render($page['navigation']); ?>
                            <?php else : ?>

                            <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('main-menu', 'menu'), ), 'heading' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible'), ), )); ?>

                            <?php endif; ?>
                        </nav>
            </div>
            <!-- EOF: #main-navigation-inside -->
    </div>
    <!-- EOF: #main-navigation -->    
    
    <div id="social2" class="clearfix" >
    <div class="container">
            <div class="row">
                <div class="col-md-12">                 
                    <?php if ($page['social']) :?>
                            <?php print render($page['social']); ?>
                    <?php endif; ?>
                </div>
                </div>
        </div>
    </div>
        
        
    </div> <!-- #header-wrapper -->

    <?php if ($page['banner']) : ?>
    <!-- #banner -->
    <div id="banner" class="clearfix">
        <div class="container">
            <!-- #banner-inside -->
            <div id="banner-inside" class="clearfix">
                <div class="row">
                    <div class="col-md-12">
                    <?php print render($page['banner']); ?>
                    </div>
                </div>
            </div>
            <!-- EOF: #banner-inside -->      
        </div>
    </div>
    <!-- EOF:#banner -->
    <?php endif; ?>    
</div> <!-- #header, menu, slogan and banner wrapper --> 

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
                   <?php print render($page['highlighted']); ?>

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

                        <!-- EOF:#content-wrapper -->
                        <div id="content-wrapper">
                            <?php print render($title_prefix); ?>
                            <?php if ($title):?>
                            <h1 class="page-title"><?php print $title; ?></h1>
                            <?php endif; ?>
                            <?php print render($title_suffix); ?>

                            <?php print render($page['help']); ?>
                      
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


    
<?php if ($page['google_map_region']):?>
<!-- #google_map_region -->
<div id="google_map_region" class="clearfix">
    <?php print render($page['google_map_region']); ?>
</div>
<?php endif; ?>
<!-- EOF:#google_map_region -->

<!-- #map-canvas -->
<div id="map-canvas"></div>
<!-- EOF: #map-canvas -->


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