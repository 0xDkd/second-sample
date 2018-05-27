@extends('layouts.default')
@section('title','注册')

@section('content')
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <div class="row">
                <div class="col s12 m4 l2"></div>
                <div class="col s12 m4 l8">
                    <div class="card-panel  orange lighten-1">
                        <span class="white-text"><h5 class="center-align"><i
                                        class="material-icons">restore</i> 重置密码</h5></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m4 l3"></div>
                <div class="card hoverable col s6">
                    <div class="card-content">
                        <div class="row">
                            @if ($errors->has('email'))
                                <div class="col s12 m4 l12">
                                    <div class="card-panel blue-grey">
                                        <ul>
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            @if ($errors->has('password_confirmation'))
                                <div class="col s12 m4 l12">
                                    <div class="card-panel blue-grey">
                                        <ul>
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            @if ($errors->has('password'))
                                <div class="col s12 m4 l12">
                                    <div class="card-panel blue-grey">
                                        <ul>
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            <form class="col s12" method="POST" action="{{ route('password.update') }}">
                                {{ csrf_field() }}
                                {{--自动获取 token --}}
                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" name="email" class="validate"
                                               value="{{old('email')}}">
                                        <label for="email">邮箱</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" name="password" type="password" class="validate"
                                               value="{{old('password')}}">
                                        <label for="password">密码</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password_confirmation" name="password_confirmation" type="password"
                                               class="validate"
                                               value="{{old('password_confirmation')}}">
                                        <label for="password_confirmation">重复密码</label>
                                    </div>
                                </div>
                                <br>
                                <div class="card-action">
                                    <button type="submit" class="waves-effect waves-light btn cyan"><i
                                                class="material-icons right">restore</i>重置密码
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection

