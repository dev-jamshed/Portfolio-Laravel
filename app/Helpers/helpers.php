<?php

use App\Models\GeneralInfo;
use App\Models\Service;
use App\Models\SocialMedia;

if (!function_exists('get_general_info')) {
    function get_general_info()
    {
        return GeneralInfo::first(); // Pehla record return karega
    }
}
if (!function_exists('get_social_media_info')) {
    function get_social_media_info()
    {
        return SocialMedia::all(); // Pehla record return karega
    }
}
if (!function_exists('get_services')) {
    function get_services()
    {
        return Service::all(); // Pehla record return karega
    }
}
