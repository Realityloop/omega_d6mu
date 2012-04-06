<?php
// $Id: theme-settings.php,v 1.1.2.7 2010/06/14 13:17:05 himerus Exp $

// Include the definition of omega_settings() and omega_theme_get_default_settings().
include_once './' . drupal_get_path('theme', 'omega') . '/theme-settings.php';

/**
 * Implementation of THEMEHOOK_settings() function.
 *
 * @param $saved_settings
 *   An array of saved settings for this theme.
 * @return
 *   A form array.
 */
function omega_d6mu_settings($saved_settings) {
  $form = array();
  
  // Get the default values from the .info file.
  $subtheme_defaults = omega_theme_get_default_settings('omega_d6mu');
  
  // CUSTOM THEME SETTINGS
  $form += omega_d6mu_custom_settings($saved_settings, $subtheme_defaults);
  
  // OMEGA THEME SETTINGS
  $form += omega_settings($saved_settings, $subtheme_defaults);
  
  // Return the form
  return $form;
}

function omega_d6mu_custom_settings($saved_settings, $subtheme_defaults) {
  $form = array();
  
  // Get the default values from the .info file.
  if (count($subtheme_defaults) > 0) {
    // Allow a subtheme to override the default values.
    $settings = array_merge($subtheme_defaults, $saved_settings);
    
  }
  else {
    // Merge the saved variables and their default values.
    $defaults = omega_theme_get_default_settings('omega_d6mu');
    $settings = array_merge($defaults, $saved_settings);
  }
  
  $form['omega_d6mu_container'] = array(
    '#type' => 'fieldset',
    '#title' => t('Melbourne University settings'),
    '#description' => t('Site specific settings for various information viewable in the Melbourne University templates.'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#weight' => -100,
  );
    // Header Settings.
    $form['omega_d6mu_container']['omega_d6mu_header'] = array(
      '#type' => 'fieldset',
      '#title' => t('Header Settings'),
      '#description' => t('Header area settings'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
    );
      // Footer Title.
      $form['omega_d6mu_container']['omega_d6mu_header']['omega_d6mu_heading_label']= array(
        '#type' => 'textfield',
        '#title' => t('Heading label'),
        '#size' => 60,
        '#default_value' => $saved_settings['omega_d6mu_heading_label'],
        '#description'   => t('Enter a custom heading label.'),
      );
      // Footer Title.
      $form['omega_d6mu_container']['omega_d6mu_header']['omega_d6mu_heading_text']= array(
        '#type' => 'textarea',
        '#title' => t('Heading Text'),
        '#size' => 60,
        '#default_value' => $saved_settings['omega_d6mu_heading_text'],
        '#description'   => t('Enter some custom introductory heading text.'),
      );
    // Local Footer Settings.
    $form['omega_d6mu_container']['omega_d6mu_local_footer'] = array(
      '#type' => 'fieldset',
      '#title' => t('Local Footer Settings'),
      '#description' => t('Local footer area settings (Light grey area towards the bottom of each page)'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
    );
      // Footer Title.
      $form['omega_d6mu_container']['omega_d6mu_local_footer']['omega_d6mu_footer_title']= array(
        '#type' => 'textfield',
        '#title' => t('Footer Title'),
        '#size' => 60,
        '#default_value' => $saved_settings['omega_d6mu_footer_title'],
        '#description'   => t('Enter a custom title for the local footer area.'),
      );
      // Organisation Name.
      $form['omega_d6mu_container']['omega_d6mu_local_footer']['omega_d6mu_org_name']= array(
        '#type' => 'textfield',
        '#title' => t('Organisation Name'),
        '#size' => 60,
        '#default_value' => $saved_settings['omega_d6mu_org_name'],
        '#description'   => t('Enter a custom organisation name for the local footer area.'),
      );
      // Organisation Location
      $form['omega_d6mu_container']['omega_d6mu_local_footer']['omega_d6mu_org_location'] = array(
        '#type' => 'fieldset',
        '#title' => t('Organisation Location'),
        '#description' => t(''),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
      );
        $form['omega_d6mu_container']['omega_d6mu_local_footer']['omega_d6mu_org_location'] ['omega_d6mu_org_location_1']= array(
          '#type' => 'textfield',
          '#title' => t('Line 1'),
          '#size' => 60,
          '#default_value' => $saved_settings['omega_d6mu_org_location_1'],
          '#description'   => '',
        );
        $form['omega_d6mu_container']['omega_d6mu_local_footer']['omega_d6mu_org_location'] ['omega_d6mu_org_location_2']= array(
          '#type' => 'textfield',
          '#title' => t('Line 2'),
          '#size' => 60,
          '#default_value' => $saved_settings['omega_d6mu_org_location_2'],
          '#description'   => '',
        );
        $form['omega_d6mu_container']['omega_d6mu_local_footer']['omega_d6mu_org_location'] ['omega_d6mu_org_location_3']= array(
          '#type' => 'textfield',
          '#title' => t('Line 3'),
          '#size' => 60,
          '#default_value' => $saved_settings['omega_d6mu_org_location_3'],
          '#description'   => '',
        );
      // Phone Number.
      $form['omega_d6mu_container']['omega_d6mu_local_footer']['omega_d6mu_phone']= array(
        '#type' => 'textfield',
        '#title' => t('Phone Number'),
        '#size' => 60,
        '#default_value' => $saved_settings['omega_d6mu_phone'],
        '#description'   => t('Enter a custom phone number for the local footer area.'),
      );
      // Fax Number.
      $form['omega_d6mu_container']['omega_d6mu_local_footer']['omega_d6mu_fax']= array(
        '#type' => 'textfield',
        '#title' => t('Fax Number'),
        '#size' => 60,
        '#default_value' => $saved_settings['omega_d6mu_fax'],
        '#description'   => t('Enter a custom fax number for the local footer area.'),
      );
      // Email Link.
      $form['omega_d6mu_container']['omega_d6mu_local_footer']['omega_d6mu_email_link']= array(
        '#type' => 'textfield',
        '#title' => t('Email Link Path'),
        '#size' => 60,
        '#default_value' => $saved_settings['omega_d6mu_email_link'],
        '#description'   => t('Enter a valid site path to which the "Make an enquiry" link will point to.'),
      );
      // Facebook URL.
      $form['omega_d6mu_container']['omega_d6mu_local_footer']['omega_d6mu_fb_url']= array(
        '#type' => 'textfield',
        '#title' => t('Facebook Page URL'),
        '#size' => 60,
        '#default_value' => $saved_settings['omega_d6mu_fb_url'],
        '#description'   => t('Enter the URL of the facebook page the facebook icon in the local footer will link to.'),
      );
      // Twitter URL.
      $form['omega_d6mu_container']['omega_d6mu_local_footer']['omega_d6mu_twitter_url']= array(
        '#type' => 'textfield',
        '#title' => t('Twitter Account URL'),
        '#size' => 60,
        '#default_value' => $saved_settings['omega_d6mu_twitter_url'],
        '#description'   => t('Enter the URL of the twitter account the twitter icon in the local footer will link to.'),
      );
      // Authoriser.
      $form['omega_d6mu_container']['omega_d6mu_local_footer']['omega_d6mu_authoriser']= array(
        '#type' => 'textfield',
        '#title' => t('Authoriser'),
        '#size' => 60,
        '#default_value' => $saved_settings['omega_d6mu_authoriser'],
        '#description'   => t('Enter an authoriser for the local footer area.'),
      );
      // Maintainer.
      $form['omega_d6mu_container']['omega_d6mu_local_footer']['omega_d6mu_maintainer']= array(
        '#type' => 'textfield',
        '#title' => t('Maintainer'),
        '#size' => 60,
        '#default_value' => $saved_settings['omega_d6mu_maintainer'],
        '#description'   => t('Enter an maintainer for the local footer area..'),
      );
      // Created Date.
      $form['omega_d6mu_container']['omega_d6mu_local_footer']['omega_d6mu_created']= array(
        '#type' => 'textfield',
        '#title' => t('Date Created'),
        '#size' => 60,
        '#default_value' => $saved_settings['omega_d6mu_created'],
        '#description'   => t('Enter a value for "Date Created" in the local footer area.'),
      );
      // Modified Date.
      $form['omega_d6mu_container']['omega_d6mu_local_footer']['omega_d6mu_modified']= array(
        '#type' => 'textfield',
        '#title' => t('Date Modified'),
        '#size' => 60,
        '#default_value' => $saved_settings['omega_d6mu_modified'],
        '#description'   => t('Enter a value for "Date Modified" in the local footer area.'),
      );
      
    
    // Header Images.
    $form['omega_d6mu_container']['header_img'] = array(
      '#type' => 'fieldset',
      '#title' => t('Header Images'),
      '#description' => t("Upload background images for the header area of the site."),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
    );
      
      // Home Page Header Image
      $form['omega_d6mu_container']['header_img']['omega_d6mu_header_img_front_path'] = array(
        '#type' => 'textfield',
        '#title' => t('Path to home page header image'),
        '#default_value' => $settings['omega_d6mu_header_img_front_path'],
      );
      $form['omega_d6mu_container']['header_img']['omega_d6mu_header_img_front_upload'] = array(
        '#type' => 'file',
        '#title' => t('Upload home page header image'),
      );
      $form['omega_d6mu_container']['header_img']['omega_d6mu_header_img_front_upload']['#element_validate'][] = 'omega_d6mu_settings_header_img_front_submit';
      
      // Secondary Pages Header Image
      $form['omega_d6mu_container']['header_img']['omega_d6mu_header_img_path'] = array(
        '#type' => 'textfield',
        '#title' => t('Path to secondary page header image'),
        '#default_value' => $settings['omega_d6mu_header_img_path'],
      );
      $form['omega_d6mu_container']['header_img']['omega_d6mu_header_img_upload'] = array(
        '#type' => 'file',
        '#title' => t('Upload Secondary page header image'),
      );
      $form['omega_d6mu_container']['header_img']['omega_d6mu_header_img_upload']['#element_validate'][] = 'omega_d6mu_settings_header_img_submit';
    
  // Return the form.
  return $form;
}

/**
* Capture theme settings submissions and update uploaded image
*/
function omega_d6mu_settings_header_img_submit($form, &$form_state) {
  // Check for a new uploaded file, and use that if available.
  if ($file = file_save_upload('omega_d6mu_header_img_upload')) {
    $parts = pathinfo($file->filename);
    $filename = (! empty($key)) ? str_replace('/', '_', $key) .'_omega_d6mu_header_img.'. $parts['extension'] : 'omega_d6mu_header_img.'. $parts['extension'];
    // The image was saved using file_save_upload() and was added to the
    // files table as a temporary file. We'll make a copy and let the garbage
    // collector delete the original upload.
    if (file_copy($file, $filename)) {
      $_POST['omega_d6mu_header_img_path'] = $form_state['values']['omega_d6mu_header_img_path'] = $file->filepath;
    }
  }
}

/**
* Capture theme settings submissions and update uploaded image
*/
function omega_d6mu_settings_header_img_front_submit($form, &$form_state) {
  // Check for a new uploaded file, and use that if available.
  if ($file = file_save_upload('omega_d6mu_header_img_front_upload')) {
    $parts = pathinfo($file->filename);
    $filename = (! empty($key)) ? str_replace('/', '_', $key) .'_omega_d6mu_header_img_front.'. $parts['extension'] : 'omega_d6mu_header_img_front.'. $parts['extension'];
    // The image was saved using file_save_upload() and was added to the
    // files table as a temporary file. We'll make a copy and let the garbage
    // collector delete the original upload.
    if (file_copy($file, $filename)) {
      $_POST['omega_d6mu_header_img_front_path'] = $form_state['values']['omega_d6mu_header_img_front_path'] = $file->filepath;
    }
  }
}