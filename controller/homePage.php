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

    $db_server='localhost';
    $db_user='root';
    $db_pass='';
    $db_name='cms_project';
    $conn='';


    $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);

    if($conn){
        echo'You are connected!';
    }else{
        echo'Could not connect!';
    }