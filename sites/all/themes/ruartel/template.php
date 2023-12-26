<?php

/**
 * @file
 * template.php file for ruartel theme.
 * 
 * Implement preprocess functions and alter hooks in this file
 */

 function ruartel_preprocess_page(&$variables){
    // kpr($variables);
    $variables['hide_site_slogan']=false;
    $slogans = array(
        t('Life is good'),
        t('Life is good 1'),
        t('Life is good 2'),
        t('Life is good 3'),
        t('Life is good 4'),
        t('Life is good 5'),
        t('Life is good 6'),
    );
    $variables['site_slogan']=$slogans[array_rand($slogans)];

    if($variables['logged_in']){
        $variables['footer_message']=t('welcome @username',array('@username'=>$variables['user']->name));
    }else{
        $variables['footer_message']=t('subscribe');
    }

    if($variables['is_front'] == TRUE){
        drupal_add_css(path_to_theme() . '/css/front.css', array('group'=> CSS_THEME));
    }
   
    // kpr($variables);
    // print 'AAAAAAAAAAAA';
 }

 function ruartel_preprocess_node(&$variables){
    if($variables['type']=='article'){
        $node = $variables['node'];
        $variables['submitted_day']=format_date($node->created, 'custom','j');
        $variables['submitted_month']=format_date($node->created, 'custom','M');
        $variables['submitted_year']=format_date($node->created, 'custom','Y');
    }
    if($variables['type'] == 'page'){
        $today= strtolower(date('l'));
        $variables['theme_hook_suggestions'][]='node__' . $today;
        $variables['day_of_the_week']=$today;
        // kpr($variables);
    }
 }