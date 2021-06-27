
<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>電卓テスト</title>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  </head>
<body>
<div>{{$msg}}</div>
<table id="app">
<form action="dentakuresult" method="POST">
            <tr>
<input type="text" v-model="output"></td>
                <td><button value="C" v-on:click="calc('C')">C</button></td>
            </tr>
            <tr>
                <td><input name="nana" type="text"><button onClick="calc('7')">7</button></td>
                <td><button onClick="calc('8')">8</button><input name="hati" type="text"></td>
                <td><button onClick="calc('9')">9</button><input name="kyu" type="text"></td>
                <td><button onClick="calc('/')">/</button><input name="waru" type="text"></td>
            </tr>
            <tr>
                <td><button onClick="calc('4')">4</button><input name="yon" type="text"></td>
                <td><button onClick="calc('5')">5</button><input name="go" type="text"></td>
                <td><button onClick="calc('6')">6</button><input name="roku" type="text"></td>
                <td><button onClick="calc('*')">*</button><input name="kake" type="text"></td>
            </tr>
            <tr>
                <td><button onClick="calc('1')">1</button><input name="iti" type="text"></td>
                <td><button onClick="calc('2')">2</button><input name="ni" type="text"></td>
                <td><button onClick="calc('3')">3</button><input name="san" type="text"></td>
                <td><button onClick="calc('-')">-</button><input name="hiku" type="text"></td>
            </tr>
            <tr>
                <td><button onClick="calc('0')">0</button><input name="zero" type="text"></td>
                <td><button onClick="calc('.')">.</button><input name="ten" type="text"></td>
                <td><button onClick="calc('+')">+</button><input name="tsu" type="text"></td>
                <td><button onClick="calc('=')">=</button><button type="submit">送信</button></td>
            </tr>
        </table>
</body>
<script src="{{ asset('/js/script.js') }}"></script>

</html>

