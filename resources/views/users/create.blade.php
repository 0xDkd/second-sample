@extends('layouts.default')
@section('title','注册')

@section('content')
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <div class="row">
                <div class="col s12 m4 l2"></div>
                <div class="col s12 m4 l8">
                    <div class="card-panel  cyan">
                        <span class="white-text"><h5 class="center-align"><i class="material-icons">assignment_ind</i> 注册</h5></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m4 l3"></div>
                <div class="card hoverable col s6">
                    <div class="card-content">
                        <div class="row">
                            @include('shared._errors')
                            <form class="col s12" method="POST" action="{{route('users.store')}}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="name" type="text" name="name" class="validate" value="{{old('name')}}">
                                        <label for="name">用户名</label>
                                    </div>
                                </div>

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

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password_confirmation"  name="password_confirmation" type="password" class="validate"
                                               value="{{old('password_confirmation')}}">
                                        <label for="password_confirmation">重复密码</label>
                                    </div>
                                </div>
                                <br>
                                <div class="card-action">
                                    <button type="submit" class="waves-effect waves-light btn cyan"><i class="material-icons right">assignment_ind</i>注册</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection


