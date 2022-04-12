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
    /**
     * 主页静态页面
     * @return Html
     */
    public function index()
    {
        return response(file_get_contents(dirname(dirname(__FILE__)).'/view/male/index.html'));
    }
}