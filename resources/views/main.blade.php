@extends('layouts.app')
<style>
    .buttonchinese {
        font-size: 2em;
        margin: 5%;
    }

    .button-div {
        cursor: pointer;
        text-align: center;
        font-weight: 300;
        color: #1a9de5;
        border: 1px solid #d2d2d2;
    }

    .button-div:hover {
        background: #1a9de5;
        color: white;
    }

    .part2-div {
        text-align: center;
        cursor: pointer;
    }

    .part2-div img {
        margin: auto;
        display: inherit;
    }

    .part2-div label {
        margin: auto;
        display: inherit;
    }

    .backgroud-black-div {
        z-index: 1;
        background-color: black;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0px;
        left: 0px;
        opacity: 0.5;
    }

    .message-div {
        z-index: 2;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .message-div p {
        width: 50rem;
    }
</style>
<script>
    window.onload=function(){
        $("div[method]").on('click',function(){
            $(".backgroud-black-div").show();
            let method = $(this).attr("method");
            $(`.${method}`).show();
            console.log($(this).attr("method"));
        })

        $(`.message-div span`).on("click",function(){
            $(".backgroud-black-div").hide();
            $(`.message-div`).hide();
        })
    }
</script>
@section('content')
<div class="backgroud-black-div" style="display:none">
</div>

<div class='message-div download' style="display:none">
    <div class="card">
        <div class="card-header">{{ __('下载地址(复制到浏览器下载)') }}

            <span style="float:right;cursor:pointer;" onclick="">关闭</span>
        </div>

        <div class="card-body">
            <label for="">百度云下载(百度云可能会产生下载限速)：</label>
        </div>
        <div class="card-body">
            <p>链接:</p>
            <p>https://pan.baidu.com/s/1C9c-M5oI7rkDq1k8jCHfVg</p>
        </div>
        <div class="card-body">
            <p>提取码:</p>
            <p>h9n7</p>
        </div>
        <div class="card-body">
            <label for="">和彩云下载(和彩云网盘可能需要移动手机号码登录)：</label>
        </div>
        <div class="card-body">
            <p>链接:</p>
            <p>https://caiyun.139.com/m/i?0H5CgkEioTAfF</p>
        </div>
        <div class="card-body">
            <p>提取码:</p>
            <p>bef0</p>
        </div>
    </div>
</div>

<div class='message-div contact' style="display:none">
    <div class="card">
        <div class="card-header">{{ __('联系管理员') }}

            <span style="float:right;cursor:pointer;" onclick="">关闭</span>
        </div>
        <div class="card-body">
            <p>qq：376700119</p>
        </div>
    </div>
</div>

<div class='message-div report' style="display:none">
    <div class="card">
        <div class="card-header">{{ __('举报外挂') }}

            <span style="float:right;cursor:pointer;" onclick="">关闭</span>
        </div>
        <div class="card-body">
            <p>请将疑似玩家游戏名称及游戏截图【若有】发送至以下邮箱</p>
            <p> azusa.nakano@foxmail.com</p>
            <p>我们将在查看到邮件后立即给予您回复，如经查实将会对违规玩家禁封处理。</p>
            <p>感谢您对游戏环境做出的热心贡献！</p>
        </div>
    </div>
</div>


<div class="container" style="float: left;">
    <div class="row logo">
        <div class="col-md-1">

        </div>
        <div class="col-md-3">
            <img src="img/logo/logo.png" alt="" width="250rem">
        </div>
    </div>
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-11">
                    <div class="row button-div" onclick="window.location='register'">
                        <div class="col-md-3">
                            <img src="{{$img[0]}}" width="90rem">
                        </div>
                        <div class="col-md-8">
                            <label for="{{$buttonMessage[0]['chinese']}}" class="buttonchinese">{{$buttonMessage[0]['chinese']}}</label>
                            <label class="buttonenglish">{{$buttonMessage[0]['english']}}</label>
                        </div>
                    </div>
                    <div class="row button-div" method="download">
                        <div class="col-md-3">
                            <img src="{{$img[1]}}" width="90rem">
                        </div>
                        <div class="col-md-8">
                            <label for="{{$buttonMessage[1]['chinese']}}" class="buttonchinese">{{$buttonMessage[1]['chinese']}}</label>
                            <label class="buttonenglish">{{$buttonMessage[1]['english']}}</label>
                        </div>
                    </div>
                    <div class="row button-div">

                        <div class="col-md-8">
                            <label for="{{$buttonMessage[2]['chinese']}}" class="buttonchinese">{{$buttonMessage[2]['chinese']}}</label>
                            <label class="buttonenglish">{{$buttonMessage[2]['english']}}</label>
                        </div>
                        <div class="col-md-3">
                            <img src="{{$img[2]}}" width="90rem">
                        </div>
                    </div>
                    <div class="row button-div">

                        <div class="col-md-8">
                            <label for="{{$buttonMessage[3]['chinese']}}" class="buttonchinese">{{$buttonMessage[3]['chinese']}}</label>
                            <label class="buttonenglish">{{$buttonMessage[3]['english']}}</label>
                        </div>
                        <div class="col-md-3">
                            <img src="{{$img[3]}}" width="90rem">
                        </div>
                    </div>
                    <div class="row part2-div">

                        <div class="col-md-6" method="contact">
                            <img src="{{$img[4]}}" width="90rem">
                            <label for="{{$buttonMessage[4]['chinese']}}" class="buttonchinese_2">{{$buttonMessage[4]['chinese']}}</label>
                        </div>
                        <div class="col-md-6">
                            <img src="{{$img[5]}}" width="90rem">
                            <label for="{{$buttonMessage[5]['chinese']}}" class="buttonchinese_2">{{$buttonMessage[5]['chinese']}}</label>
                        </div>
                    </div>
                    <div class="row part2-div">

                        <div class="col-md-6" method="report">
                            <img src="{{$img[6]}}" width="90rem">
                            <label for="{{$buttonMessage[6]['chinese']}}" class="buttonchinese_2">{{$buttonMessage[6]['chinese']}}</label>
                        </div>
                        <div class="col-md-6" onclick="window.location='recover'">
                            <img src="{{$img[7]}}" width="90rem">
                            <label for="{{$buttonMessage[7]['chinese']}}" class="buttonchinese_2">{{$buttonMessage[7]['chinese']}}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection