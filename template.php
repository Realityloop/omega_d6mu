<?php
// $Id: template.php,v 1.1.2.9 2010/07/09 14:53:42 himerus Exp $

/*
 * Add any conditional stylesheets you will need for this sub-theme.
 *
 * To add stylesheets that ALWAYS need to be included, you should add them to
 * your .info file instead. Only use this section if you are including
 * stylesheets based on certain conditions.
 */
/* -- Delete this line if you want to use and modify this code
// Example: optionally add a fixed width CSS file.
if (theme_get_setting('omega_d6mu_fixed')) {
  drupal_add_css(path_to_theme() . '/layout-fixed.css', 'theme', 'all');
}
// */


/**
 * Implementation of HOOK_theme().
 */
function omega_d6mu_theme(&$existing, $type, $theme, $path) {
  $hooks = omega_theme($existing, $type, $theme, $path);
  // Add your theme hooks like this:
  
  $hooks['omega_d6mu_local_footer'] = array(
    'variables' => array(
      'footer_title' => NULL,
      'org_name' => NULL,
      'org_location_1' => NULL,
      'org_location_2' => NULL,
      'org_location_3' => NULL,
      'phone' => NULL,
      'fax' => NULL,
      'fb_url' => NULL,
      'twitter_url' => NULL,
      'authoriser' => NULL,
      'maintainer' => NULL,
      'created' => NULL,
      'modified' => NULL,
    ),
    'template' => 'templates/omega-d6mu-local-footer'
  );
  
  $hooks['omega_d6mu_heading_text'] = array(
    'variables' => array(
      'heading_label' => NULL,
      'heading_text' => NULL,
    ),
    'template' => 'templates/omega-d6mu-heading-text'
  );
  
  // @TODO: Needs detailed comments. Patches welcome!
  return $hooks;
}

/**
 * Override or insert variables into all templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered (name of the .tpl.php file.)
 */
/* -- Delete this line if you want to use this function
function omega_d6mu_preprocess(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
function omega_d6mu_preprocess_page(&$vars, $hook) {
  ($vars['is_front']) ? $path = theme_get_setting('omega_d6mu_header_img_front_path') : $path = theme_get_setting('omega_d6mu_header_img_path');
  if (!file_exists($path)) {
    // If the path to the header image is still the default as defined in omega_d6mu.info, then we need to prepend the them path.
    // In any other case the path will be to a file in the files directory.
    $path = drupal_get_path('theme', 'omega_d6mu') . $path;
  }
  $vars['header_img'] = 'style="background-image: url(' . $path . ');"';
  
  $vars['local_footer'] = theme('omega_d6mu_local_footer');
  $vars['heading_text'] = theme('omega_d6mu_heading_text');
}

/**
 * Extracts theme settings for use in the local footer.
 *
 * See templates/omega-d6mu-local-footer.tpl.php
 */
function omega_d6mu_preprocess_omega_d6mu_heading_text(&$vars) {
  if (!$vars['heading_label']) {
    $vars['heading_label'] = theme_get_setting('omega_d6mu_heading_label');
  }
  
  if (!$vars['heading_text']) {
    $vars['heading_text'] = theme_get_setting('omega_d6mu_heading_text');
  }
}

/**
 * Extracts theme settings for use in the local footer.
 *
 * See templates/omega-d6mu-local-footer.tpl.php
 */
function omega_d6mu_preprocess_omega_d6mu_local_footer(&$vars) {
  
  if (!$vars['footer_title']) {
    $vars['footer_title'] = theme_get_setting('omega_d6mu_footer_title');
  }
  
  if (!$vars['org_name']) {
    $vars['org_name'] = theme_get_setting('omega_d6mu_org_name');
  }
  
  if (!$vars['org_location_1']) {
    $vars['org_location_1'] = theme_get_setting('omega_d6mu_org_location_1');
  }
  
  if (!$vars['org_location_2']) {
    $vars['org_location_2'] = theme_get_setting('omega_d6mu_org_location_2');
  }
  
  if (!$vars['org_location_3']) {
    $vars['org_location_3'] = theme_get_setting('omega_d6mu_org_location_3');
  }
  
  if (!$vars['phone']) {
    $vars['phone'] = theme_get_setting('omega_d6mu_phone');
  }
  
  if (!$vars['fax']) {
    $vars['fax'] = theme_get_setting('omega_d6mu_fax');
  }
  
  if (!$vars['email_link']) {
    $vars['email_link'] = l('Make an enquiry', theme_get_setting('omega_d6mu_email_link'));
  }
  
  if (!$vars['fb_url']) {
    $vars['fb_url'] = l('Facebook', theme_get_setting('omega_d6mu_fb_url'), array('attributes' => array('class' => 'facebook')));
  }
  
  if (!$vars['twitter_url']) {
    $vars['twitter_url'] = l('Twitter', theme_get_setting('omega_d6mu_twitter_url'), array('attributes' => array('class' => 'twitter')));
  }

  if (!$vars['authoriser']) {
    $vars['authoriser'] = theme_get_setting('omega_d6mu_authoriser');
  }

  if (!$vars['maintainer']) {
    $vars['maintainer'] = theme_get_setting('omega_d6mu_maintainer');
  }

  if (!$vars['created']) {
    $vars['created'] = theme_get_setting('omega_d6mu_created');
  }

  if (!$vars['modified']) {
    $vars['modified'] = theme_get_setting('omega_d6mu_modified');
  }  
}

/**
 * Override or insert variables into the node templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function omega_d6mu_preprocess_node(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function omega_d6mu_preprocess_comment(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function omega_d6mu_preprocess_block(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */


/**
 * Create a string of attributes form a provided array.
 * 
 * @param $attributes
 * @return string
 */
function omega_d6mu_render_attributes($attributes) {
	return omega_render_attributes($attributes);  
}

function omega_d6mu_menu_item($link, $has_children, $menu = '', $in_active_trail = FALSE, $extra_class = NULL) {
  $class = ($menu ? 'expanded' : ($has_children ? 'collapsed' : 'leaf'));
  if (!empty($extra_class)) {
    $class .= ' ' . $extra_class;
  }
  if ($in_active_trail) {
    $class .= ' active-trail';
  }
  
  if ($has_children) {
    $link .= '<span class="more" classname="more">More</span>';
  }
  
  return '<li class="' . $class . '">' . $link . $menu . "</li>\n";
}