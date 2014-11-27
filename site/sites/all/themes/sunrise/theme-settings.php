<?php
/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function sunrise_form_system_theme_settings_alter(&$form, &$form_state) {
    
    $form['mtt_settings'] = array(
        '#type' => 'fieldset',
        '#title' => t('Bootstrap Business Theme Settings'),
        '#collapsible' => FALSE,
        '#collapsed' => FALSE,
    );

    $form['mtt_settings']['tabs'] = array(
        '#type' => 'vertical_tabs',
    );

    $form['mtt_settings']['tabs']['basic_settings'] = array(
        '#type' => 'fieldset',
        '#title' => t('Basic Settings'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
    );

    $form['mtt_settings']['tabs']['basic_settings']['breadcrumb_display'] = array(
        '#type' => 'checkbox',
        '#title' => t('Show breadcrumb'),
        '#description'   => t('Use the checkbox to enable or disable the breadcrumb.'),
        '#default_value' => theme_get_setting('breadcrumb_display','sunrise'),
    );

    $form['mtt_settings']['tabs']['basic_settings']['scrolltop_display'] = array(
        '#type' => 'checkbox',
        '#title' => t('Show scroll-to-top button'),
        '#description'   => t('Use the checkbox to enable or disable scroll-to-top button.'),
        '#default_value' => theme_get_setting('scrolltop_display', 'sunrise'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
    );

    $form['mtt_settings']['tabs']['bootstrap_cdn'] = array(
        '#type' => 'fieldset',
        '#title' => t('BootstrapCDN'),
        '#group' => 'bootstrap',
    );
    
    $form['mtt_settings']['tabs']['bootstrap_cdn']['bootstrap_css_cdn'] = array(
        '#type' => 'select',
        '#title' => t('BootstrapCDN Complete CSS version'),
        '#options' => drupal_map_assoc(array(
          '3.2.0',
        )),
        '#default_value' => theme_get_setting('bootstrap_css_cdn'),
        '#empty_value' => NULL,
    );
    
    $form['mtt_settings']['tabs']['bootstrap_cdn']['bootstrap_js_cdn'] = array(
        '#type' => 'select',
        '#title' => t('BootstrapCDN Complete JavaScript version'),
        '#options' => drupal_map_assoc(array(
          '3.2.0',
        )),
        '#default_value' => theme_get_setting('bootstrap_js_cdn'),
        '#empty_option' => t('Disabled'),
        '#empty_value' => NULL,
    );

    $form['mtt_settings']['tabs']['ie8_support'] = array(
        '#type' => 'fieldset',
        '#title' => t('IE8 support'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
    );

    $form['mtt_settings']['tabs']['ie8_support']['responsive_respond'] = array(
        '#type' => 'checkbox',
        '#title' => t('Add Respond.js [<em>bootstrap-business/js/respond.min.js</em>] JavaScript to add basic CSS3 media query support to IE 6-8.'),
        '#default_value' => theme_get_setting('responsive_respond','sunrise'),
        '#description'   => t('IE 6-8 require a JavaScript polyfill solution to add basic support of CSS3 media queries. Note that you should enable <strong>Aggregate and compress CSS files</strong> through <em>/admin/config/development/performance</em>.'),
    );
    
    
    
    
    $form['mtt_settings']['tabs']['google_map'] = array(
      '#type' => 'fieldset',
      '#title' => t('Google Map'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
  );
  
  $form['mtt_settings']['tabs']['google_map']['google_map_js'] = array(
    '#type' => 'checkbox',
    '#title' => t('Include Google Map javascript code'),
	'#default_value' => theme_get_setting('google_map_js','sunrise'),
  );

  $form['mtt_settings']['tabs']['google_map']['google_map_latitude'] = array(
    '#type' => 'textfield',
    '#title' => t('Google Map Latitude'),
    '#description'   => t('For example 40.726576'),
    '#default_value' => theme_get_setting('google_map_latitude','sunrise'),
    '#size' => 5,
    '#maxlength' => 10,
  );  

  $form['mtt_settings']['tabs']['google_map']['google_map_longitude'] = array(
    '#type' => 'textfield',
    '#title' => t('Google Map Longitude'),
    '#description'   => t('For example -74.046822'),
    '#default_value' => theme_get_setting('google_map_longitude','sunrise'),
    '#size' => 5,
    '#maxlength' => 10,
  ); 
  
  $form['mtt_settings']['tabs']['google_map']['google_map_zoom'] = array(
    '#type' => 'textfield',
    '#title' => t('Google Map Zoom'),
    '#description'   => t('For example 13'),
    '#default_value' => theme_get_setting('google_map_zoom','sunrise'),
    '#size' => 5,
    '#maxlength' => 10,
  ); 
  
  $form['mtt_settings']['tabs']['google_map']['google_map_show'] = array(
    '#type' => 'textfield',
    '#title' => t('Show Map text'),
    '#description'   => t('Define the text for showing the map to be displayed to the visitor. The default is: Show Map'),
    '#default_value' => theme_get_setting('google_map_show','sunrise'),
  ); 
  
  $form['mtt_settings']['tabs']['google_map']['google_map_hide'] = array(
    '#type' => 'textfield',
    '#title' => t('Hide Map text'),
    '#description'   => t('Define the text for hiding the map to be displayed to the visitor. The default is: Hide Map'),
    '#default_value' => theme_get_setting('google_map_hide','sunrise'),
  ); 
  
  $form['mtt_settings']['tabs']['google_map']['google_map_canvas'] = array(
    '#type' => 'textfield',
    '#title' => t('Google Map Canvas Id'),
    '#description'   => t('Set the Google Map Canvas Id. For example: map-canvas'),
    '#default_value' => theme_get_setting('google_map_canvas','sunrise'),
  ); 
    
    
    
    
    
}