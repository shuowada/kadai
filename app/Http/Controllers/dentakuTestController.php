<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dentakuTestController extends Controller
{
     public function inputDentakutest()
    {
        $data = ['msg'=>"テキストボックスに入力してください。"];
        return view('inputDentakutest', $data);
    }

public function dentakutestresult(Request $request) {
 
$input_data = [

'nana' =>$nana,
'hati' =>$hati,
'kyu' =>$kyu,
'waru' =>$waru,
'yon' =>$yon,
'go' =>$go,
'roku' =>$roku,
'kake' =>$kake,
'iti' =>$iti,
'ni' =>$ni,
'san' =>$san,
'hiku' =>$hiku,
'zero' =>$zero,
'ten' =>$ten,
'tsu' =>$tsu
];

        $result = $request->submit;
$nana = $request->nana;  
$hati = $request->hati;
$kyu = $request->kyu;
$waru = $request->waru;
$yon = $request->yon;
$go = $request->go;
$roku = $request->roku;
$kake = $request->kake;
$iti = $request->iti;
$ni = $request->ni;
$san = $request->san;
$hiku = $request->hiku;
$zero = $request->zero;
$ten = $request->ten;
$tsu = $request->tsu;

return view('dentakutestresult', $input_data);
   }



}
