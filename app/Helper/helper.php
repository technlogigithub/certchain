<?php 
use App\Models\Page;
use App\Models\Solution;

if (!function_exists('pageData')) {
    function pageData($type, $page)
    {
        return Page::where([ 'type'=>$type, 'page'=>$page])->first();
    }
}

if (!function_exists('solutionData')) {
    function solutionData()
    {
        return Solution::get();
    }
}

?>