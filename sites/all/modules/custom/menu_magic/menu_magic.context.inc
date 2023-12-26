<?php

function menu_magic_node_context($node){
    $text = $node->body['und'][0]['value'];
    $output = array(
        '#type' => 'markup',
        '#markup' => '<p>'. $text . '</p>'
    );
    return $output;
}