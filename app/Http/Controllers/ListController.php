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
        $dream->fill($data)->save();
        return redirect('/home');
    }
}
