<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>電卓テスト</title>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  </head>
<body>
<table id="app">

            <tr>
	<div><?php{{$msg}}?></div>
	<form action="formPost" method="POST">
	 
                <td colspan="4"><input type="text" v-model="output" name="sum_name"></td>

                <td><button value="C" v-on:click="calc('C')">C</button></td>
            </tr>
            <tr v-for="row in items">
                <td v-for="item in row">
                    <button v-on:click="calc(item)">{{ item }}</button>
                </td>
            </tr>
        </table>
<script src="script.js"></script>
</body>
</html>