@extends('layouts.app')
<style>
    .buttonchinese {
        font-size: 2em;
        margin: 5%;
    }

    .buttondiv {
        text-align: center;
        font-weight: 300;
        color: #1a9de5;
        border: 1px solid #d2d2d2;
    }
</style>
@section('content')

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
                    <div class="row buttondiv">
                        <div class="col-md-3">
                            <img src="{{$img[0]}}" width="90rem">
                        </div>
                        <div class="col-md-8">
                            <label for="{{$buttonMessage[0]['chinese']}}" class="buttonchinese">{{$buttonMessage[0]['chinese']}}</label>
                            <label class="buttonenglish">{{$buttonMessage[0]['english']}}</label>
                        </div>
                    </div>
                    <div class="row buttondiv">
                        <div class="col-md-3">
                            <img src="{{$img[1]}}" width="90rem">
                        </div>
                        <div class="col-md-8">
                            <label for="{{$buttonMessage[1]['chinese']}}" class="buttonchinese">{{$buttonMessage[1]['chinese']}}</label>
                            <label class="buttonenglish">{{$buttonMessage[1]['english']}}</label>
                        </div>
                    </div>
                    <div class="row buttondiv">
                        
                        <div class="col-md-8">
                            <label for="{{$buttonMessage[2]['chinese']}}" class="buttonchinese">{{$buttonMessage[2]['chinese']}}</label>
                            <label class="buttonenglish">{{$buttonMessage[2]['english']}}</label>
                        </div>
                        <div class="col-md-3">
                            <img src="{{$img[2]}}" width="90rem">
                        </div>
                    </div>
                    <div class="row buttondiv">
                        
                        <div class="col-md-8">
                            <label for="{{$buttonMessage[3]['chinese']}}" class="buttonchinese">{{$buttonMessage[3]['chinese']}}</label>
                            <label class="buttonenglish">{{$buttonMessage[3]['english']}}</label>
                        </div>
                        <div class="col-md-3">
                            <img src="{{$img[3]}}" width="90rem">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection