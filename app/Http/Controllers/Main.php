<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function arr(){
        $mainArr = array(
            "img" => array("img/icon/7.png","img/icon/8.png","img/icon/10.png","img/icon/11.png"),
            "buttonMessage" => array(
                array(
                    "chinese" => "注册账号",
                    "english" => "FREE REGISTRATION"
                ),
                array(
                    "chinese" => "游戏下载",
                    "english" => "GAME DOWNLOAD"
                ),
                array(
                    "chinese" => "自助改名",
                    "english" => "RE NAME"
                ),
                array(
                    "chinese" => "更新日志",
                    "english" => "UPDATE LOGE"
                ),
            )
        );
        return \view("main",$mainArr);
    }
}
