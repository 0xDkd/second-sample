<div class="row">
    <ul class="collection">
        @foreach($users as $user)
            <li class="collection-item avatar">
                <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="circle">
                <span class="title">{{ $user->name }}</span>
                <p>{{$user->email}}</p>
                @can('destroy',$user)
                    <form action="{{route('users.destroy',$user->id)}}" method="POST">
                        {{csrf_field()}}
                        {{ method_field('DELETE') }}
                        <button class="secondary-content btn red" type="submit"><i
                                    class="material-icons right">delete</i> 删除
                        </button>
                    </form>
                @endcan
            </li>
        @endforeach
    </ul>
</div>
{!! $users->render() !!}