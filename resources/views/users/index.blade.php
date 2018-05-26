@extends('layouts.default')

@section('title','用户列表')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m4 l2"></div>
            <div class="col s12 m4 l8">
                <div class="card-panel  cyan">
                    <span class="white-text"><h5 class="center-align"><i
                                    class="material-icons">people</i> 用户列表</h5></span>
                </div>
            </div>
        </div>

        @include('users._users_list')
    </div>
@endsection