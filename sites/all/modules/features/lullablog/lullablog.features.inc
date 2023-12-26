<?php

/**
 * @file
 * lullablog.features.inc
 */

/**
 * Implements hook_views_api().
 */
function lullablog_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function lullablog_node_info() {
  $items = array(
    'blog' => array(
      'name' => t('Blog'),
      'base' => 'node_content',
      'description' => t('Blog content type'),
      'has_title' => '1',
      'title_label' => t('Blog'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
