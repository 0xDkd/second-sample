<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StatusRequest;
use App\Models\Status;

use Auth;


class StatusesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(StatusRequest $request)
    {
        Auth::user()->statuses()->create([
            'content' => $request['content']
        ]);
        session()->flash('success','微博创建成功');
        return redirect()->back();
    }

    public function destroy(Status $status)
    {
        $this->authorize('destroy',$status);
        $status->delete();
        session()->flash('success', '微博已被成功删除！');
        return redirect()->back();
    }


}
