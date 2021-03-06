<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogsInfo;
use App\WebInfo;
use App\DownloadInfo;

class Main extends Controller
{
    public function arr(){
        if(!empty(session("downloadInfo"))){
            $downloadinfo = session("downloadInfo");
            $webinfo = session('webInfo');
        }else{
            $downloadinfo = DownloadInfo::all();
            $webinfo = WebInfo::all();
            session(['downloadInfo',$downloadinfo]);
            session(['webInfo',$webinfo]);
        }

        $mainArr = array(
            "img" => array("img/icon/7.png","img/icon/8.png","img/icon/10.png","img/icon/11.png",
                           "img/icon/6.png","img/icon/2.png","img/icon/3.png","img/icon/4.png",),
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
                array(
                    "chinese" => "联系管理",
                    "english" => ""
                ),
                array(
                    "chinese" => "自助赞助",
                    "english" => ""
                ),
                array(
                    "chinese" => "外挂举报",
                    "english" => ""
                ),
                array(
                    "chinese" => "角色恢复",
                    "english" => ""
                ),
            ),
            "webInfo" => $webinfo,
            "downloadInfo" => $downloadinfo
        );
        return \view("main",$mainArr);
    }
}
