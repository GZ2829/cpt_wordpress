<?php

/* Disable WordPress Admin Bar for all users */

add_filter( 'show_admin_bar', '__return_false' );


// Determine if component is empty for nav and template logic

function isEmptyArr($data, $url = false){

    $dataArr = implode(" ", $data);
    if($url){
        $dataArr = str_replace($url, "", $dataArr);
    }
    if(trim($dataArr) == '' || trim($dataArr) == 0 || trim($dataArr) == null){
        return true;
    }else {
        return false;
    }

}


// Function to get and organize custom home data

function getHomePodData($baseUrl){
    // Call Home Settings Pod 
    $homePod = pods('custom_home_settings');
    $homePod = $homePod->find();

    // Global variables
    $first_name = $homePod->display( 'global_first_name' );
    $last_name = $homePod->display( 'global_last_name' );
    $theme_color = $homePod->display( 'global_theme_color' );


    $heroData = [
        'baseUrl' => $baseUrl,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'bg_type' => $homePod->field('hero_bg_type'),
        'bg_video' => $homePod->display('hero_bg_video'),
        'bg_image' => $homePod->field('hero_bg_image._img'),
        'bg_color' => $homePod->display('hero_bg_color'),
        'typed_words' => $homePod->display('hero_typed_words'),
        'job_title' => $homePod->display('hero_job_title'),
        'portrait' => $homePod->field( 'hero_portrait_image._img.500x500' ),
        'document' => $homePod->display('hero_download_document'),
        'download_button' => $homePod->field('hero_download_button'),
        'download_button_text' => $homePod->field('hero_download_button_text'),
        'contact_button' => $homePod->field('hero_contact_button'),
        'contact_button_text' => $homePod->field('hero_contact_button_text')
    ];

    $aboutData = [
        'title' => $homePod->field('about_title'),
        'bg_title' => $homePod->display('about_bg_title'),
        'img' => $homePod->field( 'about_img._img.450x450' ),
        'txt_title' => $homePod->display('about_txt_title'),
        'txt_desc' => $homePod->display('about_txt_desc'),
        'stats' => $homePod->display('about_stats')
    ];

    $qualificationData = [
        'title' => $homePod->field('qualification_title'),
        'bg_title' => $homePod->field('qualification_bg_title'),
        'education' => $homePod->field('qualification_education'),
        'experience' => $homePod->field('qualification_experience')
    ];

    $skillData = [
        'baseUrl' => $baseUrl,
        'title' => $homePod->field('skills_title'),
        'bg_title' => $homePod->field('skills_bg_title'),
        'chart_title' => $homePod->field('skills_chart_title'),
        'list' => $homePod->field('skills_list')
    ];

    $portfolioData = [
        'baseUrl' => $baseUrl,
        'title' => $homePod->field('portfolio_title'),
        'bg_title' => $homePod->field('portfolio_bg_title'),
        'projects' => $homePod->field('portfolio_projects')
    ];

    $contactData = [
        'title' => $homePod->field('contact_title'),
        'bg_title' => $homePod->field('contact_bg_title'),
        'form_id' => $homePod->field('contact_form_id')
    ];

    $footerData = [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'twitter' => $homePod->display( 'twitter_link' ),
        'facebook' => $homePod->display( 'facebook_link' ),
        'instagram' => $homePod->display( 'instagram_link' ),
        'linkedin' => $homePod->display( 'linkedin_link' )
    ];

    // Computed Variables

    $hero_empty = isEmptyArr($heroData, $baseUrl);
    $about_empty = isEmptyArr($aboutData);
    $qualification_empty = isEmptyArr($qualificationData);
    $skill_empty = isEmptyArr($skillData, $baseUrl);
    $portfolio_empty = isEmptyArr($portfolioData, $baseUrl);
    $contact_empty = isEmptyArr($contactData);

    $has_hero_bg = (!empty($heroData['bg_color']) || !empty($heroData['bg_image']) || !empty($heroData['bg_video'])) ? true : false;
    $has_hero_bg = $has_hero_bg && !empty($heroData['bg_type']) ? true : false;

    if(!$about_empty){
        $aboutData['stats'] = explode(',', $homePod->display('about_stats'));
    }


    // Filling out header data here after components have been checked for empty
    $headerData = [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'has_hero_bg' => $has_hero_bg,
        'hero_empty' => $hero_empty,
        'about_empty' => $about_empty,
        'qualification_empty' => $qualification_empty,
        'skill_empty' => $skill_empty,
        'portfolio_empty' => $portfolio_empty, 
        'contact_empty' => $contact_empty,
    ];


    return [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'theme_color' => $theme_color,
        'has_hero_bg' => $has_hero_bg,
        'hero_empty' => $hero_empty,
        'about_empty' => $about_empty,
        'qualification_empty' => $qualification_empty,
        'skill_empty' => $skill_empty,
        'portfolio_empty' => $portfolio_empty, 
        'contact_empty' => $contact_empty,
        'headerData' => $headerData,
        'heroData' => $heroData,
        'aboutData' => $aboutData,
        'qualificationData' => $qualificationData,
        'skillsData' => $skillData,
        'portfolioData' => $portfolioData,
        'contactData' => $contactData,
        'footerData' => $footerData,
    ];
};
