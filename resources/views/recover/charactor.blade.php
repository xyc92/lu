@extends('layouts.app')
<style>
    .card{
        background:rgba(255,255,255,0.5)!important;
    }
</style>
<script>
    window.onload=function(){
        jigsaw.init({
        el: document.getElementById('jigsaw_id'),
        width: 330, // 可选, 默认310
        height: 155,
        onSuccess:function(){
            $("#submit-button").removeAttr("disabled");
        }
        })
        $("#jigsaw_id").css({"margin":"1rem auto","left":"8.5%"})
    }
    
</script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('角色恢复') }}</div>

                @if(isset($isComplete))
                    <div role="alert" class="alert alert-success">
                            角色已经恢复!
                    </div>
                @endif
                <div class="card-body">

                    <form method="POST" action="{{ route('recover.charactor') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('用户名') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="name" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div id="jigsaw_id">

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" disabled="disabled" id="submit-button">
                                    {{ __('确认') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
