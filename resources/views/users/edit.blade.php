@extends('layouts.default')

@section('title','修改个人资料')

@section('content')
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <div class="row">
                <div class="col s12 m8 offset-m2 l6 offset-l3">
                    <div class="card-panel indigo lighten-1 z-depth-1">
                        <div class="row valign-wrapper">
                            <div class="col s2">
                                <img src="{{ Auth::user()->gravatar('140') }}" alt="" class="circle responsive-img">
                            </div>
                            <div class="col s10">
              <span class="black-text">
                用户名: <b>{{ Auth::user()->name }}</b>
              </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m4 l3"></div>
                <div class="card hoverable col s6">
                    <div class="card-content">
                        <div class="row">
                            @include('shared._errors')
                            @include('shared._message')
                            <form class="col s12" method="POST" action="{{route('users.update',Auth::user())}}">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="name" name="name" type="text" class="validate"
                                               value="{{ Auth::user()->name }}">
                                        <label for="name">密码</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" name="email" class="validate"
                                               value=" {{ Auth::user()->email }}" disabled>
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
                                    <button type="submit" class="waves-effect waves-light btn green darken-1"><i
                                                class="material-icons right">done_all</i>保存修改
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