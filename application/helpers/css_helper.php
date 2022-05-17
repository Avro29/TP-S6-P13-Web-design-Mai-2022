<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
    if ( ! function_exists('css_url')){
        function css_url($module){
            return base_url("assets/css/".$module);
        }
    }

    defined('BASEPATH') OR exit('No direct script access allowed');
    if ( ! function_exists('js_url')){
        function js_url($module){
            return base_url("assets/js/".$module);
        }
    }

    defined('BASEPATH') OR exit('No direct script access allowed');
    if ( ! function_exists('vendors_url')){
        function vendors_url($module){
            return base_url("assets/vendors/".$module);
        }
    }

    defined('BASEPATH') OR exit('No direct script access allowed');
    if ( ! function_exists('fonts_url')){
        function fonts_url($module){
            return base_url("assets/fonts/".$module);
        }
    }

    defined('BASEPATH') OR exit('No direct script access allowed');
    if ( ! function_exists('partials_url')){
        function partials_url($module){
            return base_url("assets/partials/".$module);
        }
    }

    defined('BASEPATH') OR exit('No direct script access allowed');
    if ( ! function_exists('scss_url')){
        function scss_url($module){
            return base_url("assets/scss/".$module);
        }
    }

    defined('BASEPATH') OR exit('No direct script access allowed');
    if ( ! function_exists('images_url')){
        function image_url($module){
            return base_url("assets/images/".$module);
        }
    }


?>    