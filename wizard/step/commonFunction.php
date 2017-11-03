<?php

class CommonFunction
{

    public function postFieldValue($attributeName){

        if(!isset($_POST[$attributeName])){
            $valueToPost= "";
        }else{
            $valueToPost = $_POST[$attributeName];
        }
        return $valueToPost;
    }

}

$pst = new CommonFunction();