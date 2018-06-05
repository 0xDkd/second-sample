@extends('layouts.default')

@section('title','个人中心')

@section('content')
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            @include('shared._message')
            <div class="row">

                @include('shared._user_info')
                @include('shared._user_fixed_action_btn')
            </div>
        </div>
    </div>
@endsection