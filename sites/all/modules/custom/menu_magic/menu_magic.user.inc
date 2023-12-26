<?php

function menu_magic_user_tab($user_id){
    if(is_numeric($user_id) && $account = user_load($user_id)){
        $content['raw_markup']=array(
            '#type' => 'markup',
            '#markup' => '<p>'. t('the user name is "%username"',array('%username'=>$account->name)) . '</p>'
        );
        return $content;
    }else{
        return drupal_not_found();
    }
    
}