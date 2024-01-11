<?php

function checkEmail($mail){

    if(str_contains($mail, '.') && str_contains($mail, '@')){
        return true;
    }else{
        return false;
    }
}

?>