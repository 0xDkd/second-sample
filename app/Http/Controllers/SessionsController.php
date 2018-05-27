<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SessionRequest;
use Auth;



class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(SessionRequest $request)
    {
        $certificate['email'] = $request->email;
        $certificate['password'] = $request->password;
        if (Auth::attempt($certificate, $request->has('remember'))) {
            if (Auth::user()->activated) {
                session()->flash('info', '登录成功');
                return redirect()->intended(route('users.show', [Auth::user()]));
            } else {
                Auth::logout();
                session()->flash('warning', '你的账号未激活，请检查邮箱中的注册邮件进行激活。');
                return redirect('/');
            }
        } else {
            session()->flash('danger', '抱歉,您的用户名密码不匹配');
            return redirect()->back();
        }
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('info', '您已经安全退出');
        return redirect()->route('login');
    }

}
