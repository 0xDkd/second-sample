<div class="col s12 m8 offset-m2 l6 offset-l3">
    <div class="card-panel grey lighten-5 "
         style="background-image: url('http://www.materializecss.cn/images/sample-1.jpg')">
        <div class="row valign-wrapper">
            <div class="col l4 s2  offset-l4">
                <img src="{{ $user->gravatar('140') }}" alt=" {{ $user->name }} " class="circle responsive-img">
            </div>
        </div>
    </div>
    <div class="col s12 m12 12">
        <div class="card horizontal">
            <div class="card-stacked">
                <div class="card-content">
                    <div class="center-align"><h5>用户名： {{$user->name}}</h5></div>
                    <div class="center-align"><h5>关注数：200</h5></div>
                    <div class="center-align"><h5>粉丝数：200</h5></div>
                </div>
            </div>
        </div>
    </div>
    @if(count($statuses)==0)
        <br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
@else
</div>
<div class="col s12 m12 l12">
    <ul class="collection">
        @foreach($statuses as $status)
            @include('statuses._status')
        @endforeach
    </ul>
    {!! $statuses->render() !!}
</div>
@endif
