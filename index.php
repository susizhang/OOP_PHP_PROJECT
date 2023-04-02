<?php
session_start();

define('ROOT_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
define('VIEW_PATH', ROOT_PATH.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR);



require_once ROOT_PATH.'src/Controller.php';
require_once ROOT_PATH.'src/template.php';

// if elseif logic


$section=$_GET['section'] ?? $_POST['section']??'home';
$action=$_GET['action']?? $_POST['action']??'default';

if($section=='about_us'){
    include ROOT_PATH.'controller/aboutUsPage.php';
     
    $aboutController= new AboutUsController();
    $aboutController -> runAction($action);

} else if($section=='contact'){
    include ROOT_PATH.'controller/contactUsPage.php';

    // a instance from ContactController class
    $contactController= new ContactController();

      $contactController -> runAction($action);

}else{
    include ROOT_PATH.'controller/homePage.php';
    $homePageController= new HomePageController();
    $homePageController -> runAction($action);
}



