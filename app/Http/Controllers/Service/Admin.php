<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\LogsInfo;
use App\WebInfo;
use App\DownloadInfo;

class Admin extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function AdminView(){

        if(Auth::user()->gameMaster != 1)return redirect("/");
        if(empty(WebInfo::first())){
            $webinfo = new WebInfo();
            $webinfo->contactInfo = 'qq：376700119';
            $webinfo->reportInfo = '请将疑似玩家游戏名称及游戏截图【若有】发送至以下邮箱 azusa.nakano@foxmail.com我们将在查看到邮件后立即给予您回复，如经查实将会对违规玩家禁封处理。感谢您对游戏环境做出的热心贡献！';
            $webinfo->selfhelpInfo = 'dd';
            $webinfo->modified = now();
            $webinfo->save();
        }
        if(empty(DownloadInfo::first())){
            $downloadinfo = new DownloadInfo();
            $downloadinfo->first = "百度云下载(百度云可能会产生下载限速)：";
            $downloadinfo->second = '链接:https://pan.baidu.com/s/1C9c-M5oI7rkDq1k8jCHfVg';
            $downloadinfo->third = '提取码:h9n7';
            $downloadinfo->modified = now();
            $downloadinfo->save();
            $downloadinfo = new DownloadInfo();
            $downloadinfo->first = "和彩云下载(和彩云网盘可能需要移动手机号码登录)：";
            $downloadinfo->second = '链接:
            https://caiyun.139.com/m/i?0H5CgkEioTAfF';
            $downloadinfo->third = '提取码:
            bef0';
            $downloadinfo->modified = now();
            $downloadinfo->save();
        }
        $downloadinfo = DownloadInfo::all();
        $webinfo = WebInfo::all();
        return \view('admin',array('downloadInfo'=>$downloadinfo,'webInfo'=>$webinfo));
    }

    public function AdminUpload(Request $request){
        // dd($request->session()->all());
        if(Auth::user()->gameMaster != 1)return redirect("/");
        $webinfo = WebInfo::find(1);
        $webinfo->contactInfo = $request->contact_info;
        $webinfo->reportInfo = $request->report_info;
        $webinfo->internetNumber = $request->internet_number;
        $webinfo->save();
        for($i = 1;$i<($request->downloadinfo_count)+1;$i++){
            $downloadinfo = DownloadInfo::find($i);
            $downloadinfo->first = $request->input($i.'_first');
            $downloadinfo->second = $request->input($i.'_second');
            $downloadinfo->third = $request->input($i.'_third');
            $downloadinfo->save();
        }
        $request->session()->put('webInfo',WebInfo::all());
        $request->session()->put('downloadInfo',DownloadInfo::all());
        return redirect('admin');
    }
}
