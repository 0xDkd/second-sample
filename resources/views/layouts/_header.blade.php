<nav class="teal darken-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="{{ route('static.index') }}" class="brand-logo">Sample-Second</a>

        <ul class="right hide-on-med-and-down">
            @if(Auth::check())

                <div class="chip teal darken-1 dropdown-button btn" data-activates='dropdown1' data-beloworigin="true"
                     data-constrainwidth="false">
                    <img src="{{ Auth::user()->gravatar() }}" alt="Contact Person">
                    {{Auth::user()->name}}
                </div>

                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#"><i class="material-icons right">assessment</i> 访问后台 </a></li>
                    <li><a href="{{ route('users.show',Auth::user()) }}"><i class="material-icons right">recent_actors</i> 个人主页 </a></li>
                    <li><a href="#"><i class="material-icons right">edit</i> 编辑资料 </a></li>
                    <li class="divider"></li>
                    <li><a href="#">
                            <form action="{{route('logout')}}" method="POST">
                                {{ csrf_field() }}
                                {{method_field('DELETE')}}
                                <button class="btn red" type="submit">退出登录</button>
                            </form>

                        </a></li>


                </ul>

            @else
                <li><a href="{{route('register')}}">注册</a></li>
                <li><a href="{{route('login')}}">登录</a></li>
            @endif
        </ul>

    </div>
</nav>