@extends('layouts.default')

@section('title','重置密码')

@section('content')
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <div class="row">
                <div class="col s12 m4 l2"></div>
                <div class="col s12 m4 l8">
                    <div class="card-panel orange lighten-1">
                        <span class="white-text"><h5 class="center-align"><i
                                        class="material-icons ">restore</i> 重置密码</h5></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m4 l3"></div>
                <div class="card hoverable col s6">
                    <div class="card-content">
                        <div class="row">
                            @if (session('status'))
                                <div class="col s12 m4 l12">
                                    <div class="card-panel light-green">
                                        <ul>
                                            <h5 class="center-align white-text">{{ session('status') }}</h5>
                                        </ul>
                                    </div>
                                </div>
                            @endif

                            @if ($errors->has('email'))
                                <div class="col s12 m4 l12">
                                    <div class="card-panel blue-grey">
                                        <ul>
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            <form class="col s12" method="POST" action="{{route('password.email')}}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" name="email" class="validate"
                                               value="{{old('email')}}">
                                        <label for="email">邮箱</label>
                                    </div>
                                </div>
                                <br>
                                <div class="card-action">
                                    <button type="submit" class="waves-effect waves-light btn orange lighten-1"><i
                                                class="material-icons right">send</i>发送邮件
                                    </button>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
@endsection