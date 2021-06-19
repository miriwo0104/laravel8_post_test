<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <form action="{{ route('post') }}" method="get">
            @csrf
            <input type="radio" name="int_check" value="true">数字の入力 true
            <br>
            <input type="radio" name="int_check" value="false">数字の入力 false
            <br>
                @if ($errors->has('int_check'))
                    <tr>
                        <th>ERROR</th>
                            @foreach ($errors->get('int_check') as $error)
                                <td>{{  $error  }}</td>
                            @endforeach
                    </tr>
                    <br>
                @endif
            <input type="text" name="int_input">数字の入力欄
            <br>
                @if ($errors->has('int_input'))
                    <tr>
                        <th>ERROR</th>
                            @foreach ($errors->get('int_input') as $error)
                                <td>{{  $error  }}</td>
                            @endforeach
                    </tr>
                    <br>
                @endif
            <br>
            <input type="radio" name="str_check" value="true">文字列の入力 true
            <br>
            <input type="radio" name="str_check" value="false">文字列の入力 false
            <br>
                @if ($errors->has('str_check'))
                    <tr>
                        <th>ERROR</th>
                            @foreach ($errors->get('str_check') as $error)
                                <td>{{  $error  }}</td>
                            @endforeach
                    </tr>
                    <br>
                @endif            
            <input type="text" name="str_input">文字列の入力欄
            <br>
                @if ($errors->has('str_input'))
                    <tr>
                        <th>ERROR</th>
                            @foreach ($errors->get('str_input') as $error)
                                <td>{{  $error  }}</td>
                            @endforeach
                    </tr>
                    <br>
                @endif
            <button type="submit">送信</button>
        </form>
    </main>
    <footer></footer>
</body>
</html>