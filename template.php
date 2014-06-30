<?php

/* Implemented in video_embed_field.handlers.inc directly */
// function fxblank_video_embed_field_embed_code($vars) {
//   dpm($vars);
//   // Lazy hack to stop (multiple) videos in content (eg accordions)
//   // from autoplaying at once
//   // $embed_code = str_replace('autoplay=1', 'autoplay=0', $embed_code);
//   $vars['embed_code'] = str_replace('autoplay=1', 'autoplay=0', $vars['embed_code']);
//   return 'HELLO';
// }

function fxblank_nodequeue_pager($vars) {
  $pager = getPager($vars['sqid'], $vars['wrap']);
  $prev = FALSE;
  $next = FALSE;
  switch ($vars['links']) {
    case 0:
      $prev = _getPagerPrevious($pager, $vars['nid']);
      break;

    case 1:
      $next = _getPagerNext($pager, $vars['nid']);
      break;

    default:
      $prev = _getPagerPrevious($pager, $vars['nid']);
      $next = _getPagerNext($pager, $vars['nid']);
      break;
  }
  $items = array();
  if ($prev) {
    $text = variable_get('nodequeue_pagers_previous', t('Previous'));
    if($vars['title']) {
      $node = node_load($prev);
      $text .= ' <span class="title">' . $node->title . '<span>';
    }
    $items[] = l($text, 'node/'. $prev, array(
      'html' => TRUE, 
      'attributes' => array('class' => 'btn btn-default')
      ));
  }
  if ($next) {
    $text = variable_get('nodequeue_pagers_next', t('Next'));
    if($vars['title']) {
      $node = node_load($next);
      $text .= ' <span class="title">' . $node->title . '<span>';
    }
    $items[] = l($text, 'node/'. $next, array(
      'html' => TRUE, 
      'attributes' => array('class' => 'btn btn-primary')
      ));
  }
  return theme('item_list', array('items' => $items, 'attributes' => array('class' => 'nodequeue_pager')));
}

/*
  Preprocess
*/

/*
function fxblank_preprocess_html(&$vars) {
  //  kpr($vars['content']);
}
*/
/*
function fxblank_preprocess_page(&$vars,$hook) {
  //typekit
  //drupal_add_js('http://use.typekit.com/XXX.js', 'external');
  //drupal_add_js('try{Typekit.load();}catch(e){}', array('type' => 'inline'));

  //webfont
  //drupal_add_css('http://cloud.webtype.com/css/CXXXX.css','external');
  
  //googlefont 
  //  drupal_add_css('http://fonts.googleapis.com/css?family=Bree+Serif','external');
 
}
*/
/*
function fxblank_preprocess_region(&$vars,$hook) {
  //  kpr($vars['content']);
}
*/
/*
function fxblank_preprocess_block(&$vars, $hook) {
  //  kpr($vars['content']);

  //lets look for unique block in a region $region-$blockcreator-$delta
   $block =  
   $vars['elements']['#block']->region .'-'. 
   $vars['elements']['#block']->module .'-'. 
   $vars['elements']['#block']->delta;
   
  // print $block .' ';
   switch ($block) {
     case 'header-menu_block-2':
       $vars['classes_array'][] = '';
       break;
     case 'sidebar-system-navigation':
       $vars['classes_array'][] = '';
       break;
    default:
    
    break;

   }


  switch ($vars['elements']['#block']->region) {
    case 'header':
      $vars['classes_array'][] = '';
      break;
    case 'sidebar':
      $vars['classes_array'][] = '';
      $vars['classes_array'][] = '';
      break;
    default:

      break;
  }

}
*/
/*
function fxblank_preprocess_node(&$vars,$hook) {
  //  kpr($vars['content']);

  // add a nodeblock 
  // in .info define a region : regions[block_in_a_node] = block_in_a_node 
  // in node.tpl  <?php if($noderegion){ ?> <?php print render($noderegion); ?><?php } ?>
  //$vars['block_in_a_node'] = block_get_blocks_by_region('block_in_a_node');
}
*/
/*
function fxblank_preprocess_comment(&$vars,$hook) {
  //  kpr($vars['content']);
}
*/
/*
function fxblank_preprocess_field(&$vars,$hook) {
  //  kpr($vars['content']);
  //add class to a specific field
  switch ($vars['element']['#field_name']) {
    case 'field_ROCK':
      $vars['classes_array'][] = 'classname1';
    case 'field_ROLL':
      $vars['classes_array'][] = 'classname1';
      $vars['classes_array'][] = 'classname2';
      $vars['classes_array'][] = 'classname1';
    case 'field_FOO':
      $vars['classes_array'][] = 'classname1';
    case 'field_BAR':
      $vars['classes_array'][] = 'classname1';    
    default:
      break;
  }

}
*/
/*
function fxblank_preprocess_maintenance_page(){
  //  kpr($vars['content']);
}
*/
/*
function fxblank_form_alter(&$form, &$form_state, $form_id) {
  //if ($form_id == '') {
  //....
  //}
}
*/

