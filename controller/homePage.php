<?php

class HomePageController extends Controller{
    function defaultAction(){
        // fetch SEO
        // Get page data
        // $title
        // $content
        // $variable

        $variables['title']='Home page';
        $variables['content']='Welcome to our homepage';

        $template = new Template('default');
        $template -> view('static_page',$variables);
    
    }
}
