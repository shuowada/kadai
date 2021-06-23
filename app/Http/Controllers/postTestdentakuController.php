<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postTestdentakuController extends Controller
{
public function dentakutest()
    {
        $data = ['msg'=>"テキストボックスに入力してください。"];
        return view('dentakutest', $data);
    }

    public function formPost(Request $request)
    {
        $data = [
            'sum_name'=>$request->sum_name,
            
            'msg'=>"入力値を元に表示しています。"
        ];
        return view('resultPage', $data);
    }
    //
}
