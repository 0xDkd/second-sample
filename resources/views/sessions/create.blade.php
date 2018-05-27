@extends('layouts.default')

@section('title','登录')

@section('content')
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <div class="row">
                <div class="col s12 m4 l2"></div>
                <div class="col s12 m4 l8">
                    <div class="card-panel green darken-1">
                        <span class="white-text"><h5 class="center-align"><i class="material-icons">input</i> 登录</h5></span>
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
                            <form class="col s12" method="POST" action="{{route('login')}}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" name="email" class="validate" value="{{old('email')}}">
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
                                <br>
                                <div class="switch">
                                    <label>
                                        记住我
                                        <input type="checkbox" name="remember">
                                        <span class="lever"></span>

                                    </label>
                                </div>
                                <br>


                                <div class="card-action">
                                    <a href="{{route('password.request')}}"> 忘记密码</a><br><br>
                                    <button type="submit" class="waves-effect waves-light btn green darken-1"><i class="material-icons right">input</i>登录</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection