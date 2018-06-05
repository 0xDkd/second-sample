@extends('layouts.default')

@section('title',$title)

@section('content')

    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <div class="row">
                <div class="col s12 m4 l2"></div>
                <div class="col s12 m4 l8">
                    <div class="card-panel green darken-1">
                        <span class="white-text"><h5 class="center-align"> {{$title}} </h5></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="collection">
                    @foreach($users as $user)
                        <li class="collection-item avatar">
                            <a href="{{route('users.show',$user->id)}}"><img src="{{$user->gravatar()}}"
                                                                             alt="{{$user->name}}" class="circle"></a>
                            <span class="title">{{ $user->name }}</span>
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                    @endforeach
                </ul>
                {!! $users->render() !!}
            </div>
        </div>
    </div>
@endsection