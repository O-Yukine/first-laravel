<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    #1-8 route 練習問題１
    // public function index($room, $id)
    // {



    //     $item = [
    //         'content' => 'パラメーターを渡す',
    //         'param' => $room,
    //         'param_id' => $id

    //     ];

    //     return view('index', $item);
    // }


    // public function index($text)
    // { /// ・・・①
    //     $item = [
    //         'content' => 'パラメータを渡す',
    //         'param' => $text  /// ・・・②
    //     ];
    //     return view('index', $item);
    // }

    public function index()
    {
        $item = [
            'content' => '本文',

        ];
        return view('index', $item);
    }
}
