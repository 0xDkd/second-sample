@extends('layouts.default')
@section('title','首页')
@section('content')
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <div class="row">
                @include('shared._message')
                {{--reset Passowrd message --}}
                @if (session('status'))
                    <div class="col s12 m4 l12">
                        <div class="card-panel light-green">
                            <ul>
                                <h5 class="center-align white-text">{{ session('status') }}</h5>
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="card hoverable large">
                    <div class="card-image">
                        <img src="http://archives.materializecss.com/0.100.2/images/sample-1.jpg">
                        <span class="card-title">Laravel 练习</span>
                    </div>
                    <div class="card-content">
                        <div style="display: block" id="before">
                            <h4>今天你又学会了什么呢？</h4>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <a href="#" class="btn waves-effect waves-light cyan darken-1"><i
                                class="material-icons right">send</i>现在就开始</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection