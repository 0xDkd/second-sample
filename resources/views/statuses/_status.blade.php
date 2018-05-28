<li class="collection-item avatar">
    <a href="{{route('users.show',$user->id )}}"><img src="{{ $user->gravatar() }}" alt="{{ $user->name }}"
                                                      class="circle"></a>
    <span class="title"><b>{{ $status->title }}</b></span><br>
    <p>{{$status->content}}</p>
    <br>
    <b>{{$user->name}}</b>
    <p class="right-align">{{$status->created_at->diffForHumans()}}</p>
    @can('destroy',$status)
        <form action="{{route('statuses.destroy',$status->id)}}" method="POST">
            {{csrf_field()}}
            {{ method_field('DELETE') }}
            <button class="secondary-content btn red" type="submit"><i
                        class="material-icons right">delete</i> 删除
            </button>
        </form>
    @endcan
</li>