<?php

// if elseif logic


$section=$_GET['section'] ?? $_POST['section']??'home';
$action=$_GET['action']?? $_POST['action']??'show';

if($section=='about_us'){
    include'controller/aboutUsPage.php';

} else if($section=='contact'){
    include 'controller/contactUsPage.php';

}else{
    include 'controller/homePage.php';
}



