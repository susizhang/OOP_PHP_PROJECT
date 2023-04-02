<?php

class Controller{

    function runAction($actionName){

       if(method_exists($this,'runBeforeAction')){
        
        $result= $this-> runBeforeAction();

        if($result==false){
            return;
        }
          
       }

         $actionName .= 'Action';
         
        if( method_exists($this, $actionName)){
            // adding Action to the end of $actionName
        
            $this -> $actionName();
            
        }else{
            include 'view/status-pages/404.html';
        }
     }


}