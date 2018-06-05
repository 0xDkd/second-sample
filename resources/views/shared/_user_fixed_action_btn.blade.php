<div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large darken-1">
        <i class="large material-icons">star</i>
    </a>
    <ul>
        @if ($user->id !== Auth::user()->id)
            @if (Auth::user()->isFollowing($user->id))
                <form action="{{ route('followers.destroy', $user->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    {{--<button type="submit" class="btn btn-sm">取消关注</button>--}}
                    <li>
                        <button type="submit" class="btn-floating red tooltipped" data-position="top" data-delay="50"
                                data-tooltip="取消关注"><i class="material-icons">visibility_off</i></button>
                    </li>
                </form>
            @else
                <form action="{{ route('followers.store', $user->id) }}" method="post">
                    {{ csrf_field() }}
                    <li>
                        <button type="submit" class="btn-floating yellow darken-1 tooltipped" data-position="top"
                                data-delay="50" data-tooltip="关注此人"><i class="material-icons">visibility</i></button>
                    </li>
                </form>
            @endif
        @endif
    </ul>
</div>


