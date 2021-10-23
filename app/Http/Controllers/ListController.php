<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dream;

class ListController extends Controller
{
    public function index()
    {
        $dreams = Dream::all();
        return view('home',['items'=>$dreams]);
    }

    public function add(Request $request) {
        $dream = new Dream;
        $data = $request -> all();
        unset($data['_token']);
        $dream->timestamps = false;
        $dream->fill($data)->save();
        return redirect('/');
    }

    public function result() {
        $key = config('app.APIKey');
        return view('list',['key'=>$key]);
    }
}
