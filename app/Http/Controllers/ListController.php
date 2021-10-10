<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ListController extends Controller
{
    public function add(Request $request) {
        $dream = new Dream;
        $data = $request -> all();
        unset($datas['_token']);
        $dream->fill($data)->save();
        return redirect('/home');
    }
}
