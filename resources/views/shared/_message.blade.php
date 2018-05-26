@foreach(['danger'=>'red lighten-1', 'success'=> 'light-green','info'=>'indigo cyan','warning'=>'orange lighten-1'] as $msg=>$style)
    @if(session()->has($msg))
        <div class="col s12 m4 l12">
            <div class="card-panel {{$style}}">
                <ul>
                    <h4 class="white-text center-align">{{session()->get($msg)}}</h4>
                </ul>
            </div>
        </div>
    @endif
@endforeach
