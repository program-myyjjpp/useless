<?php


use Carbon\Carbon;

require_once base_path('app/helpers.php');
Carbon::setLocale('zh_CN');
return [
    support\bootstrap\Session::class,
];
