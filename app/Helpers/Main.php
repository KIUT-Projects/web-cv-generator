<?php

if(!function_exists('is_admin')){
    function is_admin():bool{
        return (auth()->check() && auth()->user()->is_admin) ? true : false;
    }
}

if(!function_exists('is_user')){
    function is_user():bool{
        return (auth()->check()) ? true : false;
    }
}

if(!function_exists('is_guest')){
    function is_guest():bool{
        return (auth()->check()) ? false : true;
    }
}
