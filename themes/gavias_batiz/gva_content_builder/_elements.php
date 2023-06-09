<?php

function gavias_content_builder_set_elements(){
   return $shortcodes = array(
    'gva_column',
    'gva_row',
    'gva_accordion',
    'gva_box_hover', 
    'gva_button',
    'gva_call_to_action',
    'gva_chart',
    'gva_counter',
    'gva_divider',
    'gva_drupal_block',
    'gva_gmap',
    'gva_heading',
    'gva_icon_box',
    'gva_image',
    'gva_our_team',
    'gva_pricing_item',
    'gva_pricing_image',
    'gva_progress',
    'gva_quote_text',
    'gva_services_carousel',
    'gva_tabs',
    'gva_text',
    'gva_text_noeditor',
    'gva_video_box',
    'gva_view',
    'gva_view_tabs',
    'gva_view_tabs_ajax',
  );
}

function gavias_batiz_get_colors_block(){
  return array(
    ''              => 'None',
    'red'           => 'Red',
    'pink'          => 'Pink',
    'light-pink'    => 'Light Pink',
    'orange'        => 'Orange',
    'yellow'        => 'Yellow',
    'green'         => 'Green',
    'blue'          => 'Blue',
    'dark-mint'     => 'Dark Mint',
    'violet'        => 'Violet',
    'navy'          => 'Navy',
    'gray'          => 'Gray',
    'black'         => 'Black',
    'purple'        => 'Purple'
  );
}

function gavias_merge_atts( $pairs, $atts, $shortcode = '' ) {
    $atts = (array)$atts;
    $out = array();
    foreach($pairs as $name => $default) {
        if ( array_key_exists($name, $atts) )
            $out[$name] = $atts[$name];
        else
            $out[$name] = $default;
    }
    return $out;
}

function gavias_render_views($views_name, $view_id, $arguments = ''){
    $result = array('content'=> '', 'view_title' => '');
    
    $view_title = '';
    $output = '';
    try{
        $view = Drupal\views\Views::getView($views_name);
        if($view){
            if($view->access($view_id)){
                $element = $view->buildRenderable($view_id);
                if($element){
                    if($view->getTitle()){
                        $view_title = $view->getTitle();
                    }
                    $element['#view_id'] = $view->storage->id();
                    $element['#view_display_show_admin_links'] = $view->getShowAdminLinks();
                    $element['#view_display_plugin_id'] = $view->display_handler->getPluginId();
                    $element['#arguments'] = $arguments;
                    views_add_contextual_links($element, 'block', $view_id);
                    $element = Drupal\views\Element\View::preRenderViewElement($element);
                    if (empty($element['view_build'])) {
                      $element = ['#cache' => $element['#cache']];
                    }
                    if($element){
                      $output .= '<div class="block-content">'. \Drupal::service('renderer')->render($element) . '</div>';
                    }
                }
            }else{
                $output .= '<div>Missing view, block "'.$views_name.' - '.$view_id.'"</div>';
            }
        }
   }catch(Exception $e){
        $output .=  '<div>Missing view, block "'.$views_name.' - '.$view_id.'"</div>';
   }
   $result['content'] = $output;
   $result['view_title'] = $view_title;
   //$view->destroy();
   $element = null;
   $view = null;
   return $result;
}