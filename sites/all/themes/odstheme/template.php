<?php

function odstheme_breadcrumb($variables){
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    $breadcrumb[] = drupal_get_title();
    $breadcrumb[0] = l('ODS Home',NULL);
    return '<div class="breadcrumb">' . implode(' <span class="breadcrumb-separator">&raquo;</span> ', $breadcrumb) . '</div>';
  }
}

function odstheme_preprocess_page(&$variables){
	
	 drupal_add_js('https://public.tableau.com/javascripts/api/viz_v1.js', 'external');
	
	if (isset($variables['node']->field_tags)){
		$nodes = $variables['node'];
		
		$variables['show_right_menu'] = false;
		
		foreach ($nodes->field_tags as $delta) {
			  
				foreach ($delta as $item) {		

					if($item['tid']=='1'){
						$variables['show_right_menu'] = true;
						drupal_add_css(path_to_theme() . '/css/style_about_menu.css', array('group' => CSS_THEME, 'weight' => '0'));
						break;
					}
					
				}
			}
	}
	
	
	
}

function odstheme_preprocess_node(&$variables){
	
	$node = $variables['node'];
	
	if (isset($node->field_custom_title[LANGUAGE_NONE][0]['safe_value'])){
		$variables['title'] = $node->field_custom_title[LANGUAGE_NONE][0]['safe_value'];
	}	
}