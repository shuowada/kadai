<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>電卓テストresult</title>
</head>
<body>
<h1>POST結果</h1>
    <div>{{$msg}}</div>
    <div>途中式：{{$nana  ,$hati,$kyu,$waru,$yon,$go,$roku,$kake,$iti
,$ni,$san,$hiku,$zero,$ten,$tsu}}</div>
    <div>合計金額：{{$total_value}}</div>

<a href="{{ action('postTestdentakuController@inputDentakutest')}}">入力画面に戻る</a>
  </body>
</html>