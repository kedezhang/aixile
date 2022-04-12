<?php

namespace app\controller;
use Error;
use Exception;
use app\model\Counters;
use think\db\Fetch;
use think\response\Html;
use think\response\Json;
use think\facade\Log;
use think\facade\View;
use think\view\driver\Think;

class Male
{
    public function index()
    {
        return view::fetch('male/index',['num'=>rand(100,1000)]);
    }
}