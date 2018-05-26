@extends('layouts.default')

@section('title','个人中心')

@section('content')
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            @include('shared._message')
            <div class="row">
                <div class="card hoverable large blue-grey darken-1">

                    <div class="card-content " >
                        <div style="display: block" id="before">
                            @include('shared._user_info')
                        </div>

                    </div>
                    <div class="card-action">
                        <a href="{{route('users.edit',$user->id)}}" class="btn waves-effect waves-light cyan darken-1"><i class="material-icons right">edit</i>更改信息</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection