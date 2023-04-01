<?php

// if elseif logic


$section=$_GET['section'] ?? 'home';

if($section=='about_us'){
    include'controller/aboutUsPage.php';

} elseif($section=='contact'){
    include 'controller/contactUsPage.php';

}else{
    include 'controller/homePage.php';
}



