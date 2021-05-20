@extends('layouts.app')
<style>
    input{width:100%;}
    textarea{width: 100%;}
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('网站信息') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.upload') }}">
                        @csrf
                        <div class="form-group">
                            <label>联系我们：</label>
                            <input type="text" name='contact_info' value="{{$webInfo[0]['contactInfo']}}">


                        </div>
                        <div class="form-group">
                            <label>举报外挂：</label>
                            <textarea name="report_info">{{$webInfo[0]['reportInfo']}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>备案号：</label>
                            <input name="internet_number" value="{{$webInfo[0]['internetNumber']}}">
                        </div>
                        <div class="form-group">
                            <label>下载链接：</label>
                            <input type="hidden" name='downloadinfo_count' value="{{count($downloadInfo)}}">
                            @foreach($downloadInfo as $value)                
                            <p><label>第一段：</label><textarea name='{{$value["id"]}}_first'>{{$value['first']}}</textarea></p>
                            <p><label>第二段：</label><textarea name='{{$value["id"]}}_second'>{{$value['second']}}</textarea></p>
                            <p><label>第三段：</label><textarea name='{{$value["id"]}}_third'>{{$value['third']}}</textarea></p>
                            @endforeach
                        </div>
                        <div class="form-group">

                            <button type="submit" class="btn btn-primary" id="submit-button">
                                {{ __('确认') }}
                            </button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection