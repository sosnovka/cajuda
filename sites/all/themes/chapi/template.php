<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
 

function chapi_preprocess_html(&$vars) { 
  $file = theme_get_setting('theme_color') . '-style.css';
  drupal_add_css(path_to_theme() . '/css/'. $file, array('group' => CSS_THEME, 'weight' => 115,'browsers' => array(), 'preprocess' => FALSE));
 
}

 
function chapi_alpha_page_structure_alter(&$vars) {
  if (!empty($vars['#excluded']['content_bottom_first'])) {
    $vars['#excluded']['content_bottom_first']['#weight'] = -99;
    $vars['content']['content']['content']['content_bottom_first'] = $vars['#excluded']['content_bottom_first'];
  }

  if (!empty($vars['#excluded']['content_bottom_second'])) {
    $vars['#excluded']['content_bottom_second']['#weight'] = -98;
    $vars['content']['content']['content']['content_bottom_second'] = $vars['#excluded']['content_bottom_second'];
  }

  if (!empty($vars['#excluded']['content_bottom_third'])) {
    $vars['#excluded']['content_bottom_third']['#weight'] = -97;
    $vars['content']['content']['content']['content_bottom_third'] = $vars['#excluded']['content_bottom_third'];
  }

  if (!empty($vars['#excluded']['content_bottom_fourth'])) {
    $vars['#excluded']['content_bottom_fourth']['#weight'] = -96;
    $vars['content']['content']['content']['content_bottom_fourth'] = $vars['#excluded']['content_bottom_fourth'];
  }
}


function chapi_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  $crumbs = '';
  if (!empty($breadcrumb)) {
    $lastitem = sizeof($breadcrumb);
    $crumbs = '<ul>';
    $a=1;
    foreach($breadcrumb as $value) {
        if ($a!=$lastitem){
         $crumbs .= '<li class="breadcrumb-'.$a.'">'. $value . ' ' . '</li>';
         $a++;
        }
        else {
            $crumbs .= '<li class="breadcrumb-last">'.$value.'</li>';
        }
    }
    $crumbs .= '</ul>';
  }
  return $crumbs;
}

