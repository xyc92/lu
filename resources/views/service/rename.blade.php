@extends('layouts.app')
<style>
    .card {
        background: rgba(255, 255, 255, 0.8) !important;
    }
</style>
<script>
    window.onload = function() {
        $(`select[name="id"]`).on('change', function() {
            $(`select[name="gold"]`).val($(this).val());
        })
    }
</script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('自助改名') }}</div>
                @if(Session::has('message'))
                <span class="alert alert-{{ Session::get('message')['type'] }}" role="alert">
                    <strong>{{ Session::get('message')['content'] }}</strong>
                </span>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('rename.upload') }}">
                        @csrf
                        <label>角色名：</label><select name='id'>
                            @forelse($playerList as $player)
                            <option value="{{$player->id}}">{{$player->name}}</option>
                            @empty
                            @endforelse
                        </select>

                        <label>金币数：</label> <select disabled='disabled' name="gold">
                            @forelse($playerList as $player)
                            <option value="{{$player->id}}">{{$player->gold}}</option>
                            @empty
                            @endforelse
                        </select>

                        <div class="form-group">
                            <label for="name">{{ __('新角色名：') }}</label>

                            <input id="name" name="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <!-- 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                        </div>

                        <div class="form-group">

                            <button type="submit" class="btn btn-primary" id="submit-button">
                                {{ __('确认') }}
                            </button>
                        </div>

                    </form>
                </div>
                <div class="card-body">
                    <p>说明：改名需要角色内拥有十万金币，如金币不足则无法改名成功。改名后请退出至角色选择画面再进入。</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection