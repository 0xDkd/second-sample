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
                @include('shared._errors')
            </div>
            <div class="row">
                {{--@if(!Auth::check())--}}
                <div class="card hoverable large">
                    <div class="card-image">
                        <img src="http://archives.materializecss.com/0.100.2/images/sample-1.jpg">
                        <span class="card-title">Laravel 练习</span>
                    </div>
                    <div class="card-content">
                        @if(!Auth::check())
                            <h4>今天你又学会了什么呢？</h4>


                    </div>
                    <div class="card-action">
                        <a href="{{route('login')}}" class="btn waves-effect waves-light cyan darken-1"><i
                                    class="material-icons right">send</i>现在就开始</a>
                    </div>
                    @else
                        <form action="{{route('statuses.store')}}" method="POST">
                            <div class="row">
                                <div class="input-field col s12">
                                    {{csrf_field()}}
                                    <textarea id="textarea1" class="materialize-textarea"
                                              placeholder="写点什么" name="content"></textarea>
                                    <label for="textarea1">微博</label>
                                </div>
                            </div>
                            <div class="card-action">
                                <button type="submit" class="btn waves-effect waves-light cyan darken-1"><i
                                            class="material-icons right">send</i>发送微博
                                </button>
                            </div>
                        </form>
                    @endif
                </div>

            </div>
        </div>
        @if(Auth::check())
            <ul class="collection">
                @include('shared._feed')
            </ul>
            {!! $feed_items->render() !!}
        @else
            <br><br><br><br><br><br>
        @endif
    </div>

@endsection