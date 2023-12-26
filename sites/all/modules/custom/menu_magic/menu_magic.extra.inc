<?php

function menu_magic_extra($wildcard){
    $content['raw_markup']=array(
        '#type' => 'markup',
        '#markup' => '<p>'. t('the wildcard contains "%wildcard"',array('%wildcard'=>$wildcard)) . '</p>'
    );
    return $content;
}
