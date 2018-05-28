<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use Auth;

class StaticPagesController extends Controller
{
    public function index()
    {
        $feed_items = [];

        if (Auth::check()){
            $feed_items = Auth::user()->feed()->paginate(10);
        }
        return view('static_pages.index',compact('feed_items'));
    }
}
